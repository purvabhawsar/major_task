<?php
 session_start();
 $conn=mysqli_connect("localhost","root","12345678");
 $p=$_SESSION["database"];
echo $p;
 mysqli_select_db($conn,$p);

$x=$_POST["eid"];
echo $x;

$a=$_POST['select'];
$b=$_POST['page'];
$c=$_POST['editor'];
$d=$_POST['sdate'];
$e=$_POST['edate'];
$que="UPDATE page_table SET status='$a',pagename='$b',content='$c',start_date='$d',end_date='$e' WHERE id='$x'";
echo $que;
$result=mysqli_query($conn,$que);

if ( false===$result ) {
 printf("error: %s\n", mysqli_error($conn));
}
else {
 echo 'done.';
}
header('location:showlist.php');



?>
