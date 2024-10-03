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
  	<tr><th>User Name</th><th>Phone Number</th><th>Date</th><th>Vehicle</th><th>StartLocation</th><th>EndLocation</th><th>No Of Persons</th><th>No Of Days</th><th>Accept</th><th>Reject</th></tr>
  	<?php
	  
	   session_start();
	   $sn=$_SESSION['UserName'];
	
		$qry="select * from vehiclebooking where status='not approved'";
		$res=mysql_query($qry);
	  
	while($data=mysql_fetch_assoc($res))
	{
		
		
		$sid=$data["vbid"];
			$un=$data["name"];
		$sub=$data["phno"];
		
		$ven=$data["date"];
		
		$sta=$data["vehi_type"];
		$sl=$data["startlocation"];
		$el=$data["endlocation"];
		$np=$data["noofperson"];
		$nd=$data["noofdays"];
		echo "<tr><td>$un</td><td>$sub</td><td>$ven</td><td>$sta</td><td>$sl</td><td>$el</td><td>$np</td><td>$nd</td><td><div><a href='staffacceptvehiclebooking.php?id=$sid'>Accept</a></td></div><td><div><a href='staffrejectvehiclebooking.php?id=$sid'>reject</a></td></div></tr>";
	 
	}
	  
	  ?>
  </table>
 </form>    
     
           	