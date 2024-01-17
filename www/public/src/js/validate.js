function setWarning(warningId, text) { // von Chris
  let warningElement = document.getElementById(warningId);
  warningElement.innerText = text;
}

function validateSlider(sliderId, warningId) { // von Chris, von mir ergänzt
  let slider = document.getElementById(sliderId);
  // Slider darf nicht 0 sein
  if (Number(slider.value) < 1){
    //
    setWarning(warningId, "Please move the slider!");
    // Stoppt den Sprung (action) auf die nächste Seite
    return false;
  }
  setWarning(warningId, "");
  return true;
}

function validateForm0() {
  event.preventDefault();
  // Eingabe 1
  if (!validateSlider('q1', 'warning1')) {
    return false;
  } 
  else {
    document.getElementById('form0').submit();
  }
}

function validateRadio() {
  let option1 = document.getElementById('q2y').checked;
  let option2 = document.getElementById('q2n').checked;
  // let answer1 = document.getElementById('q2').value;
  if (!option1 && !option2) {
    setWarning('warning2', "Please input!");
    return false;
  }
  setWarning('warning2', "");
  return true;
}

function validateForm1() {
  event.preventDefault();
  // Eingabe 2
  if (!validateRadio()) {
    return false;
  } 
  // Eingabe 3
  else if (!validateSlider('q3', 'warning3')) {
    return false;
  } 
  else {
    document.getElementById('form1').submit();
  }
}

function validateForm2() {
  event.preventDefault();
  // Eingabe 5
  if (!validateSlider('q5', 'warning5')) {
    return false;
  } 
  else {
    document.getElementById('form2').submit();
  }
}

function validateNumber(numberId, warningId) {
  let numberInput = document.getElementById(numberId).value;
  // console.log(numberInput.value);
  if (!numberInput) {
    setWarning(warningId, "Please input!");
    return false;
  }
  setWarning(warningId, "");
  return true;
}

function validateForm3() {
  event.preventDefault();
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
    document.getElementById('form3').submit();
  }
}