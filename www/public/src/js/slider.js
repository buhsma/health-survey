let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
    let selectedOption = document.querySelector(`#ratingList option[value="${rangeSlider.value}"]`);

    rangeBullet.innerHTML = selectedOption ? selectedOption.textContent : '';

    let bulletPosition = (rangeSlider.value / (rangeSlider.max - rangeSlider.min));
    rangeBullet.style.left = (bulletPosition * rangeSlider.offsetWidth) + "px";
}