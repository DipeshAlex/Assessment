<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$std_id = $data["std_id"];
$std_name =$data["std_name"];
$std_course =$data["std_course"];

require_once "dbconfig.php";

$query = "UPDATE std_record SET std_name= '".$std_name."' , 
                                 std_course= '".$std_course."' 
                           WHERE std_id='".$std_id."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{	
	echo json_encode(array("message" => "Record Update Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Record Update Not Successfully", "status" => false));	
}

?>