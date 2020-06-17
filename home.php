<?php
session_start();
if(isset($_SESSION["uemail"])){
  include_once('functions.php');
  menu("Home","Profile","Storage","Inventory","About us");
}
else{
  echo "Check Your Credentials";
header('location:index.php');
  exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Smart Wallet Manager">
  <meta name="author" content="AD Khan">

  <title>Falcon Secure Vault</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="about.css">
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">


</head>

<body>
    <!-- welcome to Secure Vault -->
    <section class="container-fluid wsection mb-4">
            <div class="row">

                <!-- heart logo -->
                <div class="col-md-6 m-auto wtsdiv1">
                    <!-- <div class=" wts_inner">
                        <i class=" fa fa-heartbeat fa-10x " style=" color: #F50057; " aria-hidden=" true "></i>
                    </div> -->

                </div>
                <div class="col-md-6 wtsdiv2 " style=" color:white; padding:50px; ">
                    <hr class="uhr">
                    <h4 style="font-size:25px;" class="text-center">Welcome To Falcon Secure Vault <br> Trusted Vault App over Internet</h4>
                    <hr class="uhr">
                    <p style="font-size: 15px; ">
                        Our experts and highly experienced team are always thinking outside the box to provide creative ideas & Solutions to help our users & clients We stand out from the crowd. We know that every client and project is different and different problems have different solutions, which is why Falcon Secure Vault offers Secure Data Storage,
                       Secure Authentication to maintain the confidentiality of our Users & Clients We are Always here to make your life easy.
                    </p>
                </div>
            </div>
        </section>

 <!-- packages -->
 <div class="container-fluid bg-light mb-5">
    <div class="row text-center">
        <div class="col-4 princing-item red">
          <div class="pricing-divider ">
              <h3 class="text-light">STARTUP</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 100 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
        	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
            </svg>
          </div>
          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5">
              <li><b>10</b> users included</li>
              <li><b>10 GB</b> of storage</li>
              <li><b>Free </b>Email support</li>
              <li><b>Help center access</b></li>
            </ul>
          </div>
        </div>
       
        <div class="col-4 princing-item blue">
          <div class="pricing-divider ">
              <h3 class="text-light">BUSINESS</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 150 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
        	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5">
              <li><b>20 </b>users included</li>
              <li><b>20 GB</b> of storage</li>
              <li><b>Free</b> Email support</li>
              <li><b>Help center access</b></li>
            </ul>
          </div>
        </div>
               
        <div class="col-4 princing-item green">
          <div class="pricing-divider ">
              <h3 class="text-light">PRO</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
        	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
        	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5">
              <li><b>40</b> users included</li>
              <li><b>30 GB</b> of storage</li>
              <li><b>Free</b> Email support</li>
              <li><b>Help center access</b></li>
            </ul>
          </div>
        </div>
               
      </div>
    </div>
  <section class="container-fluid">
  <H1 class="text-center">
        <hr class="uhr"> OUR SERVICES
        <hr class="uhr">
    </H1>
  <div class="row">
    
    <div class="col-md-4 text-center">
        <i class=" fa fa-ioxhost fa-4x mb-3 btn btn-outline-dark border-0 p-4"></i>
        <h5>WEB HOSTING</h5>
        <p>We provide a wide Range of Web Hosting Plans, from Basic to Pro as per the need of our Clients</p>
        <a class="btn btn-outline-primary badge-pill mb-2 text-decoration-none" href="services.html">Read More</a>
    </div>
    <div class=" col-md-4 text-center">
        <I class=" fa fa-database fa-4x mb-3 btn btn-outline-dark border-0 p-4"></I>
        <h5>DATABASE MANAGEMENT</h5>
        <p>We keep your data secure using various Secure Algorithms, We Understand & Maintain your confidentiality.</p>
        <a  class="btn btn-outline-primary badge-pill mb-2 text-decoration-none" href="services.html">Read More</a>
        <br>
        <br>
    </div>
    <div class=" col-md-4 text-center">
        <I class=" fa fa-delicious fa-4x mb-3 btn btn-outline-dark border-0 p-4"></I>
        <h5>SOFTWARE DEVELOPMENT</h5>
        <p>We also provide Software Solutions, We Deals with all kind of software Development</p>
        <a class="btn btn-outline-primary badge-pill mb-2 text-decoration-none" href="services.html">Read More</a>
    </div>
  </div>
</section>



<!-- packag -->


<!-- 
   Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>       
    <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  


  <!-- Menu Toggle Script -->

<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<?php
include_once('functions.php');
  footer();
?>

</body>

</html>
