var slideIndex = 1;
lancamento_showSlides(slideIndex);

// Next/previous controls
function lancamento_plusSlides(n) {
  lancamento_showSlides(slideIndex += n);
}

function lancamento_showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("lancamento-mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}