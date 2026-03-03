<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->HandsInNeedDB;
} catch (Exception $e) {
    die("MongoDB Connection Failed: " . $e->getMessage());
}
?>
