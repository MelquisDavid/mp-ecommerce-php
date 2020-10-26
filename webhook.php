<?php


$filename = "test";
//
echo session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
session_start();
$_SESSION['filename'] = json_encode($_POST);
echo $_SESSION['filename'] ;
http_response_code(200);

?>