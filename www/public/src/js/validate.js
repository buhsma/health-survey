function validateSlider(sliderId){
  let slider = document.getElementById(sliderId);
}
// Slider darf nicht 0 sein
if (slider.value === 0){
  //
  setWarning("Bitte verändere die Position des Sliders");
  // Stoppt submit
  return false;
} else {
  return true;
}

function setWarning(text){
  let warningElement = document.getElementById('validaion-warning');
  warningElement.innerText = text;
}