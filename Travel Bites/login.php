<?php
include("connect.php"); 

if(isset($_POST['login'])){
session_start();
if (isset($_POST['usname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['usname']);

    $pass = validate($_POST['password']);
    $ustype= validate($_POST['usertype']);
  

    if (empty($username)) {

        echo "User Name is required";

        exit();

    }else if(empty($pass)){

        echo "Password is required";

        exit();

    }else{

        $sql = "SELECT * FROM signup WHERE username='$username' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] == $username && $row['password'] == $pass && $row['usertype']==$ustype)  {
              
                if ($ustype=='delivery'){
                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: delpart.php");

                exit();}
             else if ($ustype=='restaurant'){
               echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: restaurantin.php");

                exit();}
            }else{

                header("Location: login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Travel Bites- Signup &amp; Login Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <style type="text/css"> 
  * {
    box-sizing: border-box;
}
 .logo{
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
body {
    background: #D0E7D2;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
}

h1 {
    font-weight: bold;
    margin: 0;
}
a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
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

form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 50px;
    height: 70%;
    text-align: center;
}

input {
    background-color: #D0E7D2;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}


.drop{
    width: 300px;
    max-width: 100%;
    min-height: 38px;
    position: relative;
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    background-color: #D0E7D2
}
  body{
    background-color:#D0E7D2;
  }
  </style>

        <title>Login</title>
        <meta name="description" content="">
        <!-- <link rel="stylesheet" href="signup.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="hstyle.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<h1 class="logo">Travel Bites</h1>
</head>
    <body>
                <form method="POST" action="login.php" name="login">
                    <h1>Welcome Back!</h1>
                    <br><br>
                    <input type="text" name="usname" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <select class="drop" name="usertype" id="usertype">
                        <option value="" disabled selected>Select User Type</option>
                        <option value="customer">Customer</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="delivery">Delivery Partner</option>
                        <option value="admin">Admin</option>
                    </select>
                    <br>
                    <button type="submit" name="login">Sign In</button>
                     <a href="signup2.php">New Here? SignUp Here</a>
                </form>
            </div>
        </div>
    </body>
</html>