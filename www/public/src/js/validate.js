function setWarning(warningId, text) { // von Chris
  let warningElement = document.getElementById(warningId);
  warningElement.innerText = text;
}

function validateSlider(sliderId, warningId) { // von Chris, von mir ergänzt
  let slider = document.getElementById(sliderId);
  // Slider darf nicht 0 sein
  if (Number(slider.value) < 1){
    //
    setWarning(warningId, "Please adjust the slider to your liking.");
    // Stoppt den Sprung (action) auf die nächste Seite
    return false;
  }
  // Keine Warnung (mehr) ausgeben
  setWarning(warningId, "");
  return true;
}

function validateRadio() {
  let option1 = document.getElementById('q2y').checked;
  let option2 = document.getElementById('q2n').checked;
  if (!option1 && !option2) {
    setWarning('warning2', "Please choose yes or no.");
    return false;
  }
  setWarning('warning2', "");
  return true;
}

function validateNumber(numberId, warningId) {
  let numberInput = document.getElementById(numberId).value;
  if (!numberInput || numberInput < 0 || numberInput > 9) {
    setWarning(warningId, "Please input a number 0-9.");
    return false;
  }
  setWarning(warningId, "");
  return true;
}

function validateForm(formNumber) {
  event.preventDefault();
  switch (formNumber) {
    case 0: // Form0
      // Eingabe 1
      if (!validateSlider('q1', 'warning1')) {
        return false;
      } 
      else {
        // Form senden
        document.getElementById('form0').submit();
      }
      break;
          
    case 1: // Form1
      // Eingabe 2
      if (!validateRadio()) {
        return false;
      } 
      // Eingabe 3
      else if (!validateSlider('q3', 'warning3')) {
        return false;
      } 
      else {
        // Wenn beides eingegeben ist, Form senden
        document.getElementById('form1').submit();
      }
      break;

    case 2: // Form2
      // Eingabe 5
      if (!validateSlider('q5', 'warning5')) {
        return false;
      } 
      else {
        // Form senden
        document.getElementById('form2').submit();
      }
      break;

    case 3: // Form 3
      // Eingaben 6 bis 10
      if (!validateNumber('q6', 'warning6')) {
        return false;
      } 
      else if (!validateNumber('q7', 'warning7')) {
        return false;
      } 
      else if (!validateNumber('q8', 'warning8')) {
        return false;
      } 
      else if (!validateNumber('q9', 'warning9')) {
        return false;
      } 
      else if (!validateNumber('q10', 'warning10')) {
        return false;
      } 
      else {
        // Wenn alles ausgefüllt ist, absenden
        document.getElementById('form3').submit();
      }
      break;
  }
}
