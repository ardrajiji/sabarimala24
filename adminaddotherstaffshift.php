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
				<h3 class="title">Other Shift allotment</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                   
                   
      <tr>
   <br><br> <td><label>Staff_name</label></td>
    <td><select name="stName" id="stName" onChange="msg()" style="display: block;

width: 100%;

padding: 0.375rem 0.75rem;

font-size: 1rem;

line-height: 1.5;

color: #495057;

background-color: #fff;

background-clip: padding-box;

border: 1px solid #ced4da;

border-radius: 0.25rem;

transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
<option>--Select Name--</option><?php
	$qry="select fname from otherstaff";
	$rs=mysql_query($qry);
	while($res=mysql_fetch_array($rs))
	{
		$selected="";
								if(isset($_GET['snm'])){
									if($_GET['snm']==$res['stName']){
								      $selected="selected='selected'";
									}
									
								}
		echo'<option value='.$res['fname'].'>'.$res['fname'].'</option>';
	}
	
    ?></select></td>
  </tr>
  <tr>
  	<td>
  		Shift details
  	</td>
  	<td>
			<div id="sdetail"></div></td>
  </tr>
  <tr>
    <td><label>Shift Type</label></td>
    <td><select name="shifttype" style="display: block;

width: 100%;

padding: 0.375rem 0.75rem;

font-size: 1rem;

line-height: 1.5;

color: #495057;

background-color: #fff;

background-clip: padding-box;

border: 1px solid #ced4da;

border-radius: 0.25rem;

transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
	<?php
	$qry="select shifttype from shift_details";
	$rs=mysql_query($qry);
	while($res=mysql_fetch_array($rs))
	{
		echo'<option value='.$res['shifttype'].'>'.$res['shifttype'].'</option>';
	}
	
    ?></select></td>
  </tr>
  <div class="form-group">
                        <label class="form-label" id="class" for="date_allot">Shift date</label>
                        <input type="date" class="form-control" id="lodge_name" name="date_allot" placeholder="Enter date_allot" tabindex="1">
                    </div>
                   
     
                  <input type="submit" name="submit" value="submit">
                </form>
</table>
</center>
<script>
			function msg()
			{
				var a=document.getElementById("stName").value;
				
//                alert(progId)
                obj = (window.XMLHttpRequest) ? new XMLHttpRequest() : ((window.ActiveXObject) ? new ActiveXObject(Microoft.XMLHTTP) : null);

                if (obj != null)
                {
                    obj.onreadystatechange = function ()
                    {
                        if (obj.readyState == 4 && obj.status == 200)
                        {
                            document.getElementById('sdetail').innerHTML = obj.responseText;
                        }
                    };
                    obj.open('post', 'ajax/viewotherstaffallot.php?snm='+ a, true);
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
</form>			
		 
            <?php
			
if(isset($_REQUEST['submit']))
{
	
	$type=$_REQUEST['shifttype'];
	$stname=$_REQUEST['stName'];
	$sdate=$_REQUEST['date_allot'];
	$qry="insert into otherstaff_allot(staffname,shifttype,date_allot) values('$stname','$type','$sdate')";
	 
	mysql_query($qry);
	
	 
	echo"<script>alert('Saved');</script>";
	
}
?>
     </div>
     </div></div></div>    
               
          </div>
        </div>
    </div>
    <!-- //contact -->
 
 
            
 
 
 
 
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