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
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You are logged in as <?php echo $_SESSION['role']; ?>.</p>

    <?php if ($_SESSION['role'] === 'admin') { ?>
        <a href="admin.php">Go to Admin Page</a>
    <?php } else { ?>
        <a href="user.php">Go to User Page</a>
    <?php } ?>

    <a href="logout.php">Logout</a>
</body>
</html>
