<?php
/* Database connection start */
include 'database.php';  
$requestData= $_REQUEST;
$columns = array( 
    0 => 'registrationid',
    1 => 'patientname'
  
);

// getting total number records without any search
$sql = "SELECT registration.`registrationid`, patient.`patientname`
FROM registration
INNER JOIN patient ON patient.`patientid` = registration.`patientid`
WHERE registration.`statuss` = 'Valid' AND registration.`doctorid` IS NULL
ORDER BY registrationdate ";
$query=mysqli_query($db, $sql) or die("ajax-grid-data.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
   
    $sql = "SELECT registration.`registrationid`, patient.`patientname`
        FROM registration
        INNER JOIN patient ON patient.`patientid` = registration.`patientid`
        WHERE registration.`statuss` = 'Valid' AND registration.`doctorid` IS NULL AND  registration.`registrationid` like '".$requestData['search']['value']."%' ";
   
	
    $query=mysqli_query($db, $sql) or die("ajax-grid-data.php: get PO");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($db, $sql) or die("ajax-grid-data.php: get PO"); // again run query with limit
	
} 

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $id= $row["registrationid"];
	$nestedData=array();
	$nestedData[] = $row["registrationid"];
	$nestedData[] = $row["patientname"];
    $nestedData[] = '<td><center>
        <form action="coba.php" method="POST">
            <input type = "hidden" name = "id" value = "'.$id.'">
        <button class="btn btn-success btn-block">Select</button></form>  
	 </center></td>';		
	
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
