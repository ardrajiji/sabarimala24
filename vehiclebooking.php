<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Expedition A Travel Category Bootstrap Responsive website Template | Contact :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Expedition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
<?php
include_once"connect.php";
?>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
			  <div class="top-head py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 callnumber text-left">
                            </div>
                            <div class="col-lg-6 callnumber text-right">
                                <li class="mr-3">Australia : +5687567890</li>
								<li>Newyork : +4584567890</li>
                            </div>
                         </div>
                    </div>
               </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        Expedition
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="about.html">about</a>
                        </li>
                       
                       
                       
                        <li class="nav-item dropdown mr-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                               Booking
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="darshanam.php">Darshanam</a>
                                <a class="dropdown-item" href="lodge.php">Lodge</a>
                                <a class="dropdown-item" href="vehicle.php">Vehicle</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="parking.php">Parking</a>
                            </div>
                            
                        </li>
                        
                        
                       
                       
                       
                       
                        
                  
                        
                        
                        
                        
                           
                         <li class="nav-item dropdown mr-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                        statusview
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="darshanam.php">Darshanam</a>
                                 <a class="dropdown-item" href="vehicle.php">Vehicle</a>
                                <a class="dropdown-item" href="lodge.php">Lodge</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="parking.php">Parking</a>
                            </div>
                        </li>
                        
                       
                       
                       
                       
                       
                       
                       
                       
                       
                          
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
    </div>
    <!-- //banner -->
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
         
            </li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">VEHICLE
		  <h3 class="title">BOOKING</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3"><span class="form-group">
    
      </span>
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                
                <div class="form-group">
                        <label class="form-label" id="vehicleno" for="vehicleno">vehicleno</label>
                        
                         <input type="text" class="form-control" id="vehicleno" name="vehicleno" placeholder="Enter vehicleno " tabindex="12"  value="<?php if(!empty($_GET["Vechi_name"])) {echo $_GET["Vechi_name"];} ?>" >
                         
					
                    </div>
   
   
    <?php
	 session_start();
	 $_SESSION["vn"]="";
	$vno="";
	$vnam="";
  if(isset($_REQUEST['lname']))
  {
  $lname=$_GET['lname'];
  }
  if(!empty($_GET["vno"]))
  {
	 $vno= $_GET["vno"];
	 $vname= $_GET["Vechi_name"];
	 
	 $_SESSION["vn"]=$vno;
	 
  }
  ?>
  <td><label>vechicle No</label></td>
  <!--<td><input type="text" name="vechitype" value=""/></td>-->
  
    <td><a href="choose1.php">choose</a></td>
      
                  <div class="form-group">
                        <label class="form-label" id="name" for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="enter name" tabindex="2">
                    </div>
                    
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <label class="form-label" id="phno" for="phno">phno</label>
                        <input type="number" class="form-control" id="phno" name="phno" placeholder="Enter phno" tabindex="3">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="date" for="date">date</label>
                        
                         <input type="datetime-local" class="form-control" id="date" name="date" placeholder="Enter date" tabindex="9"><select name="zone"><option>AM</option><option>PM</option></select>
                    </div>
                      <div class="form-group">
                        <label class="form-label" id="startlocation" for="startlocation">startlocation</label>
                        
                         <input type="text" class="form-control" id="startlocation" name="startlocation" placeholder="Enter start location" tabindex="10">
                    </div>
                    
                       <div class="form-group">
                        <label class="form-label" id="endlocation" for="endlocation">endlocation</label>
                        
                         <input type="text" class="form-control" id="endlocation" name="endlocation" placeholder="Enter endlocation " tabindex="11">
                    </div>
                     <div class="form-group">
                        <label class="form-label" id="no of person" for="no of person">noofperson</label>
                        
                         <input type="text" class="form-control" id="no of person" name="noofperson" placeholder="Enter no of person " tabindex="12">
                    </div>
                      <div class="form-group">
                        <label class="form-label" id="vehiclename" for="vehiclename">vehiclename</label>
                        
                         <input type="text" class="form-control" id="vehiclename" name="vehiclename" placeholder="Enter vehiclename " tabindex="15">
                    </div>
                    
                     
   
     <input type="submit" name="submit" value="submit">
               
               <?php
if(isset($_REQUEST['submit']))
{
$cuname=$_REQUEST['name'];
$cuphno=$_REQUEST['phno'];
$bdate=$_REQUEST['date'];
$start=$_REQUEST['startlocation'];
$end=$_REQUEST['endlocation'];
 $noperson=$_REQUEST['noofperson'];
  $vechiname=$_REQUEST['vehiclename'];
 $vechitype=$_REQUEST['vehicleno'];
 $zone=$_REQUEST['zone'];
$bdate=$bdate.$zone;

	 $vno=  $_SESSION["vn"];
	
 $qry1="select * from vechicle where vehi_no='$vechitype'";

$rs1=mysql_query($qry1);
$res1=mysql_fetch_array($rs1);
  
$qry="select count(*) as cnt from vehiclebooking where date1='$bdate'";
$rs=mysql_query($qry);
$res=mysql_fetch_array($rs);



if($res1["seat_capacity"]<$noperson)
{
	echo"<script>alert('small vehicle');</script>";
}

else if($res['cnt']>0)
{
echo"<script>alert('Already Booked');</script>";
}
else
{
$qry="insert into vehiclebooking(name,phno,date1,startlocation,endlocation,noofperson,vehiclename,vehicleno) values('$cuname','$cuphno','$bdate','$start','$end','$noperson','$vechiname','$vechitype')";


mysql_query($qry);
echo"<script>alert('Saved');</script>";
	header("location:first.php");
}
}

?>
 
                </form>
          </div>
        </div>
    </div>
    
   
   
   			
   
   
   
   
   
   
   
   
   
   
                    
                    
                    
                    
               <!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-md-4">
		<div class="row footer-top">
			<div class="col-lg-4 col-md-6 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus.
						Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>
					
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Useful Links</h3>
				</div>
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Subscribe</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- contact validation js -->
    <script src="js/form-validation.js"></script>
   
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>