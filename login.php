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
                                <li class="mr-3"></li>
								<li></li>
                            </div>
                         </div>
                    </div>
               </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
               
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                         
                           <li class="nav-item dropdown mr-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                           about
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="temple.php">temple</a>
                                <a class="dropdown-item" href="aboutlord.php">lordayappan</a>
                                
                                
                                
                                 <a class="dropdown-item" href="aboutfesti.php">festivals</a>
                                <a class="dropdown-item" href="aboutpoojatiming.php">poojatiming</a>
                                   <a class="dropdown-item" href="aboutreach1.php">howtoreach</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="gallery.html">gallery</a>
                            </div>
                        </li>
                       
                         <li class="nav-item dropdown mr-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                           Staff
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="otherstaffreg.php">Others</a>
                                
                                <a class="dropdown-item" href="staffregistration.php">Driver</a> 
                                
                                 
                            </div>
                        </li>
                        
                      
                        <li class="nav-item">
                            <a class="nav-link" href="userreg.php">registration</a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="login.php">login</a>
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
           
        </ol>
    </nav>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Login</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
				
	  </div>
        <div class="row py-md-5 py-sm-3">
            <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                    <div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">UserName</label>
                        <input type="text" class="form-control" id="name" name="UserName" placeholder="Your name" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="emailLabel" for="email">password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password" tabindex="2">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="serv_bottom btn btn-border btn-lg w-100" name="sub">Submit</button>
                    </div>
                </form>
            </div>
          
        </div>
    </div>
    <!-- //contact -->
<?php
session_start();
if(isset($_REQUEST['sub']))
{
	$uname=$_REQUEST['UserName'];
	$password=$_REQUEST['password'];
	
		$_SESSION['username']=$uname;
	$qry="select count(*) as cnt from login where username='$uname' and password='$password'";
	$rs=mysql_query($qry);
	$res=mysql_fetch_array($rs);
	$_SESSION['UserName']=$uname;
	$_SESSION['password']=$password;
	$po=mysql_query("select status from registration where username='$uname'");
	$ds=mysql_fetch_array($po);
	$st=$ds['status'];
	$qry1="select usertype from login where username='$uname' and password='$password'";
	$rs1=mysql_query($qry1);
	$res1=mysql_fetch_array($rs1);
	if($res['cnt']>0&&$res1['usertype']=='user')
	{  
		$da=date('d');
		echo $da;
		/*/$cd="select day($da)";
		echo $cd;
		$sd=mysql_query($cd);
		$vv=mysql_fetch_array($sd);
		$cda=$vv[0];
		echo $cda."ahi";*/
		$bc="select account from signup where username='$uname'";
		$zz=mysql_query($bc);
		$yy=mysql_fetch_array($zz);
		$_SESSION['uaccount']=$yy['account'];
		$vc="select day(date) from bookpark where username='$uname'";
		$mn=mysql_query($vc);
		
		$bn=mysql_fetch_array($mn);
		$bd=$bn[0];
		if($bd<$da)
		{
			$dc="delete from bookpark where username='$uname'";
			$rew=mysql_query($dc);
		}
		echo"login";
		
	header("Location:userhome.php");
	}
	else if($res['cnt']>0&&$res1['usertype']=='driver'&&$st=='approved')
	{
		echo"staff";
		header("Location:staffhome.php");
	}
	else if($res['cnt']>0&&$res1['usertype']=='otherstaff')
	{
		echo"otherstaff";
		header("Location:otherstaffhome.php");
	}
	else if($res['cnt']>0&&$res1['usertype']=='admin')
	{
		echo"admin";
		header("Location:adminhome.php");
	}
	else
	{
	echo "<script>alert('invalid')</script>";
	}
}
?>
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
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required>
						<button class="btn1"><i class="fa fa-envelope" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<ul class="social_section_1info">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-g"></i></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></i></a></li>
					</ul>
			</div>
		</div>
		<div class="row mt-md-5">
			<div class="col-md-4 phn_w3l">
				<h6 class="text-btm text-white">Phone : +2534894364</h6>
			</div>
			<div class="col-md-4 fax_w3l">
				<h6 class="text-btm text-white">Fax : +2534894364</h6>
			</div>
			<div class="col-md-4 ema-w3l">
				<h6 class="text-btm text-white">Email : <a href="mailto:info@example.com">info@example.com</a></h6>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

    <div class="cpy-right text-center  py-3">
        <p class="text-white">© 2018 Expedition. All rights reserved | Design by
            <a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
        </p>
    </div>
    <!-- //footer -->

    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">

                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center text-secondary">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-rname" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required>
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required>
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required>
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Register">
                        </div>
                    </form>
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