<?php 

session_start();
$conn=mysqli_connect("localhost","root","12345678");
$p=$_SESSION["database"];
echo $p;
mysqli_select_db($conn,$p);

//print_r($_POST);

$a=$_POST['select'];
$b=$_POST['page'];
$c=$_POST['editor'];
$d=$_POST['sdate'];
$e=$_POST['edate'];
$que="INSERT INTO page_table(status,pagename,content,start_date,end_date)
VALUES('$a','$b','$c','$d','$e')";
$result=mysqli_query($conn,$que);
if ( false===$result ) {
printf("error: %s\n", mysqli_error($conn));
}
else {
 echo 'done.';
}


header('location:addpages.php');




?>