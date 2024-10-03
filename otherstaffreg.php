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
                <h1>
                    <a class="navbar-brand" href="adminhome.php">
                        thatwamasi
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="about.html">about</a>
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
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">
				<h3 class="title">STAFFREGISTRATION</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
      
        <div class="col-md-6">
                
                
                 <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label" id="firstname" for="firstname">firstname</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname" tabindex="1"  pattern="[A-Za-z]+" title="enter characters only" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="lastname" for="lastname">lastname</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="enter lastname" tabindex="2" pattern="[A-Za-z]+" title="enter characters only" required>
                        
                        
                    <div class="form-group">
                        <label class="form-label" id="age" for="age">age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Enter age" tabindex="3" title="enter digits only" required>
                    </div>
                    
                    
                     
                     <div>
                        <label  id="gender" for="gender">gender </label><br>
                          
  
  <input type="radio" name="gender" value="gender"> Male<br>
  <input type="radio" name="gender" value=" gender">  Female

                        
                        
                       
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <label class="form-label" id="place" for="place">place</label>
                        <input type="text" class="form-control" id="place" name="place" placeholder="enter place" tabindex="2" pattern="[A-Za-z]+" title="enter characters only" required>
                        
                        
                        
                        
                        
                    </div>
                     
                    <div class="form-group">
                        <label class="form-label" id="email" for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="enter email" tabindex="2">
                        
                        
                        
                        
                        
                    </div>
                    
                     
                    <div class="form-group">
                        <label class="form-label" id="mobileno" for="mobileno">mobileno</label>
                        <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="enter mobileno" tabindex="2" maxlength="10" pattern="[0-9]+" title="enter 10 digits only" required>
                        
                        
                        
                        
                        
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="username" for="username">Aadhar Number</label>
                        <input type="text" class="form-control" id="aadar" name="aadar" placeholder="enter aadar" tabindex="2" maxlength="12" pattern="[0-9]+" title="enter 12 digits only" required>
                    
                    
                    
                         
                     
                    <div class="form-group">
                        <label class="form-label" id="username" for="username">username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="enter username" tabindex="2" required>
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                         
                     
                    <div class="form-group">
                        <label class="form-label" id="password" for="password">password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="enter password" tabindex="2" required>
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <input type="submit" name="submit" value="button">
                </form>
                
                
          </div>
        </div>
    </div>
    <!-- //contact -->
 
 
 
                 <?php
if(isset($_REQUEST['submit']))
{
	$firstname=$_REQUEST['fname'];
	$lastname=$_REQUEST['lname'];
	$age=$_REQUEST['age'];
	$gender=$_REQUEST['gender'];
	$place=$_REQUEST['place'];
	$emailid=$_REQUEST['email'];
	$mobileno=$_REQUEST['mobileno'];
	$ad=$_REQUEST['aadar'];
	
	$username=$_REQUEST['username'];
	$pasword=$_REQUEST['password'];
//	if(move_uploaded_file($file_path,'images/'.$file_name))


/*	$qry="select count(*) as cnt from registration where fname='$firstname' and phoneno='$mobileno'";
	$rs=mysql_query($qry);
	$res=mysql_fetch_array($rs);

	if($res['cnt']>0)
	{
	echo"<script>alert('Already Registered');</script>";
	}
	
	else*/
	{

	$qry2="insert into otherstaff(fname,lname,age,gender,place,email,phoneno,aadar,status) values('$firstname','$lastname','$age','$gender','$place','$emailid','$mobileno','$ad','not approved')";
	mysql_query($qry2);
	
	$usertype="staff";
	
	$q="insert into login(username,password,usertype)values('$username','$pasword','$usertype')";
	
	mysql_query($q);
	echo"<script>alert('Saved');</script>";
	}
}
?>
            
            
 
 
 
 
   <!--footer -->

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
    </section>
    </footer>
</body>
</html>
