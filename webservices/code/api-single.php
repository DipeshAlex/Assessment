<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"), true);
$std_id = $data["std_id"];

require_once "dbconfig.php";

$query = "SELECT * FROM std_record WHERE std_id='$std_id'";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$row = mysqli_fetch_array($result);
	
	echo json_encode($row);
}
else
{	
	
	echo json_encode(array("message" => "No Product Found.", "status" => false));
}

?>