<?php 

$conn=mysqli_connect("localhost","root","");
session_start();
$p=$_SESSION["database"];
echo $p;
mysqli_select_db($conn,$p);
//echo $j;


$e=$_POST['email'];
echo $e;
$p=$_POST['password'];
$pass=md5($p);
echo $pass;



$que="SELECT * FROM user WHERE email='$e'";
$query=mysqli_query($conn,$que);
if ( false===$query ) {
 printf("error: %s\n", mysqli_error($conn));
}
else {
 echo 'done.';
}

//$row=mysqli_num_rows($query);



if (mysqli_num_rows($query)==1)
 {
	$obj=mysqli_fetch_array($query);
	$dum=var_dump($obj);
	echo $dum;

	
	//die();
	
    $pas=$obj['password'];
    echo $pas;

	if ($pas==$pass)
	 {
		$_SESSION['name']=$obj["name"];
		$_SESSION['id']=$obj["id"];
		$_SESSION['user_logged_in']=true;
		header('location:addpages.php');
		
	}
	else
	{
		$_SESSION['password_msg']="enter correct  password";
		header('location:login.php');
	}
}
else
{
	$_SESSION['email_msg']="enter correct username and password";
	header('location:login.php');
}



?>
