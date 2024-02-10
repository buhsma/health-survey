<?php
$pageTitle = "Survey evaluation";
$nextPage = 'results.php';
include './src/components/templates/head.php';
include './src/components/templates/header.php'; 
include './src/components/evaluation.php'  
?>

<main>
    <div class="resultNumberContainer form__questionField">
        <h1 class="resultText"><?php echo $resultText; ?></h1>
            <p class="resultNumberContainer__number">
                <?php echo "You've scored <strong style=\"color: green;\">$points</strong> out of a total of 33 points."; ?>
            </p>
    </div>
</main>

<?php
include './src/components/templates/footer.php';
?>