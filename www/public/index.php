<?php
$pageTitle = "Start Survey";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
    <h1>Health Survey</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolore veritatis accusamus. Praesentium voluptate, reprehenderit enim eligendi totam blanditiis perspiciatis omnis natus veniam, repellendus amet, sit saepe odio architecto quasi.</p>
    <form action="" class="form" method="POST">
        <div class="form__questionField">
            <p class="form__questionField__text">How healthy are you physically?</p>
            <!-- <label class="form__questionField__label--q1" for="q1">
                <input type="range" id="q1" name="rating" min="0" max="5" value="0" step="1" class="form__questionField__q1" oninput="updateSliderValue(this.value)">
                <output class="slider" for="q1" id="sliderValue--q1">0</output>
            </label> -->
        </div>
        <div class="container">
  
            <div class="range-slider">
                <span id="rs-bullet" class="rs-label">Need inpt</span>
                <input id="rs-range-line" class="rs-range" list="ratingList" type="range" value="0" min="0" max="5">
                <datalist id="ratingList">
                        <option value="1">Not Healthy</option>
                        <option value="2">Slightly Healthy</option>
                        <option value="3">Moderately Healthy</option>
                        <option value="4">Very Healthy</option>
                        <option value="5">Extremely Healthy</option>
                </datalist>
        </div>
  
  <div class="box-minmax">
    <span>badbad</span><span>supadupa</span>
  </div>
  
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
    <!-- <script>
    function updateSliderValue(value) {
        document.getElementById('sliderValue--q1').innerHTML = value;
    }
    </script> -->
    
</main> 

<?php
include './src/components/templates/footer.php';
?>