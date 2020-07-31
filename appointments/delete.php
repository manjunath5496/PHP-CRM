<?php

session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location: ../login");
	exit;
}
?>

<?php

require 'db.php';
try {
$query = 'DELETE FROM appointment_details WHERE id=?';
$stmt = $dbc->prepare($query);
$stmt->bindParam(1, $_GET['id']);
if($stmt->execute()) {
	echo '<script>window.location.href = "5";</script>';
} else {
	echo '<script>window.location.href = "6";</script>';
}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>