<?php
if(!session_id()) session_start();
$filename = "test";
if(!isset($_SESSION['filename'])) {
    $_SESSION['filename'] = $filename;
}
http_response_code(200);

?>