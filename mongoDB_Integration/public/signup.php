<!DOCTYPE html>
<html>
<head>
    <title>Signup - Hands In Need</title>
</head>
<body>

<h2>Create Account</h2>

<form action="../backend/authController.php" method="POST">

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="signup">Signup</button>

</form>

<p>
Already have an account?  
<a href="login.php">Login here</a>
</p>

</body>
</html>
