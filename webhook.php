<?php


$filename = "test";
//
echo session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
session_start();

//echo $_SESSION['filename'] ;
header('Content-Type: application/json');
$request = file_get_contents('php://input');
$_SESSION['filename'] = $request;
$req_dump = print_r( $request, true );
$fp = file_put_contents( '/app/request.log', $req_dump );
http_response_code(200);

?>