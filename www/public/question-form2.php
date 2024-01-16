<?php
$pageTitle = "Question Form 2";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="question-form3.php" method="POST">
    <div class="form__questionField">      <!-- Check Boxes -->
      <p class="form__question__text">What additional physical activity do you do most?</p>
      <label for="q40">None</label>
      <input id="q40" type="checkbox" name="q41" value="none" />
      <br>
      <label for="q41">Lifting weights</label>
      <input id="q41" type="checkbox" name="q41" value="lifting-weights" />
      <br>
      <label for="q42">Walking</label>
      <input id="q42" type="checkbox" name="q42" value="walking" />
      <br>
      <label for="q43">Jogging</label>
      <input id="q43" type="checkbox" name="q43" value="jogging" />
      <br>
      <label for="q44">Running</label>
      <input id="q44" type="checkbox" name="q44" value="running" />
      <br>
      <label for="q45">Swimming</label>
      <input id="q45" type="checkbox" name="q45" value="swimming" />
      <br>
      <label for="q46">Dancing</label>
      <input id="q46" type="checkbox" name="q46" value="dancing" />
      <br>
      <label for="q47">Aerobics</label>
      <input id="q47" type="checkbox" name="q47" value="aerobics" />
      <br>
      <label for="q48">Pilates</label>
      <input id="q48" type="checkbox" name="q48" value="pilates" />
      <br>
      <label for="q49">Team sports</label>
      <input id="q49" type="checkbox" name="q49" value="team-sports" />
      <br>
      <label for="q410">Other</label>
      <input id="q410" type="checkbox" name="q410" value="other" />
      </div>
    <div class="form__questionField">      <!-- Slider -->
      <p class="form__question__text">Do you feel you do too little, just enough or way too much additional physical activity?</p>
      <label for="q5">Far too little / just right / far too much</label>
      <input id="q5" type="range" min="0" max="10" name="q5" />
    </div>
    <div class="form__questionField">
      <input type="submit" value="Next questions" />
    </div>
    <!-- Buttons von Ismael -->
    <!-- <div class="btnContainer">
      <button class="btn submitBtn" role="button">
        <span class="text">Submit</span>
      </button>
      <button class="btn back" role="button">
        <span class="text">Back</span>
      </button> -->
    </div>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>