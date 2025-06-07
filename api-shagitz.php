<?php
header('Content-Type: application/json');

$targetApiUrl = 'https://api.shagitzsan.my.id/coc/';
$appApiKey = 'telegram_shagitz_san';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); 
    echo json_encode(['error' => 'Method not allowed. Only POST requests are accepted.']);
    exit;
}


if (!isset($_POST['player_tag'])) {
    http_response_code(400); 
    echo json_encode(['error' => 'Player tag is required.']);
    exit;
}
$playerTag = $_POST['player_tag'];

$postData = http_build_query([
    'player_tag' => $playerTag
]);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $targetApiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-APP-APIKEY: ' . $appApiKey,
    'Content-Type: application/x-www-form-urlencoded'
]);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Proxy Error', 
        'reason' => 'Failed to connect to the target API: ' . curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

http_response_code($httpCode);
echo $response;

?>