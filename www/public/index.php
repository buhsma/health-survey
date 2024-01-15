<?php
$pageTitle = "Start Survey";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
    <h1>Health Survey</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolore veritatis accusamus. Praesentium voluptate, reprehenderit enim eligendi totam blanditiis perspiciatis omnis natus veniam, repellendus amet, sit saepe odio architecto quasi.</p>
    <form action="" class="form">
        <div class="form__questionField">
            <p class="form__questionField__text">How healthy are you physically?</p>
            <label class="form__questionField__label--q1" for="q1">
                <input type="range" id="q1" name="rating" min="0" max="5" value="0" step="1" class="form__questionField__q1" oninput="updateSliderValue(this.value)">
                <output class="slider" for="q1" id="sliderValue--q1">0</output>
            </label>
        </div>
        <div class="btnContainer">
            <button class="btn submitBtn" role="button">
                <span class="text">Submit</span>
            </button>
            <button class="btn back" role="button">
                <span class="text">Back</span>
            </button>
        </div>
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