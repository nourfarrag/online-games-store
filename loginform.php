<?php
session_start(); 

if ($_POST) {
    if (isset($_POST['submit2'])) {
        // eli lsa md5lo fl login
        $email = $_POST['emaill'];
        $password = $_POST['password'];
        include_once 'connection.php';
        global $conn;
        //eli fl database wla la lma 3mlt registeration eli ana md5lo wl mwgood fl database matching wla la
        $sql = "select * from login where email='$email' and password='$password'";
        /////
        ///hena byakhod 2 parameters, el conn bta3 el link ely nta htkhos beh el databse w el sql command ely ana katbtaha 
        $result = mysqli_query($conn, $sql);
       /////
       ///////////// howa byakhod el database kolaha by3mlha fetch row row bykarn 
        $row = mysqli_fetch_array($result);
        if ($result->num_rows > 0) {
            
            $_SESSION['user_id'] = $row['user_id']; 
            $_SESSION['email'] = $email;

            echo '<script>
                window.location.href="galaxy.html";
                alert("Login successful.");
                </script>';
        } else {
            echo '<script>
                window.location.href="index2.php";
                alert("Invalid email or password.");
                </script>';
        }
    }
}
?>
