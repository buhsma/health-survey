<?php
function displayError($key, $errorMessage) {
    colog('start error');
    $idNumber = preg_replace('/[^0-9]/', '', $key);

    $idName = 'warning' . $idNumber;

    echo "<div id='$idName'>$errorMessage</div>";
    colog($idNumber);
}
?>


