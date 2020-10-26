<?php

$fp = fopen("/webhook.txt",'w+');
fwrite($fp,"Hola");
fclose($fp);
echo json_encode(file_exists("/app/webhook.txt"));
http_response_code(200);

?>