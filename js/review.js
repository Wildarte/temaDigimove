var slideIndexReviews = 1;
showSlidesReviews(slideIndexReviews);

function plusSlidesReviews(n) {
  showSlidesReviews(slideIndexReviews += n);
}

function currentSlideReviews(n) {
  showSlidesReviews(slideIndexReviews = n);
}

function showSlidesReviews(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-reviews");
  var dots = document.getElementsByClassName("dot-reviews");
  if (n > slides.length) {slideIndexReviews = 1}
    if (n < 1) {slideIndexReviews = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-reviews", "");
    }
  slides[slideIndexReviews-1].style.display = "flex";
  dots[slideIndexReviews-1].className += " active-reviews";
}