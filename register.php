<?php

if($_POST)
{
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$phone=$_POST['phone'];
include_once 'connection.php';
global $conn;
$sql="INSERT INTO login (first_name, last_name, email, password, phone) VALUES ( '".$fname."' ,'".$lname."' ,'".$email."','".$password."','".$phone."')";

if($conn->query($sql)===TRUE)
{
    echo '<script>
    window.location.href="galaxy.html";


    alert("Data created successfully.")
    </script>';
}
else
{
    echo "Error:". $sql."<br>" .$conn->error;
}
}
}
?>