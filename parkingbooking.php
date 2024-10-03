<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

    
    <?php
include_once"connect.php";
include_once"userhead.php";
	session_start();
$vn=$_REQUEST['id'];
$vnum=$_REQUEST['vn'];
$vamt=$_REQUEST['vamt'];
	/*$vn=$_SESSION['vname'];
	$vnum=$_SESSION['vnum'];
	$vamt=$_SESSION['vamt'];*/
?>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Booking</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
            
                    <div class="form-group">
                        <label class="form-label" id="name" for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="enter name" tabindex="2">
                    </div>
                    
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <label class="form-label" id="phno" for="phoneno">phno</label>
                        <input type="number" class="form-control" id="phoneno" name="phoneno" placeholder="Enter phoneno" tabindex="3">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="date" for="date">date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="enter date" tabindex="4">
                    </div>
                    
                     <div class="form-group">
                        <label class="form-label" id="vnumber" for="vnumber">vehicleAmount</label>
                        <input type="text" class="form-control" id="vnumber" name="vamt" value="<?php echo $vamt?>">
                    </div>
                        <div class="form-group">
                        <label class="form-label" id="vnumber" for="vnumber">vehiclenumber</label>
                        <input type="text" class="form-control" id="vnumber" name="vnumber" value="<?php echo $vnum?>">
                    </div>
                    
                    
                    <td><label>vechicle type</label></td>
    <td><input type="text" class="form-control" id="vnumber" name="vechi_type"  value="<?php echo $vn?>"></td>
  </tr>
                    <td><label>Driver Name</label></td>
    <td><select name="dname" id="fname" onChange="msg()" style="display: block;

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
	$qry="select fname from registration";
	$rs=mysql_query($qry);
	while($res=mysql_fetch_array($rs))
	{
		$selected="";
								if(isset($_GET['snm'])){
									if($_GET['snm']==$res['fname']){
								      $selected="selected='selected'";
									}
									
								}
		echo'<option value='.$res['fname'].'>'.$res['fname'].'</option>';
	}
	
    ?></select></td>
  </tr>
                    <div class="form-group">
                        <label class="form-label" id="lic" for="noofdays">Licence Number</label>
                        
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="noofdays" for="noofdays">Start Location</label>
                        <input type="text" class="form-control" id="noofdays" name="sl" placeholder="enter startlocation" tabindex="6">
                        <div class="form-group">
                        <label class="form-label" id="noofdays" for="noofdays">End location</label>
                        <input type="text" class="form-control" id="noofdays" name="el" placeholder="enter Endlocation" tabindex="6">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="noofdays" for="noofdays">Number Of Persons</label>
                        <input type="text" class="form-control" id="noofdays" name="nop" placeholder="enter number" tabindex="6">
                    </div>
                    </div>
                     <div class="form-group">
                        <label class="form-label" id="noofdays" for="noofdays">noofdays</label>
                        <input type="text" class="form-control" id="noofdays" name="noofdays" placeholder="enter noofdays" tabindex="6">
                    </div>
                   
                  <input type="submit" name="submit" value="submit">
                </form>
          </div>
        </div>
    </div>
    <!-- //contact -->
    <script>
			function msg()
			{
				var a=document.getElementById("fname").value;
				
//                alert(progId)
                obj = (window.XMLHttpRequest) ? new XMLHttpRequest() : ((window.ActiveXObject) ? new ActiveXObject(Microoft.XMLHTTP) : null);

                if (obj != null)
                {
                    obj.onreadystatechange = function ()
                    {
                        if (obj.readyState == 4 && obj.status == 200)
                        {
                            document.getElementById('lic').innerHTML = obj.responseText;
                        }
                    };
                    obj.open('post', 'ajax/viewlicencenum.php?snm='+ a, true);
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
 
 
 <?php
if(isset($_REQUEST['submit']))
{
$cuname=$_REQUEST['name'];
$phno=$_REQUEST['phoneno'];
$bdate=$_REQUEST['date'];
$vnumber=$_REQUEST['vnumber'];
//$vtype=$_REQUEST['vechi_type']; 
	$dn=$_REQUEST['dname'];
	$vamt=$_REQUEST['vamt'];
	$lic=$_REQUEST['vnm'];
	$sl=$_REQUEST['sl'];
	$el=$_REQUEST['el'];
	$nop=$_REQUEST['nop'];
	
$Numday=$_REQUEST['noofdays'];
	$rt=$vamt*$Numday;
	$_SESSION['lamount']=$rt;
	$dd="select amount from adminaccount";
							$b=mysql_query($dd);
							$f=mysql_fetch_array($b);
							$adamt=$f['amount'];
							$cash=$adamt+$vamt;
							
							$jj="update adminaccount set amount='$cash'";
							
							$gg=mysql_query($jj);
							$uac=$_SESSION['uaccount'];
							$ll=mysql_query("select amount from signup where account='$uac'");
							$xx=mysql_fetch_array($ll);
							$uamt=$xx['amount'];
							$ww=$uamt-$vamt;
							$uu=mysql_query("update signup set amount='$ww' where account='$uac'");
/*$qry="select count(*) as cnt from parkingbooking where date='$bdate' and vnumber='$vnumber'";
$rs=mysql_query($qry);
$res=mysql_fetch_array($rs);
if($res['cnt']>0)
{
echo"<script>alert('Already Booked');</script>";
}
else*/
{
$qry="insert into vehiclebooking(name,phno,date,vehiclenumber,vehi_type,dname,licencenumber,startlocation,endlocation,noofperson,noofdays,status) values('$cuname','$phno','$bdate','$vnumber','$vn','$dn','$lic','$sl','$el','$nop','$Numday','not approved')";
mysql_query($qry);



echo"<script>alert('Saved')</script>";
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