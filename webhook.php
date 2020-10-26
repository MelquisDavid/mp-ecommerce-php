<?php
if(!session_id()) session_start();
$filename = "test";
$_SESSION['filename'] = json_encode($_POST);
echo "<script>console.log('Debug Objects: " . $filename . "' );</script>";
http_response_code(200);

?>