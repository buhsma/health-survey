<?php

// include './src/components/displayError.php';
// include './src/components/redirect.php';


if(session_status() === PHP_SESSION_NONE) {
  // Starte die Session
  session_start();
}

$points = 0;
$results = $_SESSION['results'];
foreach ($_SESSION['results'] as $key => $value) {
    // Sanitize user input
    // $value = htmlspecialchars($value);

    if ($key !== 'formType' && $key !== 'hidden') {
    // Perform validation based on the key
    switch ($key) {
        case 'q1':
        case 'q3':
            if (intval($results[$key]) > 3) {
                $points += 3;}
            break;
        case 'q2':
            if ($results[$key] === 'yes') {
                $points += 3;}
            break;
        case 'q4':
            if (intval($results[$key]) < 6) {
                $points += 6;}
            break;
        case 'q5':
            if (intval($results[$key]) > 1 && intval($results[$key]) < 5) {
                $points += 3;}
            break;
        case 'q6':
        case 'q7':
            if (intval($results[$key]) > 1 && intval($results[$key]) < 4) {
                $points += 3;}
            break;
        case 'q8':
        case 'q9':
            if (intval($results[$key]) > 0 && intval($results[$key]) < 4) {
                $points += 3;}
            break;
        case 'q10':
            if (intval($results[$key]) < 3) {
                $points += 3;}
            break; 
        }
    }
}

if ($points > 30) {
    $resultText = "Congratulations! Your health is exceptional, it's almost too good to be true;)";
}
elseif ($points >25) {
    $resultText = "Great news! Your health is in very good condition. Continue with your positive habits to maintain this excellent state.";
}
elseif ($points >20) {
    $resultText = "Well done! Your health is good. Keep focusing on healthy choices and lifestyle to sustain and improve your well-being.";
}
elseif ($points >15) {
    $resultText = "Your health is in an average state. Consider making small positive changes to improve your overall well-being.";
}
else {
    $resultText = "It's important to use sensitive and respectful language when discussing health. Rather than using potentially offensive terms like fattys, consider a more neutral and supportive approach... Greetings from GPT.";
}