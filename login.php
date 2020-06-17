<?php
  include('sqlcon.php');
if(isset($_POST['submit'])){
     $emailx = $_POST["email"]; 
      $passx= base64_encode($_POST["pass"]);   

     $sql = "SELECT `first_name`, `last_name`, `phone`, `mobile`, `email`, `location`, `password`, `password2`, `image` FROM `users`.`uprofile` WHERE email = '".$emailx."' AND password = '".$passx."'";
      $result = mysqli_query($con,$sql);
      
      if($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }//connect error
      
      if( $result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
        $_SESSION['uname'] = $row['first_name'];
        $_SESSION['ulname'] = $row['last_name'];
        $_SESSION['uphone'] = $row['phone'];
        $_SESSION['umobile'] = $row['mobile'];
        $_SESSION['uemail'] = $row['email'];
        $_SESSION['ulocation'] = $row['location'];   
        $_SESSION['upassword'] = $row['password'];  
        $_SESSION['uimage'] = $row['image']; 
        echo "<center class=' w-100 m-auto btn badge-success badge text-center'>Successfully Logged in !! </center>";
        echo "<script> window.location.href ='home.php'</script>";                      
      }        
      }else{

            echo "<center class='badge-dark w-25 btn badge text-center m-auto'> Error: </center>".$con->error. "<center class=' w-75 m-auto btn badge-danger badge text-center'> wrong Credentials </center>"; 
            echo "<script> window.navigator.href ='index.php'</script>";
       
         } // Login first
  }// if post submitted

?>