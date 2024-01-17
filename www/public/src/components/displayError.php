<?php

function displayError($key, $errorMessage) {
    
    $classNumber = preg_replace('/[^0-9]/', '', $key);

    $className = 'warning' . $classNumber;

    echo "<div class='$className'>$errorMessage</div>";
}



