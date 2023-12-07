
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet'><link rel="stylesheet">

<style type="text/css">
h1 {
font-family: "Comic Sans MS", cursive, sans-serif;
font-size: 50px;
letter-spacing: 1px;
word-spacing: 0.8px;
color: #79AC78;
font-weight: 700;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: uppercase;

   -webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
       5px 3px 0 #000,
     8px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 3px 0 #000;
}
  ul {
  list-style-type: none;
  padding-left: 90px;
  overflow: hidden;
  background-color: #79AC78;
}

li {
  float: left;
}

li a {
  display: block;
  color: blue;
 font-size:20px;
  text-align: center;
  padding: 10px 170px;
  text-decoration: none;
}

li a:hover {
  background-color:#618264;
  color: white;
}
  body{
    background-color:#D0E7D2;
  }
h1
{
color:white;
}
.hoverable {
	color:white;
	font-family: "Comic Sans MS", cursive, sans-serif;
font-size: 15px;
letter-spacing: 1px;
word-spacing: 0.8px;
color: #D0E7D2;
font-weight: 700;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: uppercase;
}
.raise:hover,
.raise:focus {
  box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
}

// Animating from the bottom
.up:hover,
.up:focus {
  box-shadow: inset 0 -3.25em 0 0 var(--hover);
}
button {
font-family: "Comic Sans MS", cursive, sans-serif;
color: black;
font-weight: 700;
  background: none;
  border: 2px solid;
  line-height: 1;
  margin: 0.5em;
  padding: 5em 20em;
}
.container{
	text-align: center;
	
}
</style>

	<div class="container-fluid">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a id="len1" class="hoverable" href='restaurantin.php'><b>Home</b></a></li>
        <li><a id="len2" class="hoverable" href="about.html"><b>About</b></a></li>
        <li><a id="len4" class="hoverable" href="contact.html"><b>Contact</b></a></li>
      </ul>
    </div>
  </nav>
</div>
<h1 style="color:white;" align="center">Travel Bites</h1>
</head>


<body>
	
	
	
        <br><br>
	<div class="container">
	
			<button class="raise"onclick="document.location='restorder.php'"><span></span>VIEW ORDER </button>

			<button class="raise"onclick="document.location='restreview.php'"><span></span>VIEW REVIEWS</button>
	
			<button class="raise"onclick="document.location='profile1.php'"><span></span>PROFILE</button>

			<button class="raise" onclick="document.location='newdish.php'"><span></span>ADD NEW DISH</button>
	
	</div>
	<footer><br><br><br><br><br>Copyright © 2023-2024 Travel Bites.
		All Rights are reserved</footer>
</body>
</html>
