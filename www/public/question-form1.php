<?php
$pageTitle = "Question Form 1";
$nextPage = 'question-form2.php';
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="./question-form2.php" method="POST" id="form1" onsubmit="validateForm(1)" >
    <div class="form__questionField">      <!-- Check Radio -->
      <p class="form__question__text">Do you take nutritional supplements?</p>
      <div class="form__questionField__input">
        <input id="q2y" type="radio" value="yes" name="q2">
        <label for="q2y">Yes</label>
      </div>
      <div class="form__questionField__input">
        <input id="q2n" type="radio" value="no" name="q2">
        <label for="q2n">No</label>
      </div>
      <!-- Warn-Hinweis -->
      <p id="warning2" class="validation-warning"></p>
    </div>
    <div class="form__questionField">      <!-- Slider -->
      <p class="form__question__text">How important is physical activity to you?</p>
      <label for="q3">0 / Not at all - Very much</label>
      <input id="q3" type="range" min="0" max="5" step="1" value="0" name="q3" />
      <!-- Warn-Hinweis -->
      <p id="warning3" class="validation-warning"></p>
    </div>
    
    <input type="hidden" name="formType" value="form1">

    <?php 
      include './src/components/submit-nav-btn.php'; 
    ?>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>