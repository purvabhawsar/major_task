<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
$p=$_SESSION["database"];
echo $p;
mysqli_select_db($conn,$p);
//echo $b;

//die("check");


// mysqli_select_db($con,$p);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name=$_POST['fname'];
$email=$_POST['email'];
$p=$_POST['pwd'];
$pass=md5($p);
$que="INSERT INTO user(firstname,email,password)VALUES('$name','$email','$pass')";
echo $que;
$result=mysqli_query($conn,$que);
if ( false===$result ) {
 printf("error: %s\n", mysqli_error($conn));
}
else {
 echo 'done.';
}

header("location:login.php");


?>