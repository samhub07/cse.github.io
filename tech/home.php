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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
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
                <li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    
		<!-- //header-ends -->
		<!-- main content start-->
				<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left " >
							<h5>CSE</h5>
							 <a href="home.php"><h4>Teacher</h4>
						</div>
						<div class="stats-right">
							<label> 7</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>CSE</h5>
							 <a href="lab.php"><h4>Lab</h4>
						</div>
						<div class="stats-right">
							<label>4</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>CSE</h5>
							 <a href="classinfo.php"><h4>Classroom</h4>
						</div>
						<div class="stats-right">
							<label>4</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
<div class="row">
					<div class="col-md-4 stats-info widget">
						<div class="stats-title">
							<h4 class="title">CSE Events.	</h4>
						</div>
						<div class="stats-body">
							<ul class="list-unstyled">
								<li>
1.Paper Presentation			</li>
								<li>
2.Poster Presentation 		</li>
								<li>
3.Project Presentation 		</li>
								<li>4.Blind 'C' 
								</li>
								<li>5.Technic Quiz
								</li>
								<li class="last">6.Gaming
								</li> 
							</ul>
						</div>
					</div>
				
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>Teachers</th>
									<th>Contact No</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td> Mr.Najimoddin Khairoddin shaikh sir(HOD) </td>
									<td>9403560396</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td> Mr.Swapnil Sunil Shendage sir.</td>
									<td>9506610673</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td> Mr.Sanjeevkumar Dhanukumar Angadi sir</td>
									<td>9503746717</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Mr.Aman Bhimrao Kamble sir</td>
									<td>9146891811</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td> Ms.Trupti Diliprao Deshmukh MADAM.</td>
									<td>9145920005</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Ms.Rohini p Rankhamb MADAM. </td>
									<td>91759000773</td>
										</tr>
							</tbody>
						</table>
					</div>
					
					
					<div class="clearfix"> </div>
				</div>
				
			<div class="row calender widget-shadow">
					<h4 class="title">Calender</h4>
<div class="cal1">
          </div>		
		</div>
				<div class="clearfix"> </div>		
		
      
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