<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>login form</title>
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
        <h1>login Form</h1>
        <form name="form" action="loginform.php" method="POST"> 
        
         <label >   Email:</label>
         <input type="email" id="emaill" name="emaill" required> <br><br>
         <label > Password:</label>
         <input type="password" id="password" name="password" required> <br><br>
         <input type="submit" name="submit2" id="btn" value="LOGIN">
        </form>
    </div>
</body>
</html>