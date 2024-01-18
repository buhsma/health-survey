<?php

include './src/components/displayError.php';
include './src/components/redirect.php';


if(session_status() === PHP_SESSION_NONE) {
  // Starte die Session
  session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// print_r($_POST);
// colog('$_POST');

// Get the form type from the hidden input
$formType = isset($_POST['formType']) ? $_POST['formType'] : '';

// Define the expected keys for each form type
$expectedKeys = [
    'form0' => ['q1'],
    'form1' => ['q2', 'q3'],
    'form2' => ['q4', 'q5'],
    'form3' => ['q6', 'q7', 'q8', 'q9', 'q10'],
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

// print_r($_POST);
// colog('$_POST');





  foreach ($_POST as $key => $value) {
      // Sanitize user input
      // $value = htmlspecialchars($value);

      if ($key !== 'formType' && $key !== 'hidden') {
      // Perform validation based on the key
      switch ($key) {
          case 'q1':
          case 'q3':
          case 'q5':
              sliderVali($key, $value);
              break;

          case 'q2':
              yesNo($key, $value);
              break;

          case 'q4':
              checkboxes($key, $value);
              break;

          default:
              dailyIntake($key, $value);
              break;
      }
  }
}
// print_r($_SESSION['results']);
}

//q1, q3, q5
function sliderVali($key, $value) {
  
    //sliderVali like this: if (isset($_POST[$key]) && intval($_POST[$key]))
    // breaks POST for no obvius reason
  if (intval($value) != 0) {
    $_SESSION['results'][$key] = $value;
      colog('q1 is fine');
  } else {
      colog('q1 not ok'); 
      redirect();
      displayError($key, "Please adjust the slider to your liking.");
      
  }
}


//q2
function yesNo($key, $value) {
  if ($value) {
    $_SESSION['results'][$key] = $value;
  }
}


//q4
function checkboxes($key, $value) {
  $counter = 0;
  if (!empty($_POST[$key])) {
  foreach($_POST[$key] as $chbox) { 
            $counter++;
          }
         }

  
         $_SESSION['results'][$key] = $counter;
        }
    
// function checkboxes($key, $value) {
//   if (isset($_POST[$key]) && !isset($_POST[$key][0])) {
//       $counter = 0;
//       foreach($_POST[$key] as $chbox) {
//         $counter++;
//       }
//       $_SESSION[$key] = $counter;
//   }

//   else if (isset($_POST[$key]) && isset($_POST[$key][0])) {
//     $_SESSION[$key] = 0;
//   }

//   else {
//     redirect();
//     displayError($key, "Please check at least one box.");
//   }
// }

//q6, q7, q8, q9, q10
function dailyIntake($key, $value) {
  if (is_numeric($value) && $value >= 0 && $value <10) {
    $_SESSION['results'][$key] = $value;
  }
  else {
    redirect();
    displayError($key, "Please input a number 0-9.");
  }
}






?>