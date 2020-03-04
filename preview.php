<?php
$id = @$_GET['id'];

$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
$data = json_decode($json, true);

?>

<link rel="stylesheet" href="style.css">
<a href="./form_create.php?id=<?php echo $id ?>"> 
	<button type="button">Edit</button>
</a> | 
<form style="display: inline-block" method="post" action="pro_delete.php">
	<input type="hidden" name="id" value="<?php echo $id ?>" />
	<button type="submit" name="remove" value="remove">Delete</button>
</form>

<h1><?php echo $data['name']; ?></h1>
<h3><?php echo $data['price']; ?></h3>
<h3><?php echo $data['description']; ?></h3>
<h3><?php echo $data['category_name']; ?></h3>