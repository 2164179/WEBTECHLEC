<?php
include 'header.php';
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    return;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <title>Login module</title>
</head>
<body>
<div class="top">
    <form method = "post" action = "login.php">
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password">
        <div>
            <br>
            <button type = "submit" name = "log_in_user"> Log in </button>
        </div>
    </form>
</div>
</body>
</html>

<?php
include 'footer.php';
?>