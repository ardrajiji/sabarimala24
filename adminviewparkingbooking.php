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
				<h3 class="title">Bookings</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
 
 
 
           <form action="#" method="post">
             <table width="200" border="0">
  
  
   <tr>
    
   <table border="1" align="center" width="1000" height="200">
  	<tr><th>Name</th><th>Phone Number</th><th>Date</th><th>VehicleNumber</th><th>Status</th></tr>
  	<?php
	  
	   session_start();
	   $sn=$_SESSION['UserName'];
	$i=1;
		$qry="select * from bookpark where status='not approved'";
		$res=mysql_query($qry);
	  
	while($data=mysql_fetch_assoc($res))
	{
		
		
		$sid=$data["pid"];
			$un=$data["pname"];
		$sub=$data["phoneno"];
		
		$ven=$data["date"];
		
		
		$sl=$data["vnumber"];
		
		$nd=$data["username"];
		$n=$data["status"];
		echo "<tr><td>$un</td><td>$sub</td><td>$ven</td><td>$sl</td><td>$n</td><td>";
		echo "<td><input type='checkbox' name='check[$i]' value='".$data['pid']."'/></td>";
		echo "</tr>";
	 $i++;
	}

			echo"<input type='submit' name='approve' value='approve'/>";
			echo"</form>";
			if(isset($_POST['approve']))
			 {
				 if(isset($_POST['check']))
				  {
					  foreach($_POST['check'] as $value)
					  {
						 
						  $sql="update bookpark set status='approved' where pid='$value'";
						  mysql_query($sql);
						  
						  
						  echo"<script>alert('successfully approved')</script>";
					  }
				  }
			 }
	  ?>
  </table>
 </form>    
     
           	