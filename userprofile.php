<!-- session started -->
<?php
    session_start();
    if(isset($_SESSION["uemail"])){
    // add condition  no needed
  }else{
    echo "Check Your Credentials";
    header('location:index.php');
  
  }
?>
 <!-- for uploding to folder  -->
<?php 
      if(isset($_POST['submit'])){

        include('sqlcon.php');
        // file upload
        $folder = "users/";
        $file_name = $_FILES['filex']['name'];
        $temp_dir = $_FILES['filex']['tmp_name'];
        $source = $folder.$file_name;
        move_uploaded_file($temp_dir,$source);

      }
      
    ?>



                        
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
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="own.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<!-- updating to db -->
<?php 
    if( isset($_POST['submit'])){  
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $email = $_SESSION['uemail'];
    $location = $_POST['location'];
    $password = base64_encode($_POST['password']);
    $password2 = $password;
    $image = $source;
    if( $password != '' && $image != 'users/'){
        $query = "UPDATE`users`.`uprofile` set `first_name`='$first_name', `last_name`='$last_name', `phone` = '$phone', `mobile`='$mobile' , `email`='$email',`location`='$location',`password`='$password',`password2`='$password', `image`='$image' where email = '".$email."'";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='w-100 alert-success text-white bg-success alert text-center alert-dismissible font-weight-bold'> Successfully Updated!!
            <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";   
          header("index.php");
        }else{
                $error = "Error : " .$con -> error;
                $trim = substr($error,0,24);
                echo "<div class='w-100 alert-danger text-white bg-danger alert text-center alert-dismissible font-weight-bold'>  $trim
                <button type='button' class='close bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";  
            } 
           
           
    }else{
        echo "<div class='w-100 text-white bg-danger alert text-center alert-dismissible font-weight-bold'> Please Enter Your Password !!
        <button type='button' class='close  bg-dark text-white font-weight-bold p-1' data-dismiss='alert'>&times;</button> </div>";      
    }
    
    
    
    } //isset
    

    ?>

    <!-- php for Data display -->
<?php
    if(isset($_SESSION['uemail'])){
    include_once('sqlcon.php');
    $selectqry = "SELECT `first_name`, `last_name`, `phone`, `mobile`, `email`, `location`,`image` FROM `users`.`uprofile` WHERE email = '".$_SESSION['uemail']."'";
    $result = mysqli_query($con,$selectqry);
    if($result){

    while($row = mysqli_fetch_assoc($result)){
    $_SESSION['uname'] = $row['first_name'];
    $_SESSION['uemail'] = $row['email'];   
    $_SESSION['uimage'] = $row['image']; 

    }
    }//if

    } //isset
    ?>

    <!-- topbar -->
    <div class="container-fluid mt-0 bg-dark text-white">
     <div class="row">

     <div class="col-md-4"></div>
        <div class="col-md-4 bg-dark text-center font-weight-bold"><h4 class="font-weight-bold"> User Profile </h4></div>
        <div class="col-md-4 d-flex justify-content-end"><button class="btn btn-outline-secondary font-weight-bold" title="Go Home"><a class="text-light" href="home.php"> <i class="fa-2x fa fa-arrow-circle-left"></i></a></button></div> 

     </div>    
    </div>
 
    <!--main content left right div  -->
     <div class="container-fluid mt-0 bg-secondary font-weight-bold text-white">
        <div class="row">
            <div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                      <img src="<?php echo $_SESSION['uimage'];?>"  class="avatar img-fluid img-circle img-thumbnail mt-5" alt="avatar" style="height:300px;">
                      <h1 class="text-center fade-in  font-weight-bold"><?php  echo $_SESSION['uname']; ?></h1>
                    </div></hr><br>
                        
                        <div class="panel panel-default">
                           <div class="panel-heading text-center">Website <i class="fa fa-link fa-1x"></i></div>
                            <div class="panel-body text-center"><a href="https://ad-mob-dev.web.app">Falcon-Secure-Vault</a></div>
                        </div>     
            </div><!--/col-3-->
            <div class="col-sm-9">
           
               
                 
                      <form class="form" action="userprofile.php" method="post" id="registrationForm" enctype="multipart/form-data">
                        <!-- first name -->
                        <div class="form-group">
                              <!-- first name -->
                              <div class="col-xs-6">
                                  <label for="first_name"><h4>First name</h4></label>
                                  <input disabled type="text" class="form-control" name="first_name" id="first_name" placeholder= "Enter Your First Name" value="<?php  echo $_SESSION['uname']; ?>" title="enter your first name if any.">
                              </div>
                          </div>
                          <!--last name  -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                  <input disabled type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name" value="<?php  echo $_SESSION['ulname']; ?>"title="enter your last name if any.">
                              </div>
                          </div>
                            <!-- phone -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="phone"><h4>Phone</h4></label>
                                  <input disabled type="text" class="form-control" name="phone" id="phone" placeholder="Enter your Phone Number" value="<?php  echo $_SESSION['uphone']; ?>" title="enter your phone number if any.">
                              </div>
                          </div>
                         <!-- Mobile -->
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>Mobile</h4></label>
                                  <input disabled type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile Number" value="<?php  echo $_SESSION['umobile']; ?>" title="enter your mobile number if any.">
                              </div>
                          </div>
                          <!-- email -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input disabled type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" value="<?php  echo $_SESSION['uemail']; ?>" title="enter your email.">
                              </div>
                          </div>
                          <!-- location -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Location</h4></label>
                                  <input disabled type="text" class="form-control" name="location" id="location" placeholder="Enter your Email" value="<?php  echo $_SESSION['ulocation']; ?>" title="enter a location">
                              </div>
                          </div>
                          <!-- password -->
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Password</h4></label>
                                  <input disabled type="password" class="form-control" name="password" id="password" placeholder="Kept hidden for privacy" title="Change your password.">
                              </div>
                          </div>
                     

                          <!-- image -->
                           <input  id="img"disabled type="file" name="filex" class="text-center p-5  file-upload">


                           <!-- buttons -->
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                    <button class="btn zmdi-brightness-3 btn-dark   font-weight-bolder mt-5 edit" name="edit" type="button" id="edit"> Edit </button>
                                      <input class="btn  btn-success mt-5 font-weight-bolder" name="submit" type="submit" id="submit">
                                </div>
                          </div>
                      </form>
                
        
        </div><!--/col-9-->
    </div>

<!-- footer -->

    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>       
    <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
<?php
include_once('functions.php');
simplefooter();
?>        
    
</body>
</html>