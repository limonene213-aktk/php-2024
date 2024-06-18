// webhook_server.php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    echo "Received POST data: ";
    print_r($data);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Received GET request with query params: ";
    print_r($_GET);
} else {
    echo "Unsupported request method!";
}
?>
