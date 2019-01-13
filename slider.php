<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Slide shows for programmers</title>
<style>
* {box-sizing: border-box}
.slide-main {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.allSlides {
  display: none;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dotButtons {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dotButtons:hover {
  background-color: #717171;
}
.fadeEffect {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
</style>
</head>
<body>
<div class="slide-main">

  <!-- Full-width images with number and caption text -->
  <div class="allSlides fadeEffect">
    <div class="numbertext">Slide #1</div>
    <img src="img/img1.jpg" style="width:100%">
    <div class="text">I am PHP programmer</div>
  </div>

  <div class="allSlides fadeEffect">
    <div class="numbertext">Slide #2</div>
    <img src="img/img2.jpg" style="width:100%">
    <div class="text">I am JavaScript programmer</div>
  </div>

  <div class="allSlides fadeEffect">
    <div class="numbertext">Slide #3</div>
    <img src="img/img3.jpg" style="width:100%">
    <div class="text">I am JAVA programmer</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="incrementSlide(-1)">&#10094;</a>
  <a class="next" onclick="incrementSlide(1)">&#10095;</a>
</div>
<br>

<!-- The dotButtonss/circles -->
<div style="text-align:center">
  <span class="dotButtons" onclick="getCurrentSlide(1)"></span> 
  <span class="dotButtons" onclick="getCurrentSlide(2)"></span> 
  <span class="dotButtons" onclick="getCurrentSlide(3)"></span> 
</div>
</body>

<script>
var slideIndex = 1;
displaySlide(slideIndex);

// Next/previous controls
function incrementSlide(n) {
  slideIndex = slideIndex + n;
  displaySlide(slideIndex);
}

// Thumbnail image controls
function getCurrentSlide(n) {
  slideIndex = n;
  displaySlide(slideIndex);
}

function displaySlide(n) {
  var i;
  var slides = document.getElementsByClassName("allSlides");
  var dots = document.getElementsByClassName("dotButtons");
    if (n > slides.length) {
      slideIndex = 1;
    } 
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
}

var incr = 1;
let mylen=document.getElementsByClassName("allSlides").length;
window.setInterval(function() {
    if (incr > mylen) {
        incr = 1;
    }
    getCurrentSlide(incr);
    console.log ('incr:', incr);
    incr++;
}, 1000);
</script>
</html>