<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the file is uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['resumePdf'])) {
    $file = $_FILES['resumePdf'];
    $uploadDir = 'uploads/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Count existing resumes in the DB
    $result = $conn->query("SELECT COUNT(*) AS total FROM resumes");
    $row = $result->fetch_assoc();
    $resumeNumber = $row['total'] + 1;

    // Define new filename
    $fileName = "resume" . $resumeNumber . ".pdf";
    $filePath = $uploadDir . $fileName;

    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Insert path into DB
        $sql = "INSERT INTO resumes (pdf_path) VALUES ('$filePath')";
        if ($conn->query($sql) === TRUE) {
            // Return the URL of the uploaded file
            $pdfUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $filePath;
            echo json_encode(['pdfUrl' => $pdfUrl]);
        } else {
            echo json_encode(['error' => 'Failed to insert into database']);
        }
    } else {
        echo json_encode(['error' => 'Failed to upload file']);
    }
}

$conn->close();
?>
