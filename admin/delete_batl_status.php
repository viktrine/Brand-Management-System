<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM ba_tl_status where id='$id[$i]'");
}
header("location: ba_tl_status.php");
}
?>