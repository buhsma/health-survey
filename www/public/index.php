<?php
$pageTitle = "Start Survey";
$nextPage = 'question-form1.php';
include './src/components/templates/head.php';
include './src/components/templates/header.php';
$_SESSION['previous_page'] = $_SERVER['PHP_SELF'];
$previousPage = 'none';   
?>

<main>
    <h1>Health Survey</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolore veritatis accusamus. Praesentium voluptate, reprehenderit enim eligendi totam blanditiis perspiciatis omnis natus veniam, repellendus amet, sit saepe odio architecto quasi.</p>
    <form class="form" method="POST" action="./question-form1.php"  id="form0" onsubmit="validateForm(0)" >
        <div class="form__questionField">
            <p class="form__questionField__text">How healthy are you physically?</p>
            <label class="form__questionField__label--q1" for="q1">0 / Not healthy - Very healthy</label>
            <input type="range" id="q1" name="q1" min="0" max="5" value="0" step="1" class="form__questionField__q1" oninput="updateSliderValue(this.value)">
            <!-- <input type="range" id="q1" name="rating" min="0" max="10" value="0" step="1" class="form__questionField__q1" oninput="updateSliderValue(this.value)"> -->
            <output class="slider" for="q1" id="sliderValue--q1">0</output>
            <p id="warning1" class="validation-warning"></p>    
        </div>
     
        <input type="hidden" name="formType" value="form0">
        
        <?php 
            include './src/components/submit-nav-btn.php'; 
        ?>

    </form>
    <script>
    function updateSliderValue(value) {
        document.getElementById('sliderValue--q1').innerHTML = value;
    }
    </script>
    
</main> 

<?php
include './src/components/templates/footer.php';
?>