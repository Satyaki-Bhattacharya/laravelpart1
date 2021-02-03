<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 1px;
  text-align: center;
  background-color: #ffcccc;
  color: #4d0000;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4d0000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
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
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>I am Satyaki Bhattacharya.</p>
  <p>It is a very simple about us page. It mainly contains the information regarding the website what it does.</p>
</div>

<h2 style="text-align:center">My Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="1.png" alt="LARAVEL" style="width:120%">
      <div class="container">
        <h2>LARAVEL</h2>
        <p class="title">Laravel Framework</p>
        <p>The PHP Framework for Web Artisans
Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things..</p>
        <a href="https://laravel.com/"><p><button class="button">Go to Laravel Website</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="10.jpg" alt="W3Schools" style="width:100%">
      <div class="container">
        <h2>W3Schools</h2>
        <p class="title">Learning Website</p>
        <p>W3Schools is a training website for learning web technologies online. Content includes tutorials and references relating to HTML, CSS, JavaScript, JSON, PHP, Python, AngularJS, React.js, SQL, Bootstrap, Sass, Node.js, jQuery, XQuery, AJAX, XML, Raspberry Pi, C++, C# and Java..</p>
        <a href="https://www.w3schools.com/" ><p><button class="button">Go to W3School</button></p></a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="g.jpg" alt="John" style="width:72%">
      <div class="container">
        <h2>Google</h2>
        <p class="title">Technology Company</p>
        <p>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware.</p>
        <a href="https://www.google.com"><p><button class="button">Go to Google</button></p></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
