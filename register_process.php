<?php
include "db.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    // $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    if ($result) {
        header("Location: index.php?register=success");
    } else {
        echo "Error: Registration failed.";
    }
}

?>
