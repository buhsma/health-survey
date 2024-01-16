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
// } 

if (!isset($_SESSION['results'])) {
  $_SESSION['results'] = [];
}

//q1
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST["q1"]) && $_POST["q1"] > 0) {
      $q1 = $_POST['q1'];
      resultsArrFunk('q1');
  }
  else {
    $errMessage = "q1 nothappy";
  }
}

//q2
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST["q2"])) {
    resultsArrFunk('q2');
  }
}

//q3
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST["q3"]) && $_POST["q3"] > 0) {
      $q1 = $_POST['q3'];
      resultsArrFunk('q3');
  }
  else {
    $errMessage = "q3 nothappy";
  }
}




function resultsArrFunk($key) {
  global $$key;

  if (isset($$key)) {
      $_SESSION['results'][$key] = $$key;
  }
}





if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lösche alle Session Daten
    session_unset();
    // Zerstöre die Session
    session_destroy(); } 