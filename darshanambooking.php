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
				<h3 class="title">DARSHANAM</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST">
                    <div class="form-group">
                        <label class="form-label" id="name" for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="enter name" tabindex="2"  pattern="[A-Za-z]+" title="enter characters only" required>
                    </div>
                    
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <label class="form-label" id="phno" for="phno">phno</label>
                        <input type="number" class="form-control" id="phno" name="phno" placeholder="Enter phno" tabindex="3"  pattern="[0-9]{10}"title="enter digits only" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="date" for="date">date</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" placeholder="enter date" tabindex="4" required><select name="zone"><option>AM</option><option>PM</option></select>
                    </div>
                    
                    
                        <div class="form-group">
                        <label class="form-label" id="class" for="class">class</label>
                        <td>
			<select name="cname" id="cname" onChange="msg()" class="form-control">>
                 <option>--Select Darshanam--</option><?php
		$qry=mysql_query("select cname from darshanam");
		//echo"<select name='deptname'>";
		//echo"<option>--Select Department--</option>";
		if(mysql_num_rows($qry))
		{
			while($res=mysql_fetch_array($qry))
			{
				$selected="";
								if(isset($_GET['snm'])){
									if($_GET['snm']==$res['cname']){
								      $selected="selected='selected'";
									}
									
								}
				echo '<option value="'.$res['cname'].'">'.$res['cname'].
						'</option>';
			}
		}
		echo"</select>";
			//	$dep=$_REQUEST["deptname"];
				
		?></td>
                    </div>
                    <div>
                    <tr>
                    	<td>
                    		Amount
                    		
                    	</td>
                    	<td><div id="amt"></div></td></tr>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="date" for="nopersons">nopersons</label>
                        <input type="text" class="form-control" id="nopersons" name="nopersons" placeholder="enter nopersons" tabindex="5"  pattern="[0-9]+"title="enter digits only" required>
                    </div>
                   
                  <input type="submit" name="submit" value="submit">
                  
                </form>
                <script>
			function msg()
			{
				var a=document.getElementById("cname").value;
				
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
                    obj.open('post', 'ajax/Viewdarshanam.php?snm='+ a, true);
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
if(isset($_REQUEST['submit']))
{
	session_start();
$cuname=$_REQUEST['name'];
$phno=$_REQUEST['phno'];
$bdate=$_REQUEST['date'];
$class=$_REQUEST['cname'];

$nopersons=$_REQUEST['nopersons'];
$zone=$_REQUEST['zone'];
$bdate=$bdate.$zone;
echo $bdate;
$qry="select count(*) as cnt from darshanambooking where name='$cuname' and date='$bdate'";
$rs=mysql_query($qry);
$res=mysql_fetch_array($rs);
if($res['cnt']>0)
{
echo"<script>alert('Already Booked');</script>";
}
else
{
$qry="insert into darshanambooking(name,phno,date,class,nopersons,status) values('$cuname','$phno','$bdate','$class','$nopersons','not approved')";
mysql_query($qry);
	$qry3="select amount from darshanam where cname='$class'";
$rs1=mysql_query($qry3);
$res=mysql_fetch_array($rs1);
	$bv=$res['amount'];
	echo $bv;
	$tt=$bv*$nopersons;

	$_SESSION['lamount']=$tt;

echo"<script>alert('Saved');</script>";
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