<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['name']; ?> 👋</h2>
<p>Role: <?php echo $_SESSION['role']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>

<a href="logout.php">Logout</a>

</body>
</html>
