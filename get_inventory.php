<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';

	$rs = pg_query("SELECT COUNT(*) from inventory WHERE category !='category'");
	$row = pg_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = pg_query("SELECT * FROM inventory WHERE category !='category' OFFSET $offset LIMIT $rows");

	$items = array();
	while($row = pg_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>
