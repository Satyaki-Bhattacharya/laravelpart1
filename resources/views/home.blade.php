<!DOCTYPE html>
<html>
<head>
<title>Laravel FrameWork</title>
<link rel="shortcut icon" href="https://www.bunnyshell.com/blog/wp-content/uploads/2020/09/featured-image.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box;}

.bg-image {
  /* Full height */
  height: 100%;
  width: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Images used */
.img1 { background-image: url("laravel8.jpg"); }
/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #c2c2a3;
}
.topnav a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #b3ecff;
  color: black;
}
.topnav a.active {
  background-color: #ff3333;
  color: white;
}
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="/" class="active">Home</a>
  <a href="/signup">SignUp</a>
  <a href="about">About Us</a>
  <a href="/login">Login Page</a>
  <a href="map">Google Map</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px">
<h1>Laravel is framework of PHP </h1>
  <h2>What is Laravel?</h2>
  <p>Laravel is free to use, open-source web framework based on PHP. It is developed by Taylor Otwell . It supports the MVC (Model-View-Controller) architectural pattern. Laravel provides an expressive and elegant syntax, which is useful for creating a wonderful web application easily and quickly. The first version of Laravel was released on 9th June 2011 </p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div class="bg-image img1"></div>
<!-- <div class="bg-image img2"></div> -->
<img src="01.jpg" alt="php vs laravel" style="width:1350px;height:600px;">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://www.facebook.com"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">Powered by <a href="https://www.laravel.com" target="_blank">Laravel.com</a>
  </p>
</footer>
</body>
</html>




