<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";


// $check=$_POST["check_database"];

$conn = mysqli_connect("localhost", "root", "");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="config.php" method="post">
	<h2>Create New Database</h2>
	<input type="text" name="database">
	<br>
	<span id="msg1" class="text-danger">
				<?php
				if (isset($_SESSION["msg1"])) 
				{
					echo $_SESSION["msg1"];
					unset($_SESSION["msg1"]);
				}


				?></span>

				<span id="msg2" class="text-success">
				<?php
				if (isset($_SESSION["msg2"])) 
				{
					echo $_SESSION["msg2"];
					unset($_SESSION["msg2"]);
				}


				?></span>

				<span id="msg3" class="text-danger">
				<?php
				if (isset($_SESSION["msg3"])) 
				{
					echo $_SESSION["msg3"];
					unset($_SESSION["msg3"]);
				}


				?>
			</span>
			<br>
     
	<input type="submit" name="">
    </form>

</body>
</html>