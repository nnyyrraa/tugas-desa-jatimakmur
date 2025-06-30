<?php
require_once 'koneksi.php';

if(ISSET($_POST['submit'])){
 if($_FILES['upload']['name'] != "") {
  $file = $_FILES['upload'];
  
  $file_name = $file['name'];
  $file_temp = $file['tmp_name'];
  $name = explode('.', $file_name);
  $path = "files/".$file_name;
  
  $conn->query("INSERT INTO surat_file VALUES('', '$name[0]', '$path')") or die(mysqli_error());
  
  move_uploaded_file($file_temp, $path);
  header("location:index.php?page=surat");
  
 }else{
  echo "<script>alert('Required Field!')</script>";
  echo "<script>window.location='index.php'</script>";
 }
}
?> 


<html>
<head>
    <title>Input Surat</title>
    <script language="JavaScript">  
        function batal(){
 		    document.location='index.php?page=surat';  
        }		
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <!--Script CSS-->
    <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Surat</li>						  	
					</ol>
				</div>
			</div>
<form class="form-inline" method="POST" action="input_surat.php" enctype="multipart/form-data">
 <input class="form-control" type="file" name="upload"/>
 <button type="submit" class="btn btn-success form-control" name="submit"><span class="fa fa-upload"></span> Upload</button>
</form>
</body>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>
