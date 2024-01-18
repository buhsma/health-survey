<?php
$pageTitle = "Survey evaluation";
$nextPage = 'results.php';
include './src/components/templates/head.php';
include './src/components/templates/header.php';   
?>

<main>
<h1 class="resultText">$resultText</h1>
<div class="resultNumberContainer form__questionField">
    <p class="resultNumberContainer__number">result nr</p>
</div>
</main>

<?php
include './src/components/templates/footer.php';

?>