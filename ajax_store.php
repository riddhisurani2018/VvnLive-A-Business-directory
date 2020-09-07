<?php
include('include_db.php');
if($_POST['id'])
{
$id=mysqli_real_escape_string($con,$_POST['id']);

	if($id>0 && $id<9)
	{
		$sql11=mysqli_query($con,"select * from onlinestores  where categoryid='$id' ");
		echo '<option value="0">Choose Store</option>';
		while($row11=mysqli_fetch_array($sql11))
		{
		$id1=$row11['oid'];
		$data=$row11['storename'];
		echo '<option value="'.$id1.'">'.$data.'</option>';
		}
	}
	else
	{
	echo '<option value="0" selected>Choose Store</option>';
	}
}
?>