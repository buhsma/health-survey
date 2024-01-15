<?php
$pageTitle = "Question Form 2";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="question-form2.php" method="POST">
    <div class="form__questionField">
      <p class="form__question__text">What additional physical activity do you do most?</p>
      <!-- Check Boxes -->
      <input id="q41" type="checkbox" name="q41" value="" />
      <label for="q41">Lifting weights</label><br>
      <input id="q42" type="checkbox" name="q42" value="no" />
      <label for="q42">Walking</label><br>
      <input id="q43" type="checkbox" name="q43" value="yes" />
      <label for="q43">Jogging</label><br>
      <input id="q44" type="checkbox" name="q44" value="yes" />
      <label for="q44">Running</label><br>
      <input id="q45" type="checkbox" name="q45" value="yes" />
      <label for="q45">Swimming</label><br>
      <input id="q46" type="checkbox" name="q46" value="yes" />
      <label for="q46">Dancing</label><br>
      <input id="q47" type="checkbox" name="q47" value="yes" />
      <label for="q47">Aerobics</label><br>
      <input id="q48" type="checkbox" name="q48" value="yes" />
      <label for="q48">Pilates</label><br>
      <input id="q49" type="checkbox" name="q49" value="yes" />
      <label for="q49">Team sports</label><br>
      <input id="q410" type="checkbox" name="q410" value="yes" />
      <label for="q410">Other</label><br>
      </div>
<hr>
    <div class="form__questionField">
      <p class="form__question__text">Do you feel you do too little, just enough or way too much additional physical activity?</p>
      <label for="q5">Far too little / just right / far too much</label>
      <!-- Slider -->
      <input id="q5" type="range" min=0 max=10 name="q5" />
    </div>
    <a href="question-form1.php">Prev </a><a href="question-form3.php"> Next</a>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>