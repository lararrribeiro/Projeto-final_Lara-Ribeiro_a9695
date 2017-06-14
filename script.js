var slideIndex = 1;
var interval;
showSlides(slideIndex);

function plusSlides(n) {
    console.log(n)
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    console.log(slideIndex)
    clearInterval(interval);
  var i;
  var slides = document.getElementsByClassName("mySlides");
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
    
    if (!n) {
       slideIndex++; 
    }
    
    interval = setTimeout(showSlides, 2000);
    
    if (slideIndex> slides.length) {slideIndex = 1}   
    
}


