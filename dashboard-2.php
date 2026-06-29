<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, User!</h2>
    <a href="profile.php">Profile</a>
    <a href="workout_plans.php">Workout Plans</a>
    <a href="logout.php">Logout</a>
</body>
</html>
