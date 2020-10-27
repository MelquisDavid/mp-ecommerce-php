<?php


$filename = "test";
//
echo session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $request = file_get_contents('php://input');
    $req_dump = print_r( $request, true );
    $fp = file_put_contents( '/var/www/html/webhook.txt', $req_dump );
    $_SESSION['filename'] = $req_dump;
    http_response_code(200);  // The request is using the POST method
}
//echo $_SESSION['filename'] ;


?>