<?php


$connect = new PDO("mysql:host=localhost;dbname=mywschoo_db", "root", "");

session_start();

$_SESSION["user_id"] = "1";

?>
