<?php
include_once 'header.php';
?>
<section id="bigBox">
    <div class="class-head">
        <h2>Log in</h2>
    </div>
    <?php
    if (isset($_GET["error"])) {
        echo '<div class="account-error">';
        if ($_GET["error"] == 'emptyinput') {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == 'wronglogin') {
            echo "<p>Incorrect login information!</p>";
        }
    }
    echo '</div>';
    ?>
    <div class="inputBox">
        <form class="loginform" action="includes/login.inc.php" method="POST">
            <div class="inputText">
                <label for="Username">Username or email address</label>
                <input class="input" type="text" name="uid">
            </div>
            <div class="inputText">
                <label for="Password">Password</label><a class="forgot-pwd" href="reset-password.php">Forgot your password?</a>
                <input class="input" type="password" name="pwd">
            </div>

            <button type="submit" class="inputButton" name="submit">Sing In</button>
        </form>
    </div>
</section>

<?php
include_once 'footer.php';
?>