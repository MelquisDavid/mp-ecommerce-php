<?php
session_start();
session_id("cu31f7vk92npq69diq33pv5gqrulgfvo");
$filename = "test";
//$_SESSION['filename'] = json_encode($_POST);
echo session_id() ;
echo $_SESSION['filename'] ;
http_response_code(200);

?>