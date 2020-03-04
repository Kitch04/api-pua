<?php
$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
$data = json_decode($json, true);
$list = $data['records'];

if(@$_POST['keyword'] && @$_POST['keyword'] != ''){
$json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s=' . $_POST['keyword']);
$data = json_decode($json, true);
$list = $data['records'];
}
?>

<link rel="stylesheet" href="style.css">

<table class="table table-hover" align="center">

		<thead class="thead-dark">
			<tr>
				<th width="20%">Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Category</th>
			</tr>
		</thead>

			<div style="float: right">
		<form method="post">
				<input style="display: inline-block" class="form-control" type="text" name="keyword">
				<input class="btn btn-primary" type="submit" name="submit" value="submit">
		</form>
		
		<a href="form_create.php" style="text-decoration: none">
			<input class="btn btn-secondary" type="button" value="ADD">
		</a>
		
			</div>
		<tbody>
			<?php foreach($list as $item) { ?>
				<tr>
					<td>
						<a href="preview.php?id=<?php echo $item['id']?>"><?php echo $item['name'] ?></a>
					</td>
					<td><?php echo $item['price'] ?></td>
					<td><?php echo $item['description'] ?></td>
					<td><?php echo $item['category_name'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
</table>		