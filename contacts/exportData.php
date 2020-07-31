<?php
	
	$db = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = $db->prepare("SELECT * FROM tbl_contacts ORDER BY contact_id ASC");
							$query->execute();
							$countt = $query->rowCount();
if($countt > 0){
    $delimiter = ",";
    $filename = "contacts_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array( 'first name', 'middle name', 'last name', 'address', 'contact no1','contact no2','email address');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
       // $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array( $row['first_name'], $row['middle_name'], $row['last_name'], $row['address'], $row['contact_no1'],$row['contact_no2'],$row['email_address']);
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