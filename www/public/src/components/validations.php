<?php


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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  foreach ($_POST as $key => $value) {

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
  global $errMessage;

  if (isset($_POST[$key]) && $_POST[$key] > 0) {
      $_SESSION[$key] = $_POST[$key];
  } else {
      $errMessage = [$key, "Please adjust the slider to your liking."];
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
    $errMessage = [$key, "Please check at least one box."];
  }
}

//q6, q7, q8, q9, q10
function dailyIntake($key) {
  if (isset($_POST[$key]) && is_numeric($_POST[$key]) && $_POST[$key] >= 0 && $_POST[$key] <10) {
    $_SESSION[$key] = $_POST[$key];
  }
  else {
    $errMessage = [$key, "Please input a number 0-9."];
  }
}




// if($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Lösche alle Session Daten
//     session_unset();
//     // Zerstöre die Session
//     session_destroy(); } 