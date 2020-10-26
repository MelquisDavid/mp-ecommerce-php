<?php

$fp = fopen("/app/webhook.txt",'ab');
if (false === $fp) {
    throw new RuntimeException('Unable to open log file for writing');
}
echo fwrite($fp,"Hola");
fclose($fp);
echo json_encode(file_exists("/app/webhook.txt"));
http_response_code(200);

?>