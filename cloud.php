<?php
session_start();
if(isset($_SESSION['uemail'])){

}else{
  echo "<p class='alert-danger  text-white bg-success alert text-center alert-dismissible p-2 font-weight-bold'> Login First to Access this Page!!
  <button type='button' class='close  bg-dark font-weight-bold  p-2' data-dismiss='alert'>&times;</button> </P>";
  echo "<script> window.location.href ='index.php'</script>";      
}

  include_once("functions.php");
  menu("Home","Profile","Storage","Inventory","About us");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Storage for all of your needs</title>
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<?php
  // upload file to storage
  if(isset($_POST['upldoc']) && isset($_FILES['filez'])){
    $folder = "storage/";
    $file_name = $_FILES['filez']['name'];
    $temp_dir = $_FILES['filez']['tmp_name'];
    $source = $folder.$file_name;
    move_uploaded_file($temp_dir,$source);
    $title = $_POST['doctitle'];
    $description = $_POST['descr'];
    $timestamp = date('Y-m-d H:i:s');
 $uname = $_SESSION['uname'];
$uemail = $_SESSION['uemail'];
  // database insertion

include('sqlcon.php');
if( $title != "" && $description != "" && !empty($_FILES["filez"]["name"])){
$query = "INSERT INTO `users`.`storage`(`title`, `description`,`document` ,`email`, `time`, `username`) VALUES ('".$title."','".$description."','".$source."','".$uemail."','".$timestamp."','".$uname."')";
$result = mysqli_query($con,$query);
if($result){
  echo "<p class='alert-success  text-white bg-success alert text-center alert-dismissible p-2 font-weight-bold'> Successfully Updated!!
  <button type='button' class='close  bg-dark font-weight-bold  p-2' data-dismiss='alert'>&times;</button> </P>"; 

}else{

  echo "<p class='alert-dark  text-white bg-danger alert text-center alert-dismissible p-2 font-weight-bold'> Not Updated!!
  <button type='button' class='close  bg-dark font-weight-bold  p-2' data-dismiss='alert'>&times;</button> </P>";
      echo "error: ".$con-> error; 
    
   }

  }else{
    echo "<p class='alert-dark  text-white bg-info alert text-center alert-dismissible p-2 font-weight-bold'> Fields are Blank!!
    <button type='button' class='close  bg-dark font-weight-bold  p-2' data-dismiss='alert'>&times;</button> </P>";
   
  }
} //isset
?>
<div class="container-fluid bg-primary col-xl-12 text-center  bg-dark">
<i class='fa fa-database text-white p-3 mr-1 mt-4 fa-2x rounded-circle bg-danger '></i>
<h3 class="text-center text-white alert alert-link"> Your Storage </h3> 
<br> 
<form action="" method="post" class="form" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="doctitle" id="doctitle" class="form-control" placeholder="File Title">
        <textarea name="descr" id="descr" cols="30" rows="5" class="form-control mt-2" placeholder="File Description"></textarea>
        <input type="file" name="filez" id="filez" class="p-3 m-0 text-white bg-info w-100">
        <br>
        <input type="submit" value="Upload" name="upldoc" id="upldoc" class="btn btn-success mt-2 mb-2 font-weight-bold">
        <input type="reset" value="Reset" name="uplreset" id="uplreset" class="btn btn-primary mt-2 mb-2 font-weight-bold">
    </div>
</form>
</div>

<!-- php for Data display -->
<?php
if(isset($_SESSION['uemail'])){
include_once('sqlcon.php');
$selectqry = "SELECT `title`, `description`, `document`, `email`, `time`, `username` FROM `users`.`storage` WHERE email = '".$_SESSION['uemail']."'";
$result = mysqli_query($con,$selectqry);
if($result){

while($row = mysqli_fetch_assoc($result)){

echo "<div class='container-fluid p-0 m-auto'> 
<div class='row container-fluid m-auto'>
 <div class='m-auto col-md-12 card bg-light' style='margin-top:20px !important;'>
<div class='badge-pill mt-2 badge-dark'> 
<p class= 'badge btn-outline-light btn  badge-pill mt-3 float-left font-weight-bold'>Owner: $row[username]</p>
<p class='font-weight-bold badge-pill badge  btn-outline-light btn float-right mt-3'>Posted: $row[time]</p>
</div>
<div class='card-body text-center'>
<div class='card-img text-center'><a class='btn-light text-white font-weight-bold' href='$row[document]'><img download src='$row[document]' width='400px' height='300px' class='img-fluid img-thumbnail m-auto' alt='proj/images/file.jpg' onerror=this.src='images/file.jpg' ></div>
<h5 class='card-title btn btn-outline-dark fa fa-deviantart mt-2 font-weight-bold fa-1x text-justify'>  Title: $row[title]</h5>
<a class=' card-title btn btn-outline-success fa fa-download mt-2 font-weight-bold fa-1x' href='$row[document]' download='untitled'>  Download File </a>   
<br> <p class='btn btn-outline-primary w-75 card-text  fa fa-deviantart font-weight-bold'>  Description: $row[description]</p>
</div> </div> </div>";
}

}//if

} //isset
?>



<div class="container-fluid"> 
<?php
include_once('functions.php');
  footer();
?>
</div>
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>       
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


