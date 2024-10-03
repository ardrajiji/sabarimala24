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
				<h3 class="title">Pooja</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                    <div class="form-group">
                        <label class="form-label" id="class" for="class"></label>
                        <td><label>Pooja Type</label></td>
    
                      
                      <td>
			<select name="poojaname" id="poojaname" onChange="msg()" class="form-control">>
                 <option>--Select Pooja--</option><?php
		$qry=mysql_query("select poojaname from poojabook");
		//echo"<select name='deptname'>";
		//echo"<option>--Select Department--</option>";
		if(mysql_num_rows($qry))
		{
			while($res=mysql_fetch_array($qry))
			{
				$selected="";
								if(isset($_GET['snm'])){
									if($_GET['snm']==$res['poojaname']){
								      $selected="selected='selected'";
									}
									
								}
				echo '<option value="'.$res['poojaname'].'">'.$res['poojaname'].
						'</option>';
			}
		}
		echo"</select>";
			//	$dep=$_REQUEST["deptname"];
				
		?></td>
                       
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="ammount" for="ammount">Amount</label>
                        <td><div id="amt"></div></td>
                    </div>
                  <input type="submit" name="submit" value="ADD">
                </form>
                <script>
			function msg()
			{
				var a=document.getElementById("poojaname").value;
				
//                alert(progId)
                obj = (window.XMLHttpRequest) ? new XMLHttpRequest() : ((window.ActiveXObject) ? new ActiveXObject(Microoft.XMLHTTP) : null);

                if (obj != null)
                {
                    obj.onreadystatechange = function ()
                    {
                        if (obj.readyState == 4 && obj.status == 200)
                        {
                            document.getElementById('amt').innerHTML = obj.responseText;
                        }
                    };
                    obj.open('post', 'ajax/Viewpooja.php?snm='+ a, true);
                    obj.send(null);
                }
            


//				window.location="ajax/ViewNurse.php?snm="+a;
//				alert(a);
			}
			
//			function msg1()
//			{
//				var a=document.getElementById("deptname").value;
//				var b=document.getElementById("vnm").value;
//			//	window.location="adminaddjobnurse.php?snm="+a+"&vty="+b;
//				//alert();
//			}
			
			</script>
          </div>
        </div>
    </div>
    <!-- //contact -->
 
 
 
   <?php
			if(isset($_REQUEST["submit"]))
			{
			
			
			
		session_start();
				$un=$_SESSION['UserName'];
	$dclass=$_REQUEST['poojaname'];
	$damount=$_REQUEST['vnm'];
				$_SESSION['lamount']=$damount;
	/*			$qry="select count(*) as cnt from darshanam where class='$dclass'";
	$rs=mysql_query($qry);
	$res=mysql_fetch_array($rs);
	if($res['cnt']>=1)
	{
		echo"<script>alert('Already Registered');</script>";
	}
	else*/
	{
					$qry="insert into poojabooking(poojaname,amount,username,status) values('$dclass','$damount','$un','not approved')";
					
					mysql_query($qry);	
					
					echo"<script>alert('Booked Successfully');</script>";
					header("location:first.php");
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