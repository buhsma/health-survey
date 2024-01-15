<?php
$pageTitle = "Example Page";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
    <h1>Health Survey</h1>
    <form action="" class="form">
        <div class="form__questionField">
            <label for="q1"></label>
            <input type="text" id="q1">
        </div>
    </form>
</main>

<?php
include './src/components/templates/footer.php';
?>