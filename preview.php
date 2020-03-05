<?php
$id = @$_GET['id'];

$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
$data = json_decode($json, true);

?>

<link rel="stylesheet" href="style.css">

<div class="container">
	<table class="table">
		<div style="float:right">
			<a style="text-decoration: none" href="?p=add&id=<?php echo $id ?>"> 
			<button type="button">Edit</button>
			</a> | 
			<form style="display: inline-block" method="post" action="pro_delete.php">
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<button type="submit" name="remove" value="remove">Delete</button>
			</form>
		</div>

		<thead class="thead-dark">
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Category</th>
			</tr>
		</thead>
	
		<tbody>
			<tr>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['price']; ?></td>
				<td><?php echo $data['category_name']; ?></td>
			</tr>
			<tr align="center">
				<td colspan="3"><?php echo $data['description']; ?></td>
			</tr>
		</tbody>
	</table>
</div>
