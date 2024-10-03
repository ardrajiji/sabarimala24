<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include("userhead.php");
?>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">
				<h3 class="title">LODGE</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                                     
  <?php
  if(isset($_GET['lodgename']))
  {
  $lname=$_GET['lodgename'];
  $amt=$_GET['amount'];
	 
	  
  }
  ?>
   
   <div>
    <td><label>Lodge</label></td>
    <td><input type="text" name="lodgename" value="<?php if(!empty($lname)){echo $lname;}else {echo "hi";}?>"/></td>
    <td><a href="choose.php">choose</a></td>
  </tr></div>
         <div>
          <tr>
			<td><label>Amount</label></td>
          	<td><input type="text" name="amt" value="<?php if(!empty($lname)){echo $amt;}else {echo "amt";}?>"/></td>
          </tr>
           </div>s
                
      
                  <div class="form-group">
                        <label class="form-label" id="nam" for="nam">name</label>
                        <input type="text" class="form-control" id="nam" name="nam" placeholder="enter name" tabindex="2" pattern="[A-Za-z]+" title="enter characters only" required>
                    </div>
                    
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <label class="form-label" id="phno" for="phno">phno</label>
                        <input type="number" class="form-control" id="phno" name="phno" placeholder="Enter phno" tabindex="3" pattern="[0-9]{10}"title="enter digits only" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="dt" for="dt">date</label>
                        
                         <input type="date" class="form-control" id="date" name="date" placeholder="Enter date" tabindex="9" required>
                    </div>
                    
                    
                      
 
                    
                    
                    
                    
                  <div class="form-group">
                        <label class="form-label" id="class" for="class">NumberofRoom</label>
                        <input type="text" class="form-control" id="numberofroom" name="numberofroom" placeholder="Enter number of room" tabindex="5" pattern="[0-9]+" title="enter digits only" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="NoofDay" for="nopersons">No.of.Day</label>
                        <input type="text" class="form-control" id="nopersons" name="noofday" placeholder="enter no of day" tabindex="6" pattern="[0-9]+"title="enter digits only" required>
                    </div>
                    
                      <tr>
     <td><label>Type_room</label></td>
     <td><label>AC&nbsp;</label>
	 <input  type="radio" name="rt" value="AC"/>
	 <label>NONAC</label> <input type="radio"name="rt" value="NONAC" /></td>
  </tr>
  <tr> 
  
        <tr>
    <br><br> <td><label>Type</label></td>
     <td><label>single&nbsp;</label>
	 <input  type="radio" name="type" value="single"/>
	 <label>double</label> <input type="radio"name="type" value="double" /></td>
  </tr>
  <tr>        
  
  
  
  
   
                    
                    
                    
                   
                  <input type="submit" name="submit" value="submit">
                  <font color="#FF0000">Note:AC Room additional Rs.100 pay</font>  
                </form>
          </div>
        </div>
    </div>
    
    
    
       
  
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- //contact -->
 
 
<?php
if(isset($_REQUEST['submit']))
{
$cuname=$_REQUEST['nam'];
$cuphno=$_REQUEST['phno'];
$bdate=$_REQUEST['date'];
$start=$_REQUEST['lodgename'];
$bed=$_REQUEST['numberofroom'];
$day=$_REQUEST['noofday'];
$rtype=$_REQUEST['rt'];
$type=$_REQUEST['type'];
//$zone=$_REQUEST['zone'];
//$bdate=$bdate.$zone;
$totamt=$amt*$bed*$day;
	session_start();
	$_SESSION['una']=$cuname;
	$_SESSION['lamount']=$totamt;
$qry="select count(*) as cnt from lodgebooking where date1='$bdate' and phno='$cuphno'";
$rs=mysql_query($qry);
$res=mysql_fetch_array($rs);
if($res['cnt']>0)
{
	echo"<script>alert('Already Booked');</script>";
}
else
{
$qry="insert into lodgebooking(nam,phno,date1,lodgename,numberofroom,noofday,rt,type,amount,status) values('$cuname','$cuphno','$bdate','$start','$bed','$day','$rtype','$type','$totamt','not approved')";
mysql_query($qry);

	echo"<script>alert('Successfully Booked');</script>";
}
	
header("location:first.php");	
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