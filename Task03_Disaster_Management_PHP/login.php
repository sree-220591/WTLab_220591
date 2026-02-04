<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res) == 1){

        $user = mysqli_fetch_assoc($res);

        
        if(password_verify($pass, $user['password'])){

        
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name']    = $user['name'];
            $_SESSION['role']    = $user['role'];
            $_SESSION['email']   = $user['email'];

            echo "<script>
                alert('Login successful!');
                window.location.href='Dashboard.php';
            </script>";

        } else {
            echo "<script>alert('Invalid password');</script>";
        }

    } else {
        echo "<script>alert('User not found');</script>";
    }
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

            <p class="form-footer">Don't have an account?<a href="register.php"> Register</a></p>

        </div>

    </main>
</body>
</html>