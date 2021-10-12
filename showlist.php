<?php 
session_start();
$conn=mysqli_connect("localhost","root","12345678");
$p=$_SESSION["database"];
echo $p;
mysqli_select_db($conn,$p);


$que="SELECT * FROM page_table";
$result=mysqli_query($conn,$que);
//$obj=mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h4 class="text-center py-3">YOUR LIST</h4>
	
<table class="table table-striped">
	<tr><th>ID</th>
		<th>Status</th>
		<th>Title</th>
		<th>Content</th>
		<th>Start_date</th>
		<th>End_date</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>


       

        <?php 

           while($obj=mysqli_fetch_array($result))

           {
           	    ?>
         <tr>
      		<td><?php echo $obj['id'];?></td>
      		<td><?php echo $obj['status'];?></td>
		    <td><?php echo $obj['pagename'];?></td>
		     <td><?php echo $obj['content'];?></td>
		      <td><?php echo $obj['start_date'];?></td>
		      <td><?php echo $obj['end_date'];?></td>
		      <td><a href="edit.php?eid=<?php echo $obj['id'];?>" class="btn btn-info">Edit</a></td>
		      <td><a href="delete.php?did=<?php echo $obj['id'];?>" class="btn btn-danger">Delete</a></td>
		  </tr>

           <?php

           }

         ?>
     
      	
      	
      

		

		
</table>

</div>






</body>
</html>