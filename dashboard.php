<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <a href="manage_users.php">Manage Users</a>
    <a href="manage_trainers.php">Manage Trainers</a>
    <a href="logout.php">Logout</a>
</body>
</html>
