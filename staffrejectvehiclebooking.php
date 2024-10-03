<?php
	include 'connect.php';
	$sid = $_REQUEST['id'];
	$un = $_REQUEST['unm'];
	$query = "update vehiclebooking set status = 'rejected' where vbid = '$sid'";
	$result = mysql_query($query);
	
	$as = mysql_query($qwe);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully rejected\");
					window.location = (\"adminviewvehiclebooking.php\")
				</script>";
	}
?>