<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php?register=success");
        } else {
            echo "Error: Username may already exist.";
        }
    } else {
        echo "Database error.";
    }
}
?>
