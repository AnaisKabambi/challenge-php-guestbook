<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
</head>
<body>
<header>
    <?php
    require 'PostLoader.php';
    require 'Post.php';
    ?>
</header>
<form method="POST">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars($_POST['fname']); ?>"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($_POST['lname']); ?>"><br>
    <label for="message">Message:</label><br>
    <input type="text" id="message" name="message" value="<?php echo htmlspecialchars($_POST['message']); ?>"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<footer>
    <footer>
        <?php
        require 'PostLoader.php';
        require 'Post.php';
        ?>
    </footer>
</footer>
</body>
</html>
