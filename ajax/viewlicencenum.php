<?php
include("../connect.php");
$dept_name = $_REQUEST['snm'];

$qry="select licencenumber from registration where fname='$dept_name'";
$result_nurse = mysql_query($qry);

echo "<select name='vnm'>";
while($row_nurse = mysql_fetch_array($result_nurse))
{
    echo "<option value='".$row_nurse['licencenumber']."'>".$row_nurse['licencenumber']."</option>";
}
echo "</select>";


?>