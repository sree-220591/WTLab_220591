<?php

require_once __DIR__ . '/vendor/autoload.php';
$env = parse_ini_file(__DIR__ . '/client_id.env');

$client_id = $env['GITHUB_CLIENT_ID'];
$client_secret = $env['GITHUB_CLIENT_SECRET'];

$code = $_GET['code'];

$url = "https://github.com/login/oauth/access_token";

$data = [
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "code" => $code
];

$options = [
    "http" => [
        "header"  => "Content-type: application/x-www-form-urlencoded\r\nAccept: application/json\r\n",
        "method"  => "POST",
        "content" => http_build_query($data),
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$result = json_decode($response, true);
$access_token = $result['access_token'];

$user = file_get_contents("https://api.github.com/user", false, stream_context_create([
    "http" => [
        "header" => "User-Agent: Sree591App\r\nAuthorization: token $access_token\r\n"
    ]
]));

$user_data = json_decode($user, true);

echo "Welcome " . $user_data['login'];

?>
