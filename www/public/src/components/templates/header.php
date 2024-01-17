<body>

<header>
        <div class="header__leftBox"></div>
        <div class="btnContainer">
            <button class="btn back" role="button">
                <span class="text">Fit&Well</span>
            </button>
            <button class="btn back" role="button">
                <span class="text">Reset Survey</span>
            </button>
        </div>
        <div class="header__rightBox"></div>
</header>

<div class="grid">
<div class="grid__leftBox"></div>

<?php
include './src/components/validations.php';

// Wenn die Session noch nicht gestartet wurde, starte sie.
if(session_status() === PHP_SESSION_NONE) {
    // Starte die Session
    session_start();
}
?>  