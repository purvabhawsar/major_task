<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$a=$_POST["database"];
echo $_SESSION["database"]=$a;


// $check=$_POST["check_database"];

$conn = mysqli_connect("localhost", "root", "");

if (mysqli_select_db($conn, $a)) {
    //echo "Database exists";
    $_SESSION['msg1'] = "Database Exist";
    header('location:index.php');
} else {
   
$sql = "CREATE DATABASE $a";
 //session_register($sql);
    



if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
  $_SESSION['msg2']="Database created successfully";

 


   header('location:createuser.php');
} else {
  //echo "Error creating database: " . $conn->error;
  // $_SESSION['msg']="Error creating database: " . $conn->error;
  $_SESSION['msg3']="Please Insert Database Name Correctly";
   header('location:index.php');
}


}






$dbname = $a; //database name
echo $dbname;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    


$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(255) NOT NULL


)";






// INSERT INTO 'student' ('id', 'name', 'gender') VALUES
// (1, 'Cassidy Jackson', 'female'),
// (2, 'jack Hilson', 'male');

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
    //header('location:createuser.php');

    


} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);





$dbname2 = $a; //database name
echo $dbname;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname2);
// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    




$sql2 = "CREATE TABLE page_table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
status VARCHAR(30) NOT NULL,
pagename VARCHAR(50),
content TEXT(255) NOT NULL,
start_date DATE,
end_date DATE


)";
// INSERT INTO 'student' ('id', 'name', 'gender') VALUES
// (1, 'Cassidy Jackson', 'female'),
// (2, 'jack Hilson', 'male');

if (mysqli_query($conn, $sql2)) {
    echo "Table school created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}






mysqli_close($conn);




?>