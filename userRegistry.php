<?php
// session
session_start();

if(isset($_SESSION["uemail"])){		
	echo " <div class='row w-100 m-auto'><div class='col-md-3 alert alert-primary text-black text-center'> 
	<i class='fa fa-user-secret fa-2x text-center'> </i> </div>";
	echo "<div class='col-md-6  alert alert-danger'> 
	<h5 class='text-center'> Youre Already Logged In !! Log out To go back to login Page <h5> </div>";
	echo "<div class='col-md-3  alert alert-info text-center'> 
	<i class='fa fa-arrow-circle-o-right fa-2x d-inline  text-black'> </i></div></div>";
	echo "<div class='text-center '><img class='mt-5' src='images/checkx.png' width= '250px' height='250px'> <h4 class='mt-5'> You're Already Signed In
	<br> Click Here to <a href='logout.php' class='fa-1x text-primary badge badge-light'>Log out</a></h4></div>";
	echo "<script> window.navigator.href ='userprofile.php'</script>";
	exit();
}else{
	echo "<script> window.navigator.href ='userRegistry.php'</script>";
}



// for uploding to folder
if(isset($_POST['submit'])){

    $folder = "users/";
  $file_name = $_FILES['filex']['name'];
  $temp_dir = $_FILES['filex']['tmp_name'];
  $source = $folder.$file_name;
  move_uploaded_file($temp_dir,$source);

  }
?>
<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <script src="own.js"></script>
</head>
<body>
<!-- topbar -->
<div class="container-fluid mt-0 bg-dark text-white">
     <div class="row">

     <div class="col-md-4"></div>
        <div class="col-md-4 bg-dark text-center font-weight-bold"><h4 class="font-weight-bold"> User Registration </h4></div>
        <div class="col-md-4 d-flex justify-content-end"><button class="btn btn-outline-secondary font-weight-bold" title="Go Home"><a class="text-light" href="home.php"> <i class="fa-2x fa fa-arrow-circle-left"></i></a></button></div> 

     </div>    
    </div>

<!-- php code -->
<?php 
include('sqlcon.php');
if(!empty($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$location = $_POST['location'];
$password = base64_encode($_POST['password']);
$password2 = base64_encode($_POST['password2']);
$image = $source;


if($first_name != null && $last_name != null && $phone !=null && $mobile !=null && $location !=null &&  $password == $password2 && $image !=null){
$query = "INSERT INTO `users`.`uprofile`(`first_name`, `last_name`, `phone`, `mobile`, `email`, `location`, `password`, `password2`, `image`) VALUES ('$first_name','$last_name','$phone','$mobile','$email','$location','$password','$password2','$image')";
$result = mysqli_query($con,$query);
if($result){

    echo "<div class='w-100 alert-success text-white bg-success alert text-center alert-dismissible font-weight-bold'> Successfully Registered!!
    <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";   
    echo "<script> window.location.href ='index.php'</script>";   
}else{

 $error = "Error : " .$con -> error;
 $trim = substr($error,0,24);
 echo "<div class='w-100 alert-danger text-white bg-danger alert text-center alert-dismissible font-weight-bold'>  $trim
 <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";   
}
}else if($password !== $password2){


    echo "<div class='w-100 alert-danger text-white bg-danger alert text-center alert-dismissible font-weight-bold'> Password donot Match!!
    <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";   

}else{

    echo "<div class='w-100 alert-danger text-white bg-danger alert text-center alert-dismissible font-weight-bold'> Try Again !! Registration Failed Due to Some Error.
    <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";   
}
}

?>


    <div class="container-fluid">
      
            
       
            <div class="row">
              <div class="col-sm-3"><!--left col-->
                  
    
          <div class="text-center">
       
            <img src="images/place.png"  class="avatar img-circle img-thumbnail mt-5" alt="avatar">
                 <h1 class="text-center"><?php  if(isset($_SESSION['uemail'])){
                 echo $_SESSION['uname'];}  ?></h1>
          </div></hr><br>
    
                   
              <div class="panel panel-default">
                <div class="panel-heading text-center">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body text-center"><a href="Https://ad-mob-dev.web.app">Falcon-Secure-Vault</a></div>
              </div>
              
       
                       
            </div><!--/col-3-->
            <div class="col-sm-9">
    
                  
             <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      <form class="form" action="" method="post" id="registrationForm" enctype="multipart/form-data">
                        <!-- first name -->
                        <div class="form-group">
                              <!-- first name -->
                              <div class="col-xs-6">
                                  <label for="first_name"><h4>First name</h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                              </div>
                          </div>
                          <!--last name  -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                              </div>
                          </div>
                            <!-- phone -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="phone"><h4>Phone</h4></label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                              </div>
                          </div>
                         <!-- Mobile -->
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>Mobile</h4></label>
                                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                              </div>
                          </div>
                          <!-- email -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                              </div>
                          </div>
                          <!-- location -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Location</h4></label>
                                  <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                              </div>
                          </div>
                          <!-- password -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Password</h4></label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                              </div>
                          </div>
                          <!-- verify password -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                  <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                              </div>
                          </div>

                          <!-- image -->
                           <input type="file" name="filex" class="text-center p-5  file-upload">

                          <!-- buttons -->
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                      <input class="btn btn-lg btn-success" name="submit" type="submit">
                                       <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                          </div>
                      </form>
                  </div>
            </div>
                  <hr>
    
            </div><!--/col-9-->
        </div><!--/row-->

 <!-- footer -->
<div class="container-fluid mt-2">
    <br>
    <br>
<?php
include_once("functions.php");
simplefooter();
?>
</div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
</body>
</html>