<?php
include("../connect.php");
$dept_name = $_REQUEST['snm'];
$qry="select amount from darshanam where  cname='$dept_name'";
$result_nurse = mysql_query($qry);
$ds=mysql_fetch_array($result_nurse);
//$sl=$ds['slots'];
$am=$ds['amount'];
session_start();
/*$_SESSION['bamt']=$am;
$qry="select count(sbook) from bookpark where  pname='$dept_name'";
$result_nu = mysql_query($qry);
$sa=mysql_fetch_array($result_nu);
$bs=$sa[0];
$bslot=$sl-$bs;*/



	echo "<select name='vnm'>";
{
    echo "<option value='".$am."'>".$am."</option>";
}
echo "</select>";


?>