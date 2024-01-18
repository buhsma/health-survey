<?php

include './src/components/displayError.php';
include './src/components/redirect.php';
// if($_SERVER['REQUEST_METHOD'] === 'POST') {
//   if (($_POST["q1"]) < 0)
//     {
//       $q1 = $_POST['q1'];
//       resultsArrFunk($q1);
//     } 
//     else 
//     {
//       $errMessage = "Gimme input";
//     }
// } $_SESSION['q5'] = $_POST['q5']
print_r($_POST);
// echo "Hallo " . $_POST['q1'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  foreach ($_POST as $key => $value) {
    colog($key);
  switch ($key) {
    case 'q1':
    case 'q3':
    case 'q5':
      sliderVali($key);
      break;
    
    case 'q2':
      yesNo($key);
      break;

    case 'q4':
      checkboxes($key);
      break;
    
    default:
      dailyIntake($key);
      break;
    }

}
}

//q1, q3, q5
function sliderVali($key) {
  if (isset($_POST[$key]) && $_POST[$key] != 0) {
    colog('isset');}
    else {
    colog('isnotset');
    }
    //sliderVali like this: if (isset($_POST[$key]) && intval($_POST[$key]))
    // breaks POST for no obvius reason
  if (isset($_POST[$key])) {
      $_SESSION[$key] = $_POST[$key];
      colog('q1 is fine');
  } else {
      redirect();
      displayError($key, "Please adjust the slider to your liking.");
      colog('q1 not ok'); 
  }
}


//q2
function yesNo($key) {
  if (isset($_POST["q2"])) {
    $_SESSION[$key] = $_POST[$key]; 
  }
}


//q4
function checkboxes($key) {
  if (isset($_POST[$key]) && !isset($_POST[$key][0])) {
      $checkedArray = array_map('isset', $_POST[$key]);
      $q4Sum = array_sum($checkedArray);
      $_SESSION[$key] = $q4Sum;
  }

  else if (isset($_POST[$key]) && isset($_POST[$key][0])) {
    $_SESSION[$key] = 0;
  }

  else {
    redirect();
    displayError($key, "Please check at least one box.");
  }
}

//q6, q7, q8, q9, q10
function dailyIntake($key) {
  if (isset($_POST[$key]) && is_numeric($_POST[$key]) && $_POST[$key] >= 0 && $_POST[$key] <10) {
    $_SESSION[$key] = $_POST[$key];
  }
  else {
    redirect();
    displayError($key, "Please input a number 0-9.");
  }
}




// if($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Lösche alle Session Daten
//     session_unset();
//     // Zerstöre die Session
//     session_destroy(); } 