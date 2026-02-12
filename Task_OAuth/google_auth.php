<?php

require_once 'vendor/autoload.php'; // only if using composer

$env = parse_ini_file(__DIR__ . '/client_id.env');

$clientID = $env['GOOGLE_CLIENT_ID'];
$clientSecret = $env['GOOGLE_CLIENT_SECRET'];
$redirectUri = $env['GOOGLE_REDIRECT_URI'];

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET['code'])) {
    $authUrl = $client->createAuthUrl();
    header("Location: $authUrl");
    exit();
} else {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $oauth = new Google_Service_Oauth2($client);
    $userInfo = $oauth->userinfo->get();

    echo "<h2>Login Successful</h2>";
    echo "<p>Name: {$userInfo->name}</p>";
    echo "<p>Email: {$userInfo->email}</p>";
}
