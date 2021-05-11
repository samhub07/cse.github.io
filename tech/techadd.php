<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['st_user'])
{
	
	header("location:index.php");
}
else
{
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);
	
	$student_name_display = $st_name->fetch_assoc();
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>MITCORER</title><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    
    <div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <ul class="nav" id="side-menu">
            <li>
              <a href="home.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-cogs nav_icon"></i>Class <span class="nav-badge">8</span> <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="class.php">Class Information</a>
                </li>
                
              </ul>
              <!-- /nav-second-level -->
            </li>
            
            <li>
              <a href="#"><i class="fa fa-cogs nav_icon"></i>Teacher <span class="nav-badge">8</span> <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="techinfo.php">Teacher Information</a>
                </li>
                <li>
                  <a href="techadd.php">Add Teacher</a>
                </li>
                <li>
                  <a href="edittech.php">Edit info Teacher </a>
                </li>
              </ul>
              <!-- /nav-second-level -->
            </li>
            <li class="">
              <a href="#"><i class="fa fa-book nav_icon"></i>Students <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="Studinfo.php">Student Information</a>
                </li>
                <li>
                  <a href="studadd.php">Add Students</a>
                </li>

                <li>
                  <a href="editstud.php">Edit Info Students</a>
                </li>
              </ul>
              <!-- /nav-second-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-envelope nav_icon"></i>Parents<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="parinfo.php">Partents Inforamtion </a>
                </li>
                <li>
                  <a href="paradd.php">Add Parents Info</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
             <li>
              <a href="#"><i class="fa fa-envelope nav_icon"></i>Class Work<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="techplan.php">Teaching Plan </a>
                </li>
                <li>
                  <a href="practplan.php">Practicle Plan</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
			<li>
              <a href="#"><i class="fa fa-envelope nav_icon"></i>Results<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="readd.php">Add Resukts </a>
                </li>
                <li>
                  <a href="reshow.php">Results Show</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
			<li>
              <a href="#"><i class="fa fa-envelope nav_icon"></i>Download work<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="techp.php">Teaching Plan </a>
                </li>
                <li>
                  <a href="practp.php">Practicle Plan</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>            

          </ul>
          <!-- //sidebar-collapse -->
        </nav>
      </div>
    </div>
    


    <!--left-fixed -navigation-->
      <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
    
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
          <a href="index.php">
            <h1>CSE</h1>
            <span>AdminPanel</span>
          </a>
        </div>
        <!--//logo-->
        <!--search-box-->
        <div class="search-box">
          <form class="input">
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
              <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
              </svg>
            </label>
          </form>
        </div><!--//end-search-box-->
        <div class="clearfix"> </div>
      </div>  
        <!--notification menu end -->
        <div class="profile_details">   
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="images/a.png" alt=""> </span> 
                  <div class="user-name">
                     <p><?php echo ucfirst($student_name_display['st_fullname']); ?></p>
                    <span>Teacher</span>
</div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="set.php"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="techinfo.php"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    	<body>
<?php 


 if(isset($_POST['add_teacher_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	  $add_t_fullname = $_POST['add_t_fullname'];
	 $add_t_address = $_POST['add_t_address'];
	 $add_t_email = $_POST['add_t_email'];
	 $add_t_username = $_POST['add_t_username'];
	 $add_t_pass = $_POST['add_t_pass'];
	 $add_t_father = $_POST['add_t_father'];
	 $add_t_mother = $_POST['add_t_mother'];
	 $add_t_dob = $_POST['add_t_dob'];
	 $add_t_qualification = $_POST['add_t_qualification'];
	 $add_t_contact = $_POST['add_t_contact'];
	 $add_t_staff = $_POST['add_t_staff'];
	 $add_t_gender = $_POST['add_t_gender'];
	 if($add_t_fullname=="" OR $add_t_address=="" OR $add_t_email=="" OR $add_t_username=="" OR $add_t_pass=="" OR $add_t_father=="" OR $add_t_mother=="" OR $add_t_dob=="" OR $add_t_qualification=="" OR $add_t_contact=="" OR $add_t_staff=="" OR $add_t_gender=="")
	 {
		 echo "<script>alert('Some Field are missing....');</script>";
	 }
	 else
	 {
	
	 
	 $add_done = $ravi->add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender);
	 if($add_done==true)
	 {
		 echo "<script>window.location='index.php?teacher=teacher-information';</script>";
	 }
	 else
	 {
		 echo "<script>alert('unsuccess add teacher information');</script>";
	 }
 }
 }

?>


	<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
				
				<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Add Students form :</h4>
							</div>
							<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_fullname" placeholder="Full Name"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_address" placeholder="Teacher Current Address"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_email" placeholder="Email"> </div>

					</div>
				<div class="form-group"> <label for="address" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_username" placeholder="Username"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-9"> <input type="password" class="form-control" name="add_t_pass" placeholder="Password"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Father</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_father" placeholder="Father Name"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Mother</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_mother" placeholder="Mother Name"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_dob" placeholder="Date Of Birth"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_qualification" placeholder="Qualification"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_contact" Placeholder="Contact Number"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Staff Type</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_staff" placeholder="Staff Type"> </div>

					</div>
					<div class="form-group">


						<select id="selector1" class="form-control1" name="add_t_gender">
						   <option>Select Gender</option>
							<option value="Male">Male</option>
						   <option value="Female">Female</option>
							</select>
					</div>


					<div class="col-sm-offset-2"> 
						<input type="submit" class="btn btn-default" name="add_teacher_info" value ="Add Teacher Info">
						</div>
				</form>
							</div>
						</div>
					</div>
					
	
	</div>
	</div>
	</div>
<!--//forms-->  
      <div class="cal1">
          </div>
      
    <!--footer-->
    <div class="footer">
       <p>
        Design by | </a>SK Creation</p>
    </div>
        <!--//footer-->
  </div>
  <!-- Classie -->
    <script src="js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>