<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <p>Only accessible by admin users.</p>
</body>
</html>
