<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>registration form</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="projectstyles.css" />
</head>
<body>
    <div class="container">
    <ul>
      <li> 
        <a href="#"> Menu </a>
      <ul class="dropdown"> 
        <li> <a href="#"> Gift Cards</a></li>
        <li> <a id="page" href="ps5games.html"> PS5-Games</a></li>
        <li> <a href="#">PS4</a></li>
      </ul>
    </li>
      <li> <a href="galaxy.html"> Home </a></li>
      <li> <a id="page" href="About.html"> About  </a></li>
    </ul>

  <div class="logo"> 
     <img src="images/logomodified.png" width="120px" height="95px">
  </div> 
    <div class="boxNav">
    <form class="searchbar">
      <input type="text" placeholder="Search...">
      
    </form>
  </div>
    <a class="login" href="index.php">
      <b><u><p id="page">Login/Signup</p></u></b>
      <img src="images/loginmodified.png" width="30px" height="30px"> 
    </a>
    
    <span class="cart-container">
      <span class="cart-text">Cart</span>
      <img src="images/cartmodified.png" width="35px" height="35px" id="cart">
    </span>
  </div>
<br>
    <div id="form">
        <h1>Registration Form</h1>
        <form name="form" action="register.php" method="POST"> 
            <label > First Name:</label>
         <input type="text" id="fname" name="fname" required> <br> <br>
         <label >Last Name:</label>
         <input type="text" id="lname" name="lname" required> <br><br>
         <label >   Email:</label>
         <input type="email" id="email" name="email" required> <br><br>
         <label > Password:</label>
         <input type="password" id="pass" name="pass" required> <br><br>
         <label> Phone:</label>
         <input type="number" id="phone" name="phone" required> <br><br>
         <input type="submit" name="submit" id="btn" value="REGISTER">
         <p> <a href="index2.php">Already registered? </a></p>
        </form>
    </div>
</body>
</html>