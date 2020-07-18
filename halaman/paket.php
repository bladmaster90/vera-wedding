<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center><h2> Daftar Paket Vera Wedding </h2></center>
<div class="slideshow-container2">

<div class="mySlides2 fade">
  <div class="numbertext2">1 / 10</div>
  <img src="foto/menu/menu 1.PNG" style="width:100%" width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">2 / 10</div>
  <img src="foto/menu/menu 2.PNG" style="width:100%"  width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">3 / 10</div>
  <img src="foto/menu/menu 3.PNG" style="width:100%"  width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">4 / 10</div>
  <img src="foto/menu/menu 4.PNG" style="width:100%" width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">5 / 10</div>
  <img src="foto/menu/menu 5.PNG" style="width:100%"  width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">6 / 10</div>
  <img src="foto/menu/menu 6.PNG" style="width:100%"  width="360" height="450">
</div>
    
<div class="mySlides2 fade">
  <div class="numbertext2">7 / 10</div>
  <img src="foto/menu/menu 7.PNG" style="width:100%" width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">8 / 10</div>
  <img src="foto/menu/menu 8.PNG" style="width:100%"  width="360" height="450">
</div>

<div class="mySlides2 fade">
  <div class="numbertext2">9 / 10</div>
  <img src="foto/menu/menu 9.PNG" style="width:100%"  width="360" height="450">
</div>
    
<div class="mySlides2 fade">
  <div class="numbertext2">10 / 10</div>
  <img src="foto/menu/menu 10.PNG" style="width:100%"  width="360" height="450">
</div>
    
<a class="prev2" onclick="plusSlides(-1)">&#10094;</a>
<a class="next2" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<div style="text-align:center">
  <span class="dot2" onclick="currentSlide(1)"></span> 
  <span class="dot2" onclick="currentSlide(2)"></span> 
  <span class="dot2" onclick="currentSlide(3)"></span> 
  <span class="dot2" onclick="currentSlide(4)"></span> 
  <span class="dot2" onclick="currentSlide(5)"></span> 
  <span class="dot2" onclick="currentSlide(6)"></span> 
  <span class="dot2" onclick="currentSlide(7)"></span> 
  <span class="dot2" onclick="currentSlide(8)"></span> 
  <span class="dot2" onclick="currentSlide(9)"></span> 
  <span class="dot2" onclick="currentSlide(10)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot2");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active2", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += "active2";
}
</script>

</body>
</html> 
