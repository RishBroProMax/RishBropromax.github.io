<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the File Sharing System</h1>
    <p><a href="upload.php">Upload File</a> | <a href="logout.php">Logout</a></p>
</body>
</html>
