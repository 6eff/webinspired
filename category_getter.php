<?php
include 'conn.php';
$sql = "SELECT name FROM inventory WHERE category='category'";
$result = pg_query($sql);
while($row = pg_fetch_array($result)){
  echo "<option>" . $row{'name'} . "</option>";
}
?>
