<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="text-center bg-white p-5 rounded shadow-sm">
        <h1>Welcome, <?php echo htmlspecialchars($user); ?>!</h1>
        <a href="logout.php" class="btn btn-danger mt-4">Logout</a>
    </div>
</div>
</body>
</html>
