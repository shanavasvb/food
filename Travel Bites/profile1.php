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

.up:hover,
.up:focus {
  box-shadow: inset 0 -3.25em 0 0 var(--hover);
}
h2{
  font-family: Comic Sans MS;
  color:#618264;
  -webkit-text-stroke:0.5px #618264;
}
.form{
  display: inline-block;
  font-family: Comic Sans MS;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0px 50px;
  height: 70%;
  text-align: center;
}
input {
    background-color:white;
    border: none;
    padding: 10px 12px;
    margin: 8px 0;
    width: 30%;
}
button {
    border-radius: 20px;
    border: 1px solid #618264 ;
    background-color: #618264 ;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background-color: transparent;
    border-color: #618264;
}
</style>
<div class="container-fluid">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a id="len1" class="hoverable" href="home.html"><b>Home</b></a></li>
        <li><a id="len2" class="hoverable" href="about.html"><b>About</b></a></li>
        <li><a id="len4" class="hoverable" href="contact.html"><b>Contact</b></a></li>
      </ul>
    </div>
  </nav>
</div>
<h1 style="color:white;" align="center">Travel Bites</h1>
</head>
<body>
  <form name="profile" method="post" class="form">
    <h2>OWNER DETAILS</h2>
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="con">Contact Number</label>
    <input type="text" name="con">
    <h2>RESTAURANT DETAILS</h2>
    <label for="resname">Name of restaurant</label>
    <input type="text" name="resname">
    <label for="address">Address of restaurant</label>
    <input type="text" name="address">
    <label for="con2">Restuarant contact number</label>
    <input type="text" name="con2">
    <button name="Submit">Submit</button>

  </form>

</body>