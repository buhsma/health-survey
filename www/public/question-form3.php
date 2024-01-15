<?php
$pageTitle = "Question Form 3";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="results.php" method="POST">
    <div class="form__questionField">
      <!-- <label for="q"></label> -->
      <!-- Number -->
      <p class="form__question__text">On a typical day, how many of your meals or snacks contain carbohydrates?</p>
      <input id="q6" type="number" min="0" max="9" require name="q6" />
    </div>
    <div class="form__questionField">
      <p class="form__question__text">On a typical day, how many of your meals or snacks contain protein?</p>
      <input id="q7" type="number" min="0" max="9" min="0" require name="q7" />
      </div>
    <div class="form__questionField">
      <p class="form__question__text">On a typical day, how many of your meals or snacks contain vegetables?</p>
      <input id="q8" type="number" min="0" max="9" min="0" require name="q8" />
    </div>
    <div class="form__questionField">
      <p class="form__question__text">On a typical day, how many of your meals or snacks contain fruit?</p>
      <input id="q9" type="number" min="0" max="9" min="0" require name="q9" />
    </div>
    <div class="form__questionField">
      <p class="form__question__text">On a typical day, how many of your meals are microwaved or prepared?</p>
      <input id="q10" type="number" min="0" max="9" min="0" require name="q10" />
    </div>
    <a href="question-form2.php">Prev</a><br><a href="results.php">Next</a>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>