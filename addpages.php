<?php
 session_start();
$p=$_SESSION["database"];
echo $p;



?>


 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script>
 tinymce.init({
   selector: 'textarea#editor',  //Change this value according to your HTML
   auto_focus: 'element1',
   width: "700",
   height: "200"
 }); 
 
 // $( document ).ready(function() {
  
 //    $('#button').on("click", function(){
 //      tinyMCE.triggerSave();
 //      var value = $("textarea#editor").val();
 //      }   
      // $("#display-post").html(value);
      // $(".texteditor-container").hide();
      // alert();
      // return false;
  //   });
  
  // });  
  function validate(){ 

  $a=$("#page").val();
  $b=$("#editor").val();

  var check=true;

  if ($a=="")
   {
    $("#page_msg").html("enter page name");
    check=false;
   }
   else
   {
    $("#page_msg").html("");
   }

   if ($b=="")
   {
    $("#editor_msg").html("if you want you write maximum content");
    check=false;
   }
   else
   {
    $("#editor_msg").html("");
   }

   return check;
 }
  
 </script>
  <style>
.texteditor-container { 
 width:700px;
 height:300px;
}
textarea#editor1 {
 width:500px !important;
 border:1px solid red;
 
}
.sbtn{
  float: right;
  margin-top: 0px ;
}
</style>
</head>
<body>

<div class="container m-5">
  <div class="sbtn">
    <a href="showlist.php" type="button"class="btn btn-info">Show my List</a>
  </div>
  <h2>Create Your Pages</h2>
  
  <form action="showpages.php" method="post" onsubmit="return validate()">
  	 <div class="dropdown">
 
    Status
  </button>
  <select name="select">
   <option value="published">published</option>
   <option value="not_published">Not Published</option>
 </select>
  </div>

      
    
    
    
    <div class="form-group">
      <label for="page">Page Name:</label>
      <input type="text" class="form-control" id="page" placeholder="Enter page name" name="page">
    <span id="page_msg" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label for="email">Content:</label>
      <textarea name="editor" id="editor"></textarea>
    <span id="editor_msg" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label for="date">Start Date:</label>
      <input type="date" class="form-control" id="sdate" name="sdate">
    <span id="sdate_msg"></span>
    </div>

    <div class="form-group">
      <label for="date">End Date:</label>
      <input type="date" class="form-control" id="edate" name="edate">
    <span id="edate_msg"></span>
    </div>
    
    <button type="submit" class="btn btn-default" id="button">Submit</button>
  </form>
</div>



</body>
</html>