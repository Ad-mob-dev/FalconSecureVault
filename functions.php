<?php
function menu($page_title1,$page_title2,$page_title3,$page_title4,$page_title5){
  echo "
  <nav class='navbar navbar-expand-lg navbar-light bg-dark border-bottom'>
     <button class='btn btn-light fa-1x m-auto font-weight-bold max-w-full' > <i class='btn btn-outline-dark fa fa-steam fa-1x mr-2 p-1 font-weight-bold'></i> <span class='login100-form-title p-b-20 text-danger'>
     Falcon <span class='text-dark'> Secure </span>  <span class='text-warning'>Vault</span>
   </span> </button>

      <button class='navbar-toggler bg-white' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav ml-auto mt-2 mt-lg-0'>
         <li class='nav-item m-2'>
            <a class='nav-link btn btn-dark text-white font-weight-bold' href='home.php'><i class='fa fa-home text-white p-1 mr-1'></i>
            $page_title1<span class='sr-only'>(current)</span></a>
          </li>
            <li class='nav-item m-2'>
            <a class='nav-link btn btn-dark text-white font-weight-bold' href='userprofile.php'><i class='fa fa-user-circle-o text-white p-1 mr-1'></i>$page_title2<span class='sr-only'></span></a>
            </li>
          <li class='nav-item m-2'>
            <a class='nav-link btn btn-dark text-white font-weight-bold' href='cloud.php'><i class='fa fa-database text-white p-1 mr-1'></i>$page_title3</a>
          </li>
          <li class='nav-item m-2'>
          <a class='nav-link btn btn-dark text-white font-weight-bold' href='rec.php'><i class='fa fa-xing-square text-white p-1 mr-1'></i>$page_title4</a>
          </li>
            <li class='nav-item m-2'>
            <a class='nav-link btn btn-dark text-white font-weight-bold' href='aboutus.php'><i class='fa fa-codepen text-white p-1 mr-1'></i>$page_title5</a>
          </li>
          <li class='nav-item m-auto'>
          <a class='nav-link btn btn-dark text-white font-weight-bold' href='$_SESSION[uimage]'>
          <img src='$_SESSION[uimage]'  class='rounded-circle ml-1 border border-danger' download alt='avatar' style='width:40px; height:40px;'>          
          </a>

          </li>
          <li class='nav-item m-2 '>
           <a title='Log out' class='nav-link btn btn-dark text-white font-weight-bold' href='logout.php'><i class='fa fa-sign-out text-white p-1 mr-1'> </i>Sign Out</a>
          </li>
        </ul>
      </div>
    </nav>";
  }

function footer(){

  echo "<iframe src='https://www.google.com/maps/d/u/0/embed?mid=1LQfqL1oDA_ee6m_SskyPoHu1jXirN8zy'  width='100%' height='450' frameborder='0' style='border:0;' allowfullscreen=' aria-hidden='false' tabindex='0'></iframe>
 
     <div class='row'>
             <div class='col-md-12 bg-dark text-center text-white'>
             <span class='badge badge-pill btn btn-outline-light p-2 m-2'><i class='fa fa-cloud mr-3'></i>Falcon Secure Vault<i class='fa fa-cloud ml-3'></i></span>
               </div>
         </div>";
}
function simplefooter(){
 
  echo "<div class='row'>
             <div class='col-md-12 bg-dark text-center text-white'>
             <span class='badge badge-pill btn btn-outline-light p-2 m-2'><i class='fa fa-cloud mr-3'></i>Falcon Secure Vault<i class='fa fa-cloud ml-3'></i></span>
               </div>
         </div>";
}


?>