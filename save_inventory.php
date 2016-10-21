<?php
$name = htmlspecialchars($_REQUEST['name']);
$category = htmlspecialchars($_REQUEST['category']);
$description = htmlspecialchars($_REQUEST['description']);
$price = htmlspecialchars($_REQUEST['price']);

include 'conn.php';

$sql = "INSERT INTO inventory(name,category,description,price) VALUES('$name','$category','$description','$price')";
$result = @pg_query($sql);
if ($result){
  $insert_query = pg_query("SELECT lastval();");
  $insert_row = pg_fetch_row($insert_query);
  $insert_id = $insert_row[0];
	echo json_encode(array(
		'id' => $insert_id,
		'name' => $name,
		'category' => $category,
		'description' => $description,
		'price' => $price
	));
} else {
	echo json_encode(array('errorMsg'=>'Произошла ошибка, проверьте заполнение данных.'));
}
?>
