<?php
function redirect() {
    $previousPage = isset($_SESSION['previous_page']) ? $_SESSION['previous_page'] : 'index.php';
    print_r($previousPage);
    header("Location: $previousPage");
    // exit();
}



function colog($message) {
    echo "<script>console.log('$message');</script>";
}

?>