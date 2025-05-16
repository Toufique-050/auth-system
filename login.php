<?php
session_start();
include "db.php";
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Directly using variables in query (not secure but simpler)
    $sql = "SELECT * FROM users WHERE username = '$username'";
    // $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['username'];
            header("Location: welcome.php");
            exit();
        } else {
            echo "<div class='alert alert-danger fw-bold'>Incorrect Password.</div>";
        }
    } else {
        echo "<div class='alert alert-warning fw-bold text-dark'>User not found.</div>";
    }
}

include 'footer.php';
?>
