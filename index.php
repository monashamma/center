<?php
echo "hello world";
           session_start();	

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Free Bootstrap Admin Template : Binary Admin</title>
      <!-- BOOTSTRAP STYLES-->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!-- FONTAWESOME STYLES-->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!-- MORRIS CHART STYLES-->
      <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
          <!-- CUSTOM STYLES-->
      <link href="assets/css/custom.css" rel="stylesheet" />
       <!-- GOOGLE FONTS-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Binary admin</a> 
        </div>
          <div style="color: white;
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
  <li class="text-center">
              <img src="assets/img/find_user.png" class="user-image img-responsive"/>

<span style="color:white";> 
<?php
if(isset($_SESSION["session_user_name"])){
   echo "Welcome ".$_SESSION[ "session_user_name"];}
   ?>
</span>

</li>

  
    <?php  if(isset($_SESSION["session_user_id"])){ ?>
              <li  >
                <a  href="./index.php?page=students"><i class="fa fa-table fa-3x"></i>students</a>
              </li>
              
              <li  >
                <a  href="./index.php?page=classes"><i class="fa fa-table fa-3x"></i>Classes</a>
              </li>

              <li >
                <a  href="./index.php?page=teachers"><i class="fa fa-table fa-3x"></i>teachers</a>
              </li>
              <li  >
                <a  href="./index.php?page=languages"><i class="fa fa-table fa-3x"></i>languges</a>
              </li>

              <li  >
                <a  href="./index.php?page=logout"><i class="fa fa-table fa-3x"></i>logout</a>
              </li>

              <?php }else{ ?>


              <li  >
                <a  href="./index.php?page=login"><i class="fa fa-table fa-3x"></i>login</a>
              </li>
              <?php } ?>

          </ul>
         
      </div>
      
  </nav> 
        <div id="page-wrapper" >
          <?php
 

          if(isset($_GET["page"])){
            // echo $_GET["page"]; 
            $page=$_GET["page"];
            if($page=="students"){
              include_once "./students/students.php";
            }elseif($page=="classes"){
              include_once "./classes/classes.php";
            }elseif($page=="teachers"){
              include_once "./teacher/teachers.php";
            }elseif($page=="languages"){
              include_once "./languages/languages.php";
            }elseif($page=="addlanguage"){
              include_once "./languages/addlanguage.php";
            }elseif($page=="editlanguage"){
              include_once "./languages/editlanguage.php";
            }elseif($page=="updatelanguage"){
            include_once "./languages/updatelanguage.php";
            }elseif($page=="deletelanguage"){
              include_once "./languages/deletelanguage.php";
            }elseif($page=="savelanguage"){
             include_once "./languages/savelanguage.php";
            }elseif($page=="savestudent"){
              include_once "./students/savestudents.php";
            }elseif($page=="addstudent"){
                include_once "./students/addstudent.php";
            }elseif($page=="editstudent"){
              include_once "./students/editstudent.php";
            }elseif($page=="updatestudent"){
                include_once "./students/updatestudent.php";
          }elseif($page=="deletestudent"){
            include_once "./students/deletestudent.php";
        }elseif($page=="login"){
          include_once "./login.php";
      }elseif($page=="logout"){
        session_destroy();
        header("location:./index.php?page=login");
      }
            
            
            
            else{
            include_once "./students/students.php";
          }



        }
          
          ?>

          
        </div>
    </div>

  <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
   <!-- MORRIS CHART SCRIPTS -->
   <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="./assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>
  </body>

</html>
