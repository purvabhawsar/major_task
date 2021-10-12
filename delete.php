<?php
session_start();
 $conn=mysqli_connect("localhost","root","12345678");
 $p=$_SESSION["database"];
echo $p;
 mysqli_select_db($conn,$p);
 $x=$_GET["did"];
 $que="DELETE FROM page_table WHERE id='$x'";
 $result=mysqli_query($conn,$que);
 if ( false===$result ) {
 printf("error: %s\n", mysqli_error($conn));
}
else {
 echo 'done.';
}
header('location:showlist.php');

 ?>
