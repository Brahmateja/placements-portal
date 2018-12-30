<?php
include("2.php");
$csv=new csv();
if(isset($_POST['submit'])){
$csv->import($_FILES['file']['tmp_name']);
echo "File Imported Successfully";	
} 
?>




<html>
 <head>
  <title>Import Excel to Mysql </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
  
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Import Excel to Mysql </h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" class="btn btn-info" value="import" />
   </form>
   <br />
   <br />
   
  </div>
 </body>
</html>
