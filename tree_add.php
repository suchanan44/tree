<h1>tree add</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$sql="insert into tree (tree_name,tree_name_eng)values('$_POST[name]','$_POST[name_eng]')";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=tree");
}
?>
<form method="post">
<label>ชื่อ</label>
<input type="text" class="form-control" name="name">
<label>ชื่อประเภท</label>
<input type="text" class="form-control" name="name_eng">
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>
