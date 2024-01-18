<?php
function redirect() {
    // Start the session if not already started
    // session_start();

    // Set the default previous page
    $previousPage = 'index';

    // Get the form type from the hidden input
    $formType = isset($_POST['formType']) ? $_POST['formType'] : '';

    // Define the mapping of form types to corresponding pages
    $formTypePages = [
        'form0' => 'index',
        'form1' => 'question-form1',
        'form2' => 'question-form2',
        'form3' => 'question-form3',
    ];

    // Set the previous page based on the form type
    if (isset($formTypePages[$formType])) {
        $previousPage = $formTypePages[$formType];
    }

    // Store the previous page in the session
    $_SESSION['previous_page'] = $previousPage;

    // Redirect to the calculated previous page
    header("Location: " . $previousPage . ".php");
    // exit();
}



function colog($message) {
    echo "<script>console.log('$message');</script>";
}

?>