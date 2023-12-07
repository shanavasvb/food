
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    
<style>
/* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

body {
    background-color:#D0E7D2;
    font-family: Arial;
    overflow: hidden;
}

/* NavbarTop */
.navbar-top {
    background-color: #618264;
    color: #79AC78;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}
h1 {
font-family: "Comic Sans MS", cursive, sans-serif;
font-size: 40px;
letter-spacing: 1px;
word-spacing: 0.8px;
color: #79AC78;
font-weight: 700;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: uppercase;

   -webkit-text-stroke: 0.5px black;
   color: white;
   text-shadow:
       4px 2px 0 #000,
     7px -2px 0 #000,  
      -1px -1px 0 #000,
      -2px -1px 0 #000,
       -1px 1px 0 #000;
}


.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
}

.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}

.navbar-top ul li {
    float: left;
}


.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}

/* End */

/* Sidenav */
.sidenav {
    background-color: #B0D9B1;
    color: #79AC78
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
}

.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    text-align: center;
}


.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
}

.url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #B0D9B1;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}

/* End */

/* Main */
.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #618264;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

/* End */
</style>
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1 style="text-align:center;">TRAVEL BITES</h1>
        </div>


    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            

            <div class="name">
                PROFILE
            </div>
            
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="delpart.php" class="active">HOME</a>
                <hr align="center">
            </div>
        </div>
          <div class="sidenav-url">
            <div class="url">
                <a href="profileform.php" class="active">EDIT PROFILE</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>

                <table>
                    <tbody>
                        <tr>
                            <td>Name :</td>
                            <td></td>
                        </tr>
                         <tr>
                            <td>Username :</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Phone No :</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>License no :</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                      
                    </tbody>
                </table>
            
            </div>
        </div>

       
</body>
</html>
