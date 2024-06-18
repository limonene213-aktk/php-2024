// send_get.php
<?php
$url = 'http://<UbuntuサーバーのIPアドレス>/webhook.php?param1=value1&param2=value2';

$response = file_get_contents($url);
echo "GET Response: ";
echo $response;
?>
