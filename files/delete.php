<?php
extract($_REQUEST);
include('db.php');


$sql = $db->prepare("select * from upload where id='$del'");
$sql->execute();
$row = $sql->fetch();  


unlink("files/$row[name]");


$sql = $db->prepare("delete from upload where id='$del'");
$sql->execute();
echo '<meta http-equiv="refresh" content="0;url=index.php" />';


?>