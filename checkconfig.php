<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345678";
$conn = new mysqli($servername, $username, $password);


$check=$_POST["check_database"];

//$mysql = mysqli_connect("localhost", "root", "12345678");

if (mysqli_select_db($conn, $check)) {
    //echo "Database exists";
    $_SESSION['msg'] = "Database Exist";
    header('location:install.php');
} else {
    //echo "Database does not exist";

     $_SESSION['msg'] = "";
    header('location:install.php');
   

}

?>









