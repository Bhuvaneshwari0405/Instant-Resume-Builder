<?php

// Decode the incoming JSON data
$inputData = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($inputData['phoneNumber'], $inputData['education'], $inputData['skills'])) {
    // Get the values from the form
    $phoneNumber = $inputData['phoneNumber'];
    $education = $inputData['education'];
    $skills = $inputData['skills'];

    // Perform ATS checks based on form values
    $atsCheck = checkATS($phoneNumber, $education, $skills);

    // Return the result as JSON
    echo json_encode($atsCheck);
    exit;
}

// Function to check ATS-friendliness based on form data
function checkATS($phoneNumber, $education, $skills) {
    $score = 100;
    $issues = [];

    // Check if the phone number is valid (basic regex for phone number validation)
    if (!preg_match('/^\+?\d{1,4}[-\s]?\(?\d{1,4}\)?[-\s]?\d{1,4}[-\s]?\d{1,4}$/', $phoneNumber)) {
        $score -= 10;
        $issues[] = 'Invalid phone number format.';
    }

    // Check if the education field is not empty
    if (empty($education)) {
        $score -= 20;
        $issues[] = 'Education information is missing.';
    }

    // Check if the skills field is not empty
    if (empty($skills)) {
        $score -= 10;
        $issues[] = 'Skills information is missing.';
    }

    // Check if the resume includes specific important keywords (optional)
    // For example, check if the "Education" contains a valid degree or school
    if (!preg_match('/(Bachelors?|Masters?|PhD|Degree|University|College)/i', $education)) {
        $score -= 10;
        $issues[] = 'Education section lacks proper degree or institution details.';
    }

    // If the score drops below 50, consider it not ATS-friendly
    if ($score < 50) {
        $issues[] = 'Resume may not be ATS-friendly.';
    }

    return ['score' => $score, 'issues' => $issues];
}