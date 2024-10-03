<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include("adminhead.php");
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
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label" id="class" for="lodgename">lodgename</label>
                        <input type="text" class="form-control" id="lodge_name" name="lodge_name" placeholder="Enter lodge name" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="place" for="place">location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="enter location" tabindex="2">
                    </div>
                    
                      <div>
                        <label  id="type_room" for="type_room">type_room</label><br>
                          
  
  <input type="radio" name="type_room" value="Ac"> AC<br>
  <input type="radio" name="type_room" value="Non Ac"> Non Ac

                        
                        
                       
                    </div>
                    
                    
                     <div>
                        <label  id="type" for="type">type </label><br>
                          
  
  <input type="radio" name="type" value="type"> single<br>
  <input type="radio" name="type" value=" type">  double

                        
                        
                       
                    </div>
                    
                    
                    
                    
                    
                      <div class="form-group">
                        <label class="form-label" id="number_of_room" for="  number_of_room">Number of room </label>
                        <input type="text" class="form-control" id="number_of_room" name="number_of_room" placeholder="enter number of room" tabindex="3">
                    </div>
                    
                    
                    
                    
                    
                      
                      <div class="form-group">
                        <label class="form-label" id="number of room" for="number of room">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="enter amount" tabindex="4">
                    </div>
                    
                    <tr>
                    <td>Images</td>
                    	<td>
                    		<input type="file" name="i">
                    	</td>
                    </tr>
                    <div class="form-group">
                        <label class="form-label" id="number of room" for="number of room">rating</label>
                        <input type="text" class="form-control" id="amount" name="rating" placeholder="enter rating" tabindex="4">
                    </div>
                  <input type="submit" name="submit" value="submit">
                </form>
          </div>
        </div>
    </div>
    <!-- //contact -->
 
 
  <?php
            if(isset($_REQUEST['submit']))
{
	
	$loadgname=$_REQUEST['lodge_name'];
	$location=$_REQUEST['location'];
	$roomtype=$_REQUEST['type_room'];
	$roombed=$_REQUEST['type'];
	$noroom=$_REQUEST['number_of_room'];
	$amount=$_REQUEST['amount'];
	$b=$_FILES['i'];
	$file_name=$b['name'];
	$file_type=$b['type'];
	$file_size=$b['size'];
	$file_path=$b['tmp_name'];
	$rat=$_REQUEST['rating'];
	if(move_uploaded_file($file_path,'images/'.$file_name))
	$y="insert into lodge(lodge_name,location,type_room,type,number_of_room,amount,image,rating) values('$loadgname','$location','$roomtype','$roombed','$noroom','$amount','$file_name','$rat')";
	mysql_query($y);
	
echo"<script>alert('Saved');</script>";
	
}
$post=array();  
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