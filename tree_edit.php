<h1>tree edit</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$sql="update tree 
	set 
	tree_name = '$_POST[name]',tree_name_eng = '$_POST[name_eng]'
	where tree_id = '$_GET[id]'
	";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=tree");
}
?>
<?php

	$sql="select * from tree where tree_id = '$_GET[id]'";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
?>
<form method="post">
<label>ชื่อ</label>
<input type="text" class="form-control" name="name" value="<?php echo $row[tree_name];?>">
<label>ชื่อภาษาอังกฤษ</label>
<input type="text" class="form-control" name="name_eng" value="<?php echo $row[tree_name_eng];?>">
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>

