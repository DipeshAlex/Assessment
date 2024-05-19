<?php

//http://localhost/students/28Dec_PHP_2023/Webservices/RESTAPI_CRUID_addproduct_searchprodct-main/api-create.php   method post

// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);

$std_name =$data_arr["std_name"]; // value of pname
$std_course =$data_arr["std_course"]; // value of price

require_once "dbconfig.php";

$query = "INSERT INTO std_record(std_name, std_course) 
                       VALUES ('".$std_name."', '".$std_course."')";

if(mysqli_query($conn, $query) or die("Insert Query Failed"))
{
	echo json_encode(array("message" => "student record created", "status" => true));	
}
else
{
	echo json_encode(array("message" => "student record not created ", "status" => false));	
}

?>