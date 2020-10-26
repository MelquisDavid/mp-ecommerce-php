<?php

$fp = fopen("/app/webhook.txt",'wb');
fwrite($fp,"Hola");
fclose($fp);
echo json_encode(file_exists("/app/webhook.txt"));
http_response_code(200);

?>