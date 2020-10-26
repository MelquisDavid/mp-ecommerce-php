<?php
$fp = fopen("./webhook.txt",'w+');
fwrite($fp,"Hola");
fclose($fp);
http_response_code(201);
?>