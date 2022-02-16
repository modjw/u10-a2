var slideIndex = 0;
autoSlides();

/* Controls to open and close the hamburger menu */
function mobileNav() {
  if (document.getElementById("overNav").style.height == "70%") {
    document.getElementById("overNav").style.height = "0";
  } else {
    document.getElementById("overNav").style.height = "70%";
  }
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("overNav").style.height = "0";
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function autoSlides() {
  var i;
  var slides = document.getElementsByClassName("carousel-photo");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(autoSlides, 7000); // Change image every 6.5 seconds
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("carousel-photo");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}