<?php //require_once('./include/mysqli_connect.php');
$con = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'root', '');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// headers for exporting excel

header("Content-Disposition: attachment; filename='appointments.xls'");

header("Content-Type: application/vnd.ms-excel");

function dataFilter(&$str_val)
{
	$str_val = preg_replace("/\t/", "\\t", $str_val);
	$str_val = preg_replace("/\r?\n/", "\\n", $str_val);
	if(strstr($str_val, '"')) $str_val = '"' . str_replace('"', '""', $str_val) . '"';
}

$post_list = array();

//get rows query
$query = $con->prepare("SELECT contact_person,subject,appointment_date,appointment_time,location,created_at,status FROM appointment_details");
							$query->execute();
//$query = mysqli_query($con, "SELECT * FROM li_ajax_post_load ORDER BY post_id DESC limit 0,5");

//number of rows  $sno = 1; "Sno"=>$sno,

$rowCount = $query->rowCount();


if($rowCount > 0){
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$post_list[] = array(     "Contact Person"=>$row["contact_person"],"Subject"=>$row["subject"],"Date"=>$row["appointment_date"],"Time"=>$row["appointment_time"],"Location"=>$row["location"],"Created At"=>$row["created_at"],"Status"=>$row["status"] );
		//$sno++;
	}
}


$title_flag = false;
foreach($post_list as $post) {
	if(!$title_flag) {
		// Showing column names 
		echo implode("\t", array_keys($post)) . "\n";
		$title_flag = true;
	}
	// data filtering
	array_walk($post, 'dataFilter');
	echo implode("\t", array_values($post)) . "\n";

}

?>