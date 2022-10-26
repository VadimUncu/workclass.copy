<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['email']))
	header('location: home.php');

error_reporting(0);
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylesLogin.css">
</head>

<body background="images/photo.jpg">
    <br>
    <center>
        <form action="login-script.php" method="POST">
            <div class="center">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
                </div>
                <hr size="2px" color="rgb(156,1,0)" width="95%" style="clear: both;">
                <div class="input-block">
                    <label for="e-mail" class="input-label">Email</label>
                    <input type="text" name="e-mail" placeholder="Email">
                    <?php echo $_GET['ml1'];?>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="password" placeholder="Password" required="true">
                    <?php echo $_GET['ml2'];?>
                </div>
                <div>
                    <button class="input-button">Login</button><br>
                    <a href="" class="">Forgot your password?</a>
                </div>
                <p class="sign-up">Don't have an account? <a href="signUp.php">Sign up now</a></p>
                <br>
            </div>
        </form>
    </center>

</body>

</html>