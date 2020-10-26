<?php
session_start();

$filename = "test";
//$_SESSION['filename'] = json_encode($_POST);
echo session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
echo $_SESSION['filename'] ;
http_response_code(200);

?>