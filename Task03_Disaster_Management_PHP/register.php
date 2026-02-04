<?php
include "db.php";

if(isset($_POST['register'])){

    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $role   = mysqli_real_escape_string($conn, $_POST['role']);
    $pass   = mysqli_real_escape_string($conn, $_POST['password']);

   
    $check = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $check);

    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Email already registered!');</script>";
    } else {
        
        //Validate input length
        if (strlen($pass) < 8) {
            echo "<script>alert('Password must be at least 6 characters long!');</script>";
            die();
        }
       
        $hashed = password_hash($pass, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name,email,mobile,role,password)
                  VALUES ('$name','$email','$mobile','$role','$hashed')";

        if(mysqli_query($conn, $query)){
            echo "<script>
                alert('Registration successful!');
                window.location.href='login.php';
            </script>";
        } else {
            echo "<script>alert('Registration failed!');</script>";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | HAnds iN neeD</title>
    <link rel="stylesheet" href="style.css">
    <link href="Logo-2.png" rel="icon" type="image/png">
</head>
<body>
    
    <header>
        <div>
            <img src="Logo-2.png" alt="Logo">
        </div>

        <div>
            <h1>Register</h1>
            <p>Register to become a part of our community</p>
        </div>
    </header>

    <main class="form-page">
        <div class="form-card">
            <a href="index.php" class="back-link"> << Back to Home</a>
            <h2>Create an Account</h2>
            <p class="form-subtitle">Join us today</p>

            <form action="" method="POST">
                <label for="username">Name</label>
                <input type="text" id="username" name="name" placeholder="Enter your full name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="">Select your role</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="donor">Donor</option>
                    <option value="admin">Admin</option>
                </select>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required> 
                
                <button type="submit" class="submit-button" name="register">Register</button>
            </form>

            <p class="form-footer">Already have an account?<a href="login.php"> Login</a></p>

        </div>

    </main>

    <footer>
        <p>Secure | Verified | Used during Emergencies</p>
    </footer>
</body>
</html>