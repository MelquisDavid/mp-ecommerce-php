<?php

$fp = fopen("/webhook.txt",'w+');
fwrite($fp,"Hola");
fclose($fp);
echo file_exists("/webhook.txt");
http_response_code(201);

?>