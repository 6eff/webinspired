<?php

$db_name = (basename(__DIR__));
pg_connect('host=localhost dbname='.($db_name).'_test') or die('Could not connect: ' . pg_last_error());
?>
