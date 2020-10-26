<?php


$filename = "test";
//
echo session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
session_start();

//echo $_SESSION['filename'] ;
header('Content-Type: application/json');
$request = file_get_contents('php://input');
$req_dump = print_r( $request, true );
$_SESSION['filename'] = $_POST["id"];
http_response_code(200);

?>