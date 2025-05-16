<?php
include 'header.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
?>


    <div class="text-center">
        <h1 class="text-capitalize">Welcome, <?php echo $user; ?>!</h1>
        <a href="logout.php" class="btn btn-danger mb-3">Logout</a>
    </div>

    <?php
        include 'footer.php';
    ?>
