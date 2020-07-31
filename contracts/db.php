<?php
error_reporting(0);
try {
$dbc = new PDO('mysql:host=localhost; dbname=mywschoo_db', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>