<?php
session_start();
$filename = "test";
//$_SESSION['filename'] = json_encode($_POST);
echo session_id() ;
echo $_SESSION['filename'] ;
http_response_code(200);

?>