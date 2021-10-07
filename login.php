<?php 
$conn=mysqli_connect("localhost","root","");
session_start();
$p=$_SESSION["database"];
echo $p;
mysqli_select_db($conn,$p);



?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
		<form method="post" action="log.php">


<div class="container p-5 my-5" id="content">
		<h5 class="text-center text-success">LOGIN</h5>
			

			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" id="email">
				<span id="email_msg" class="text-danger">
				<?php
				if (isset($_SESSION["email_msg"])) 
				{
					echo $_SESSION["email_msg"];
					unset($_SESSION["email_msg"]);
				}


				?>
			</span>
				
			</div>

			
				<div class="form-group">
				<label>PASSWORD</label>
				<input type="password" class=" form-control"name="password" id="pass">
				<p id="password_msg" class="text-danger">

				<?php 
                     if (isset($_SESSION["password_msg"]))
                      {
                     	echo $_SESSION["password_msg"];
                     	unset($_SESSION["password_msg"]);
                     }
				?>
				</p>
			</div>
			
			<div class="form-group">
				<input type="submit" name="submit" id="submit" class=" btn btn-info" role="button" value="submit"  >
			</div>
	</div>
	
</form>
</body>
</html>