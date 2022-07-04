<?php
require_once 'header.php'
?>
<div class="forgot-password">
    <h1>Reset your password</h1>
    <p>An e-mail will be send to you with instructions on how to reset your password.</p>
    <form action="includes/reset-request.inc.php" method="POST">
        <input type="text" name="email" placeholder="Enter your e-mail address...">
        <button type="submit" name="reset-request-submit">Recive new password by e-mail</button>
    </form>
    <?php
    if (isset($_GET["reset"])) {
        if ($_GET["reset"] == "success") {
            echo "<p class='signupsuccess'>Check your e-mail!</p>";
        }
    }
    ?>
</div>

<?php
require_once 'footer.php'
?>