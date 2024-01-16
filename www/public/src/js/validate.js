function validateSlider(sliderId) { // von Chris
  let slider = document.getElementById(sliderId);
// Slider darf nicht 0 sein
if (Number(slider.value) < 1){
  //
  setWarning("Bitte verändere die Position des Sliders");
  // Stoppt den Sprung (action) auf die nächste Seite
  return false;
}
  return true;
}

function validateForm1() {
  event.preventDefault();
  // Eingabe 1
  // in funktion packen
  let option1 = document.getElementById('q2y').checked;
  let option2 = document.getElementById('q2n').checked;
  // let answer1 = document.getElementById('q2').value;
  console.log(option1);
  if (!option1 && !option2) {
    setWarning("Please input!");
  }
  else {
    document.getElementById("form1").submit();
  }
}

function setWarning(text){
  let warningElement = document.getElementById('warning1');
  warningElement.innerText = text;
}