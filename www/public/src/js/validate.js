function setWarning(id, text) { // von Chris
  let warningElement = document.getElementById(id);
  warningElement.innerText = text;
}

function validateSlider(sliderId) { // von Chris, von mir ergänzt
  let slider = document.getElementById(sliderId);
  // Slider darf nicht 0 sein
  if (Number(slider.value) < 1){
    //
    setWarning(sliderId, "Bitte verändere die Position des Sliders");
    // Stoppt den Sprung (action) auf die nächste Seite
    return false;
  }
  return true;
}

function validateRadio() {
  let option1 = document.getElementById('q2y').checked;
  let option2 = document.getElementById('q2n').checked;
  // let answer1 = document.getElementById('q2').value;
  if (!option1 && !option2) {
    setWarning('warning1', "Please input!");
    return false;
  }
  return true;
}

function validateForm1() {
  event.preventDefault();
  // Eingabe 1
  if (validateRadio()) {
    setWarning('warning1', "Please input!");
  } else {
    document.getElementById('form1').submit();
  }
}
