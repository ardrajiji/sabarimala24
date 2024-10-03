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
				<h3 class="title">Account</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <?php
			$qry="select * from adminaccount";
			$rs=mysql_query($qry);
		$qry2="select sum(amount) as amt from adminaccount";
			$rs4=mysql_query($qry2);
		$am=mysql_fetch_array($rs4);
		$amo=$am['amt'];
			$i=1;
			echo"<form method='post'>";
			echo "<table border=1 width='700' height='150' align='center'>
			
			
			<tr>
			<th>Date</th>
			<th>Amount</th>
			
			
			</tr>";
			while($rs1=mysql_fetch_array($rs))
			{
			echo "<tr>";
			
			echo "<td>".$rs1['date']."</td>";
			echo "<td>".$rs1['amount']."</td>";
			
			
				//echo "<td><input type='checkbox' name='check[$i]' value='".$rs1['vehi_no']."'/></td>";
			echo "</tr>";

			
			$i++;
			}
		
			echo"</table>";
			//echo"<input type='submit' name='approve' value='approve'/>";
			echo"</form>";/*
			if(isset($_POST['approve']))
			 {
				 if(isset($_POST['check']))
				  {
					  foreach($_POST['check'] as $value)
					  {
						 
						  $sql="update vechicle set status='approved' where vehi_no='$value'";
						  mysql_query($sql);
						  $sql1="update registration set status='approved' where vehi_no='$value'";
						  mysql_query($sql1);
						  echo"<script>alert('successfully approved')</script>";
					  }
				  }
			 }
			*/
			
			?>
          <br>
          <br>
         
           <table align="center"><tr><td>Total Amount</td><td><input type="text" value="<?php echo $amo;?>"</td></tr></table>
            
                </form>
         
    <!-- //contact -->
 
 
            
 
 
 <br>
 <br>
 
 <br>
 <br>
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