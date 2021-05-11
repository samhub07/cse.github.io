<?php 
include "../setting/config.php";
session_start();
if(!$_SESSION['meadmin'])
{
  header("location:index.php");
}
else
{
  $adminname = $_SESSION['meadmin'];
  $meadmin_username = $ravi->meadmin_username($adminname);
  $meadmin_username_display = $meadmin_username->fetch_assoc();
  $meadmin_info= $meadmin_username_display['admin_username']; 
  $t_staff_type = $meadmin_username_display['t_staff_type'];
  $info = $ravi->teacher_info($adminname,$t_staff_type);
  $info_display = $info->fetch_assoc();
  
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
    <link rel="stylesheet" href="./css/form.css">
      <link rel="stylesheet" href="css/home.css">
  
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
              <a href="index.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-cogs nav_icon"></i>Class <span class="nav-badge">8</span> <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="techinfo.php">Class Information</a>
                </li>
                <li>
                  <a href="techadd.php">Add Class</a>
                </li>
                <li>
                  <a href="edittech.php">Delete class </a>
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
              <a href="#"><i class="fa fa-envelope nav_icon"></i>Students Marks<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="readd.php">Add Result</a>
                </li>
                <li>
                  <a href="reshow.php">Results Info</a>
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
                    <p><?php echo $info_display['t_fullname']; ?></p>
                    <span>Administrator</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="set.php"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //header-ends -->
	
	<div id="page-wrapper">
      <div class="main-page">
	   <h3 class="title1">Results Information</h3>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
  
      <li ><a  href="readd.php">Classes</a>
       
      </li>
         <li><a  href="restud.php">Students	 </a>
       
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="res.php">Results
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reaction.php">Update</a></li>
        </ul>
      </li>
  </div>
</nav>


						

    <!-- main content start-->
         <div class="forms">
         
          <div class="form-grids row widget-shadow" data-example-id="basic-forms">
          <div class="form-title">
      
    <div class="main">        
	<form action="" method="post">
           
            <legend>Enter Marks:</legend>

                <?php
                    include("init.php");
                
                    $select_class_query="SELECT `name` from `class`";
                    $class_result=mysqli_query($conn,$select_class_query);
                    //select class
                    echo '<select name="class_name">';
                    echo '<option selected disabled>Select Class</option>';
                    
                        while($row = mysqli_fetch_array($class_result)) {
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';                      
                ?>

                <input type="text" name="rno" placeholder="Roll No">
                <input type="text" name="p1" id="" placeholder="Paper 1">
                <input type="text" name="p2" id="" placeholder="Paper 2">
                <input type="text" name="p3" id="" placeholder="Paper 3">
                <input type="text" name="p4" id="" placeholder="Paper 4">
                <input type="text" name="p5" id="" placeholder="Paper 5">
                <input type="submit" value="Submit">
            </fieldset>
        </form>

    </div>

<?php
    if(isset($_POST['rno'],$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],$_POST['p5']))
    {
        $rno=$_POST['rno'];
        if(!isset($_POST['class_name']))
            $class_name=null;
        else
            $class_name=$_POST['class_name'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(int)$_POST['p3'];
        $p4=(int)$_POST['p4'];
        $p5=(int)$_POST['p5'];

        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;

        // validation
        if (empty($class_name) or empty($rno) or $p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0 ) {
            if(empty($class_name))
                echo '<p class="error">Please select class</p>';
            if(empty($rno))
                echo '<p class="error">Please enter roll number</p>';
            if(preg_match("/[a-z]/i",$rno))
                echo '<p class="error">Please enter valid roll number</p>';
            if(preg_match("/[a-z]/i",$marks))
                echo '<p class="error">Please enter valid marks</p>';
            if($p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0)
                echo '<p class="error">Please enter valid marks</p>';
            exit();
        }

        $name=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rno' and `class_name`='$class_name'");
        while($row = mysqli_fetch_array($name)) {
            $display=$row['name'];
            echo $display;
         }

        $sql="INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES ('$display', '$rno', '$class_name', '$p1', '$p2', '$p3', '$p4', '$p5', '$marks', '$percentage')";
        $sql=mysqli_query($conn,$sql);

        if (!$sql) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }
?>       
          </div>
          </div>
          </div>
          </div>
          </div>
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