<?php
include_once 'header.php';
?>
<section id="bigBox">
    <div class="class-head">
        <h2>Sign Up</h2>
    </div>
    <?php
    if (isset($_GET["error"])) {
        echo '<div class="account-error">';
        if ($_GET["error"] == 'emptyinput') {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == 'invaliduid') {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == 'invalidemail') {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == 'passwordsdontmatch') {
            echo "<p>Choose a proper password!</p>";
        } else if ($_GET["error"] == 'stmtfailed') {
            echo "<p>Somthing went wrong,try againg!</p>";
        } else if ($_GET["error"] == 'usernametaken') {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == 'none') {
            echo "<p>You have signed up!</p>";
        }
        echo '</div>';
    }
    ?>
    <div class="inputBox">
        <form action="includes/signup.inc.php" method="POST">
            <div class="inputText">
                <label for="Username">Full Name</label>
                <input type="text" name="name">
            </div>
            <div class="inputText">
                <label for="Username">E-mail</label>
                <input type="text" name="email">
            </div>
            <div class="inputText">
                <label for="Username">Username</label>
                <input type="text" name="uid">
            </div>
            <div class="inputText">
                <label for="Username">Passowrd</label>
                <input type="password" name="pwd">
            </div>
            <div class="inputText">
                <label for="Username">Repeate Password</label>
                <input type="password" name="pwdrepeat">
            </div>
            <button type="submit" class="inputButton" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
    if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdataed") {
            echo "<p class='signupsuccess'>Your password has been reset!</p>";
        }
    }
    ?>
</section>

<?php

include_once 'footer.php';
?>