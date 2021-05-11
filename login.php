<?php 
 include "/setting/config.php";
if(isset($_POST['admin_signin']))
{
	
	$admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_password']);
	if($admin_username=="" AND $admin_password=="")
	{
		echo "<script>alert('Enter Your Username & Password');</script>";
	}
	else
	{
		$melogin = $ravi->meadmin_check($admin_username,$admin_password);
			if($melogin==1)
			{
				session_start();
				$_SESSION['meadmin'] = 	$admin_username;
				
				$_SESSION['sval']='1';
				echo "hi";
				
				header("location:admin/index.php");
			
			}
			
		
			else
			{
				echo "<script>alert('Email Or Password does not matched');</script>";
			}
	
	}

	
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
<title>MITCORER Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//css/fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/css/icon-font.min.css" type='text/css' />



 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
   
</head> 
<body>
<header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.html">MITCORER</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">About</a></li>
                          
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="index.html" class="drop-text">Events</a></li>
                                    <li><a href="index.html" class="drop-text">What We Do?</a></li>
                                    <li><a href="index.html" class="drop-text">Popular Courses</a></li>
                                    <li><a href="index.html" class="drop-text">Statistics</a></li>
                                    <li><a href="index.html" class="drop-text">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- inner banner -->
  <div class="main-w3pvt mian-content-wthree " id="home">
        <div class="container py-xl-5 py-lg-3">

								<!--/login-->
									         <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
       
													<div class="error-top">
													    <div class="login">
																<div class="buttons login">
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
																				<div class="clearfix"></div>
																			</ul>
																		</div>
											<form method="post">
					<input type="text" class="text" name="admin_username" placeholder="Username" value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_username']; } ?>">
					<input type="password" placeholder="Password" name="admin_password" value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_password']; } ?>">
				<div class="submit"><input type="submit" value="Login" name="admin_signin"></div>
									<div class="clearfix"></div>
																		
																
																	</form>				
														</div>

														
													</div>
													
													
											
						

</div>
</div>						<!--//login-->
									<!--/404-->
<!--js -->
<script src="js/js/jquery.nicescroll.js"></script>
<script src="js/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>