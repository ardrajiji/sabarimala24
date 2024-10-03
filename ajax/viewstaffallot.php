<html>
	<body>
		<form>
			<table width="300" height="100">
				<th>StaffName</th>
				<th>Shift Allotment</th>
				<th>Shift Date</th>
			
	</body>
</html>


<?php
include("../connect.php");
$dept_name = $_REQUEST['snm'];

$qry="select * from staff_allot  where staffname='$dept_name'";
$result_nurse = mysql_query($qry);


while($row_nurse = mysql_fetch_array($result_nurse))
{
	$sname=$row_nurse['staffname'];
	$sa=$row_nurse['shifttype'];
	$da=$row_nurse['date_allot'];
    echo "<tr><td>$sname</td><td>$sa</td><td>$da</td></tr>";
}

?>
</table>
		</form>
