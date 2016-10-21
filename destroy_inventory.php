<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "DELETE FROM inventory WHERE id=$id";
$result = @pg_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Произошла ошибка, проверьте заполнение данных.'));
}
?>
