<?php
	
	$db = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$query = $db->prepare("SELECT name,amount,renewal_date,created_at,status FROM tbl_infk");
							$query->execute();
							$countt = $query->rowCount();
if($countt > 0){
    $delimiter = ",";
    $filename = "subscriptions_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array( 'Subscription Name', 'Subscription Amount', 'End Date', 'Subscribed Date', 'Status' );
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
       // $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['name'], $row['amount'], $row['renewal_date'], $row['created_at'], $row['status']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>