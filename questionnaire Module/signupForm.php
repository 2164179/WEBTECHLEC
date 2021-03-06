<?php
/*include 'header.php';
*/?>
<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <title>Login module</title>
</head>

<body>
<div class="top">
<div id="divForm">
    <form id="sign" action="signup.php" method="post">

        <div>
            <label>Username:</label><br>
            <input type="text" name="username" required="" oninvalid="this.setCustomValidity('Please Enter a valid username')"
                   oninput="setCustomValidity('')">
            <span id="errorUsername">Username unavailable</span>
        </div>

        <div>
            <br><label>Password:</label><br>
            <input id="password" type="password" name="password" required="" oninvalid="this.setCustomValidity('Please Enter a valid password')"
                   oninput="setCustomValidity('')">
        </div>

        <div>
            <label>Confirm Password:</label><br>
            <input id="confirmPassword" type="password" name="Cpassword" required="" oninvalid="this.setCustomValidity('Please Enter a valid password')"
                   oninput="setCustomValidity('')">
            <span id="ePassword" class="errorPassword">Please confirm your password</span>
        </div>

        <div>
            <label>First name:</label><br>
            <input type="text" name="firstName" required="" oninvalid="this.setCustomValidity('Please Enter your first name')"
                   oninput="setCustomValidity('')">
        </div>

        <div>
            <label>Last name:</label><br>
            <input type="text" name="lastName" required="" oninvalid="this.setCustomValidity('Please Enter your last name')"
                   oninput="setCustomValidity('')">
        </div>

        <div>
            <input type="submit" value="Sign up">
        </div>
    </form>
</div>

<div id="result"></div>
</div>

<script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>


</body>
</html>
<?php
include 'footer.php';
?>

