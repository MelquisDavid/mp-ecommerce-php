<?php
if(!session_id()) session_start();
$filename = "test";
$_SESSION['filename'] = json_encode($_POST);

http_response_code(200);

?>