<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM tl_users where id='$id[$i]'");
}
header("location: tlUser.php");
}
?>