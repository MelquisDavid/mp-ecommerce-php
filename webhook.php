<?php
$fp = fopen("webhook.txt",'w+');
fwrite($fp,$_POST);
fclose($fp);
http_response_code(201);
?>