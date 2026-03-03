<?php
session_start();

if(!isset($_SESSION['user_email'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Hands In Need</title>
</head>
<body>

<h2>Welcome to Hands In Need Portal</h2>

<p>
Hello <?php echo htmlspecialchars($_SESSION['user_name']); ?> 👋
</p>

<p>
You are logged in as: <?php echo $_SESSION['user_email']; ?>
</p>

<a href="../backend/logout.php">Logout</a>

</body>
</html>
