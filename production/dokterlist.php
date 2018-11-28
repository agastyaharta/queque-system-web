<?php
/* Database connection start */
include 'database.php';  
$requestData= $_REQUEST;
$columns = array( 
    0 => 'employeeid',
    1 => 'employeename',
    2 => 'poli',
    3 => 'fromtime',
    4 => 'totime'
  
);


// getting total number records without any search
$sql = "SELECT employee.`employeeid`, employee.`employeename`, doctor.`poli`, doctor.`fromtime`, doctor.`totime`
FROM employee
INNER JOIN doctor ON doctor.`employeeid` = employee.`employeeid`
";
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
   
    $sql = "SELECT employee.`employeeid`, employee.`employeename`, doctor.`poli`, doctor.`fromtime`, doctor.`totime`
    FROM employee
    INNER JOIN doctor ON doctor.`employeeid` = employee.`employeeid`
    WHERE doctor.`poli` like '".$requestData['search']['value']."%' or employee.`employeename` like '".$requestData['search']['value']."%' ";
   	
    $query=mysqli_query($db, $sql) or die("dokterlist.php: get PO");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($db, $sql) or die("dokterlist.php: get PO"); // again run query with limit
	
} else {	

	$sql = "SELECT employee.`employeeid`, employee.`employeename`, doctor.`poli`, doctor.`fromtime`, doctor.`totime`
    FROM employee
    INNER JOIN doctor ON doctor.`employeeid` = employee.`employeeid`
    WHERE employee.`employeeposition`= 'Dokter'";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($db, $sql) or die("dokterlist.php: get PO");
	
}


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $id= $row["employeeid"];

	$nestedData=array();
	$nestedData[] = $row["employeeid"];
	$nestedData[] = $row["employeename"];
	$nestedData[] = $row["poli"];
	$nestedData[] = $row["fromtime"];
	$nestedData[] = $row["totime"];
    
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
