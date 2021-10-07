 <?php
 session_start();
$p=$_SESSION["database"];



?>

<script type="text/javascript">
  
function validate(){
var fname=$("#fname").val();
var email=$("#email").val();
var password=$("#pass").val();
 
var check=true;
     
      var pattern=/^[a-zA-z ]*$/;
      if (pattern.test(fname) && fname!=='') 
        {
           $("#name_msg").html("");
       //check=false;
     }
     else
     {
      $("#name_msg").html("enter your name");
        check=false;
     }
     if(IsEmail(email)==false){
          
          $("#email_msg").html("enter email");
        }
        function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) 
  {
  $("#email_msg").html("Please Enter correct email");
  check=false;
  }else{
    $("#email_msg").html("");
   
  }
}
if (password=="")
 {
  $("#password_msg").html("Enter Your password ");
  check=false;
 }
 else
 {
  $("#password_msg").html("");
 }
            
//alert(check);
return check;
}
</script>










 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create Account</h2>
  <form action="user.php" method="post" onsubmit="return validate()">
  	 <div class="form-group">
      <label for="email">Fullname:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Fullname" name="fname">
    <span id="name_msg"></span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <span id="email_msg"></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pwd">
    <span id="password_msg"></span>
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
