<html>
<head>
<title>Home</title>
<link rel="stylesheet" style type = "text/css" href="css/design.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/buttonsign.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>
<center>
<div id = "wrapper">

<?php
	include ("includes/headeralluser.php");
?>

<div id = "content">
<h2 style= "color: red; text-align: center; font-size: 50;">OUR GOAL</h2>
<p style = "color: yellow;text-align: center;"> OUR GOAL IS TO HELP EVERY POOR SOULS OUT THERE THOSE WHO DON'T HAVE THE PROPER VOICE TO ASK FOR HELP...</p>

	
	<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img/_pic/slide_1.jpg" style="width:100%">
  <img class="mySlides" src="img/_pic/slide_2.jpg" style="width:100%">
  <img class="mySlides" src="img/_pic/slide_3.jpg" style="width:100%">
  <img class="mySlides" src="img/_pic/slide_4.jpg" style="width:100%">
  <img class="mySlides" src="img/_pic/slide_5.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	

<div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
    <source src="video.mp4" type="video/mp4">
    <source src="mov_bbb.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 

	
</div>

<?php
	include ("includes/footer.php");
?>
</div>
</center>

 
	
	
</body>
</html>