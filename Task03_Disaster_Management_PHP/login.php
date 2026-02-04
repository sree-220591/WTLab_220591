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
        echo "Invalid password";
        die();
    }

 
    echo "Login successful!";
    print "<br>Welcome ".$user['name'];

   
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