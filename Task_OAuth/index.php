<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    $email = strtolower($email); 

    if(!$conn){
        die(" Database connection failed");
    }


    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die(" Query failed");
    }

    if(mysqli_num_rows($result) == 0){
        echo "User not found";
        die();
    }

    $user = mysqli_fetch_assoc($result);

    if(strcasecmp($user['email'], $email) !== 0){
        print " Email mismatch";
        die();
    }

    if(!password_verify($password, $user['password'])){
        print " Incorrect password";
        die();
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_role'] = $user['role'];

    header("Location: dashboard.php");
    exit();
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HAnds iN neeD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Logo-2.png">
    <style>
        body{
        font-family:Arial;
        background:#f5f6fa;
        display:flex;
        height:100vh;
        align-items:center;
        justify-content:center;
        }
        .google-btn{
        display:flex;
        align-items:center;
        gap:12px;
        padding:14px 22px;
        border:1px solid #ddd;
        border-radius:8px;
        background:#fff;
        cursor:pointer;
        font-size:15px;
        font-weight:600;
        transition:0.2s;
        }
        .google-btn:hover{
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
        transform:translateY(-1px);
        }
        .google-btn img{
        width:22px;
        }
    </style>
</head>
<body>
    
    <header>
        <div>
            <img src="Logo-2.png" alt="Logo">
        </div>

        <div>
            <h1>Login</h1>
            <p>Login to access your account</p>
        </div>
    </header>

    <main class="form-page">
        
        <div class="form-card">

            <a href="index.php" class="back-link"> << Back to Home</a>
            <h2>Welcome Back</h2>
            <p class="form-subtitle">Sign in to continue</p>

            <form action="" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit" class="submit-button" name="login">Login</button>
            </form> 

            <hr>

            <div style="text-align:center;">
                <a href="google_auth.php" style="text-decoration:none;color:black;">
                <div class="google-btn">
                    <img src="icon.png">
                    Sign in with Google
                </div>
                </a>
                <br>
                <a href="github_auth.php" style="text-decoration:none;color:black;">
                <div class="google-btn">
                    <img src="github_logo.png">
                    Sign in with GitHub
                </div>
                </a>
            </div>

            <p class="form-footer">Don't have an account?<a href="register.php"> Register</a></p>

        </div>

    </main>
</body>
</html>