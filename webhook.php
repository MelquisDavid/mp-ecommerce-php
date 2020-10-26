<?php

$fp = fopen("/app/webhooka.txt",'ab');
if (false === $fp) {
    throw new RuntimeException('Unable to open log file for writing');
}
fwrite($fp,"Hola");
fclose($fp);
echo json_encode(file_exists("/app/webhook.txt"));
http_response_code(200);

?>