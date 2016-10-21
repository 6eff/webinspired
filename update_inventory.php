<?php

$id = intval($_REQUEST['id']);
$name = htmlspecialchars($_REQUEST['name']);
$category = htmlspecialchars($_REQUEST['category']);
$description = htmlspecialchars($_REQUEST['description']);
$price = htmlspecialchars($_REQUEST['price']);

include 'conn.php';

$sql = "UPDATE inventory SET name='$name',category='$category',description='$description',price='$price' where id=$id";
$result = @pg_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'name' => $name,
		'category' => $category,
		'description' => $description,
		'price' => $price
	));
} else {
	echo json_encode(array('errorMsg'=>'Произошла ошибка, проверьте заполнение данных.'));
}
?>
