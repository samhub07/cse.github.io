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
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<link rel = "stylesheet" type = "text/css" media = "print" href = "mystyle.css">
<!--//Metis Menu -->
<style type = "text/css">
   <!--
      @media screen {
         p.bodyText {font-family:verdana, arial, sans-serif;}
      }

      @media print {
         p.bodyText {font-family:georgia, times, serif;}
      }
      @media screen, print {
         p.bodyText {font-size:10pt}
      }
   -->
</style>
</head> 
<body >
    <!-- //header-ends -->
    <!-- main content start-->
	DEPARTMENT OF ______________ENGINEERING<br>
<br>AY : 2019-20	
<br>Teaching Plan	
<br>Class:
<br>Semester: I/II	 
<br>Date:
<br>Course: 
<br>Teaching Scheme:	Examination scheme:
<br>Lectures: 	ISE :
<br>Practical:	ESE:
<br>Tutorial:	ICA:


  <section id="section-4">
									<div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
          <h3 class="title1">Teaching Plan</h3>
          <div class="panel-body widget-shadow">
        <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
          
            <table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Subject Name</th> <th>Class Name</th> <th>Topic Coveredd</th> <th>Teaching Method</th><th>Date</th></tr> </thead> <tbody> 

                                      <?php 
                    
                      $sub_info_admins = $ravi->techplan_info();
                                    $sub_sn = 1;
                      while($display_sub_admin = $sub_info_admins->fetch_assoc())
                      {
                        ?>          <tr> 
                                      <th scope="row"><?php echo $sub_sn; ?></th> 
                                      <td><?php echo ucfirst($display_sub_admin['sub_name']); ?></td> 
                                      <td><?php echo $display_sub_admin['c']; ?></td>

                                      <td><?php echo $display_sub_admin['tc']; ?></td>
 <td><?php echo $display_sub_admin['tm']; ?></td>
 <td><?php echo $display_sub_admin['date']; ?></td>

                                                                        
                                    </tr>
                                    <?php
                    $sub_sn++;  }
                      
                      
                      ?>

           </tbody>
		   
         </table>
         
          </div>
          </div>
          </div>
          </div>
          </div>
		     <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
	<br>Text Books: 
<br>T1: <br>
T2:
<br>Reference Books:<br>
R1: 
<br>R2: 
<br>R3: 



<br>Course Coordinator                  				HOD/ Program Coordinator                       
<br>

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
</body>
</html>