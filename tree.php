<h1>tree</h1><hr>
<a href="?page=tree_add" class="btn btn-primary">เพิ่ม</a><br>
<table class="table table-bordered">
<thead>
	<th scope="col">#</th>
	<th scope="col">ชื่อ</th>
	<th scope="col">ชื่อภาษาอังกฤษ</th>
	<th scope="col"></th>
	<th scope="col"></th>
	</thead>
	<?php include("assets/connect.php");?>
<?php

	$sql="select * from tree";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	<td><?php echo $row[tree_id];?></td>
	<td><?php echo $row[tree_name];?></td>
	<td><?php echo $row[tree_name_eng];?></td>
	<td>
		<a href="?page=tree_del&id=<?php echo $row[tree_id];?>" class="btn btn-danger">ลบ</a>
		</td>
	<td>
		<a href="?page=tree_edit&id=<?php echo $row[tree_id];?>" class="btn btn-warning">แก้ไข</a></td>
	</tr>
	
	<?php }?>
</table>