<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require_once __DIR__ . '/../models/user.php';

$userModel = new User();

if(isset($_POST['signup'])){

    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    if(empty($name) || empty($email) || empty($password)){
        die("All fields are required");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }

    if(strlen($password) < 6){
        die("Password must be at least 6 characters");
    }

    if($userModel->findByEmail($email)){
        die("User already exists");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $userModel->create($name, $email, $hashedPassword);

    header("Location: ../public/login.php");
    exit();
}

if(isset($_POST['login'])){

    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    $user = $userModel->findByEmail($email);

    if(!$user){
        die("User not found");
    }

    if(!password_verify($password, $user['password'])){
        die("Invalid password");
    }

    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_name']  = $user['name'];

    header("Location: ../public/dashboard.php");
    exit();
}
?>
