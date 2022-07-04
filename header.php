<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/reset.css?v=<?= time() ?>">
</head>

<header class="main-header">
    <div class="container">
        <h1><a href="index.php">Shopping</a></h1>
        <nav>
            <ul class="main-menu">
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
                } else {
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>

</html>