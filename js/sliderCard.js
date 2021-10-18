var cardSlideIndex = 1;
card_showSlides(cardSlideIndex);

// Next/previous controls
function card_plusSlides(n, slidClass) {
    card_showSlides(cardSlideIndex += n, slidClass);
}

function card_showSlides(n, slidClass) {
  var i;
  var slides = document.getElementsByClassName(slidClass);
  if (n > slides.length) {cardSlideIndex = 1}
  if (n < 1) {cardSlideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[cardSlideIndex-1].style.display = "block";
}