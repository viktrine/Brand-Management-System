 <?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM work_entry where id='$id[$i]'");
}
header("location: work_entry.php");
}
?>