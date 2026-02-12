<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Load credentials from Task_OAuth/client_id.env (ignored in repo) or environment variables
$env_file = __DIR__ . '/client_id.env';
$config = null;
if (file_exists($env_file)) {
    $raw = file_get_contents($env_file);
    $data = json_decode($raw, true);
    if ($data && isset($data['web'])) {
        $config = $data['web'];
    }
}

$client_id = $config['client_id'] ?? getenv('GOOGLE_CLIENT_ID');
$client_secret = $config['client_secret'] ?? getenv('GOOGLE_CLIENT_SECRET');
$redirect_uri = $config['redirect_uris'][0] ?? 'http://localhost/WTLab_220591/Task_OAuth/google_auth.php';

if (!isset($_GET['code'])) {
    echo "No auth code received";
    exit;
}

$code = $_GET['code'];

if (empty($client_id) || empty($client_secret)) {
    echo "Client credentials not configured. Populate Task_OAuth/client_id.env (ignored) or set environment variables.";
    exit;
}

/* Exchange code for token */
$token_url = "https://oauth2.googleapis.com/token";

$data = [
    'code' => $code,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'grant_type' => 'authorization_code'
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($token_url, false, $context);
$token = json_decode($result, true);

if (!isset($token['access_token'])) {
    echo "Token error <br>";
    print_r($token);
    exit;
}

$access_token = $token['access_token'];

/* Get user info */
$user_info_url = "https://www.googleapis.com/oauth2/v2/userinfo?access_token=".$access_token;
$user = json_decode(file_get_contents($user_info_url), true);

/* Just print data */
echo "<h2>Login Success </h2>";
echo "Name: " . htmlspecialchars($user['name'] ?? '') . "<br>";
echo "Email: " . htmlspecialchars($user['email'] ?? '') . "<br>";

?>

