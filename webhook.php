<?php
$fp = fopen("/webhook.txt",'c+');
fwrite($fp,"Hola");
fclose($fp);
http_response_code(201);
?>