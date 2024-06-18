// send_post.php
<?php
$url = 'http://<UbuntuサーバーのIPアドレス>/webhook.php';
$data = array('key1' => 'value1', 'key2' => 'value2');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "POST Response: ";
echo $result;
?>
