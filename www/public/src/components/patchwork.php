<?php
if (isset($_POST['formType'])) {
    $formType = $_POST['formType'];

    if ($formType === 'form1') {
        // Form 1 was submitted
    } elseif ($formType === 'form2') {
        // Form 2 was submitted
    }
}
// Get the form type from the hidden input
$formType = isset($_POST['formType']) ? $_POST['formType'] : '';

// Define the expected keys for each form type
$expectedKeys = [
    'form1' => ['q1'],
    'form2' => ['q2', 'q3'],
    'form3' => ['q4', 'q5'],
    'form4' => ['q6', 'q7', 'q8', 'q9', 'q10'],
];

// Check if the form type is valid
if (isset($expectedKeys[$formType])) {
    // Loop through each expected key for the specific form type
    foreach ($expectedKeys[$formType] as $key) {
        // Initialize the key only if it's not present in the form
        if (!isset($_POST[$key])) {
            $_POST[$key] = '';
        }
    }
}

