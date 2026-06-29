<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
$host = "localhost"; // Change if your database is hosted elsewhere
$user = "root"; // Default XAMPP MySQL username
$pass = ""; // Default XAMPP MySQL password (empty by default)
$dbname = "gym_management"; // Your database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
if (!$conn) {
    die("❌ Database connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
?>


