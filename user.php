<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>User Page</title>
</head>
<body>
    <h1>User Page</h1>
    <p>Accessible by regular users.</p>
</body>
</html>
