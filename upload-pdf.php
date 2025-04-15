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
    $fileName = basename($file['name']);
    $uploadDir = 'uploads/'; // The folder where the file will be stored
    $filePath = $uploadDir . $fileName;

    // Move the uploaded file to the server
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Insert the file path into MySQL database
        $sql = "INSERT INTO resumes (pdf_path) VALUES ('$filePath')";
        if ($conn->query($sql) === TRUE) {
            // Return the URL of the uploaded file
            $pdfUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $filePath;
            echo json_encode(['pdfUrl' => $pdfUrl]); // Return the PDF URL in response
        } else {
            echo json_encode(['error' => 'Failed to insert into database']);
        }
    } else {
        echo json_encode(['error' => 'Failed to upload file']);
    }
}

$conn->close();
?>
