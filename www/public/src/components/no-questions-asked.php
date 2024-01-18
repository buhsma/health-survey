<?php

include './src/components/displayError.php';
include './src/components/redirect.php';



if(session_status() === PHP_SESSION_NONE) {
    // Starte die Session
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $_SESSION[$key] = $value;   
    }
    echo "POST Data:<br>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "SESSION Data:<br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
}