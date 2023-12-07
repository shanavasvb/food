<?php 

    

$showAlert = false;  

$showError = false;  

$exists=false; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'connect.php'; 
    $name = $_POST["name"];
    $restname = $_POST["restname"];
    $ingredients = $_POST["ing"];
    $veg=$_POST["veg"];
$sql = "Select * from  dish where name='$name'"; 

    

    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);
if($num == 0) {
            $sql = "INSERT INTO dish ( name,restname,ingredients,veg) VALUES ('$name','$restname','$ingredients','$veg' )"; 

            $result = mysqli_query($conn, $sql); 

            if ($result) { 

                $showAlert = true;  
        }
}  
if($num>0)  

   { 

      $exists="Dishname not available";  

   }  
}  

    
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
        <title>About</title>
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


  body{
    background-color:#D0E7D2;
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
  line-height: 0.2;
  margin: 0.3em;
  padding: 3em 10em;
}

* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


/* Add a blue text color to links */
a {
  color: #618264;
}


</style>
</head>
<body>
 <?php 

    

    if($showAlert) { 

    

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 

    

            <strong>Success!</strong> Your dish is now created. 

           
        </div> ';  

    } 
 if($showError) { 

    

        echo ' <div class="alert alert-danger  

            alert-dismissible fade show" role="alert">  

        <strong>Error!</strong> '. $showError.'

      
   

     </div> ';  

   } 
if($exists) { 

        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"> 

        <strong>Error!</strong> '. $exists.' 

       </div> ';  

     } 

   
?> 
           
<form action="newdish.php" method="post">
  <div class="container">
    <h1 style="text-align:center;">TRAVEL BITES</h1>
    <p>Please fill in this form to create a profile.</p>
    <hr>
    <label for="dishname"><b>Name of Dish</b></label>
    <input type="text" placeholder="Enter name of dish" name="name" id="name" required>

    <label for="name"><b>Name of restaurant</b></label>
    <input type="text" placeholder="Enter Name" name="restname" id="name" required>

    <label for="ingredients"><b>Ingredients</b></label>
    <input type="text" placeholder="Enter ingredients" name="ing" id="ing" required>

   
    <label for="NON VEG/VEG"><b>NON VEG/VEG</b></label>
    <select name="veg" id="veg">
    <option value="VEG">VEG</option> 
    <option value="NON VEG">NON VEG</option> 
    </select>
    

    <hr>
  <button type="submit" class="raise"><span></span>Register </button>
   
  </div>

  
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</form>
</body>
</html>