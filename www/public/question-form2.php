<?php
$pageTitle = "Question Form 2";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="./question-form3.php" method="POST" onsubmit="validateForm2()" id="form2">
    <div class="form__questionField">      <!-- Check Boxes -->
      <p class="form__question__text">What additional physical activity do you do most?</p>
      <!-- Optional mit Validierung -->
      <!-- <label for="q40">None</label>
      <input id="q40" type="checkbox" name="q4[0]" value="none" />
      <br> -->
      <div class="form__questionField__input">
        <input id="q41" type="checkbox" name="q4[1]" value="lifting-weights" />
        <label for="q41">Lifting weights</label>
      </div>
      <div class="form__questionField__input">
        <input id="q42" type="checkbox" name="q4[2]" value="walking" />
        <label for="q42">Walking</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q43" type="checkbox" name="q4[3]" value="jogging" />
        <label for="q43">Jogging</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q44" type="checkbox" name="q4[4]" value="running" />
        <label for="q44">Running</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q45" type="checkbox" name="q4[5]" value="swimming" />
        <label for="q45">Swimming</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q46" type="checkbox" name="q4[6]" value="dancing" />
        <label for="q46">Dancing</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q47" type="checkbox" name="q4[7]" value="aerobics" />
        <label for="q47">Aerobics</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q48" type="checkbox" name="q4[8]" value="pilates" />
        <label for="q48">Pilates</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q49" type="checkbox" name="q4[9]" value="team-sports" />
        <label for="q49">Team sports</label>
      </div> 
      <div class="form__questionField__input">
        <input id="q410" type="checkbox" name="q4[10]" value="other" />
        <label for="q410">Other</label>
        <p id="warning4" class="validation-warning"></p>
      </div>
    </div>
    <div class="form__questionField">      <!-- Slider -->
      <p class="form__question__text">Do you feel you do too little, just enough or way too much additional physical activity?</p>
      <label for="q5">0 / Far too little - just right - far too much</label>
      <input id="q5" type="range" min="0" max="5" value="0" name="q5" />
      <p id="warning5" class="validation-warning"></p>
    </div>
    <div class="form__questionField">
      <input type="hidden" id="h2" name="hidden" value="question-form2.php">
      <input type="submit" value="Next questions" />
    </div>
    <input type="hidden" name="formType" value="form2">
    <!-- Buttons von Ismael -->
    <?php 
      include './src/components/submit-nav-btn.php'; 
    ?>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>