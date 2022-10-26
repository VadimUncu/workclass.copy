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
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/stylesSignUp.css">
</head>

<body background="images/photo.jpg">
    <br>
    <center>
        <div class="center">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
            </div>
            <hr size="2px" color="rgb(156,1,0)" width="95%" style="clear: both;">
            <form action="signup-script.php" method="POST">
                <div class="input-block">
                    <label for="name" class="input-label">Name</label>
                    <input type="name" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="input-block">
                    <label for="e-mail" class="input-label">Email</label>
                    <input type="text" name="e-mail" placeholder="E-mail" required>
                    <?php echo $_GET['m1'];?>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="input-block">
                    <label for="phone" class="input-label">Phone Number</label>
                    <input type="tel" id="phone" name="contact" placeholder="Enter your phone" required>
                    <?php echo $_GET['m2'];?>
                </div>
                <div class="input-block">
                    <label for="city" class="input-label">City</label>
                    <input type="city" name="city" id="city" placeholder="Enter your city" required>
                </div>
                <div class="input-block">
                    <label for="address" class="input-label">Address</label>
                    <input type="address" name="address" id="address" placeholder="Enter your address" required>
                </div>
                <div>
                    <button class="input-button">Sign Up</button>
                </div>
            </form>
            <p class="sign-up">Already have an account? <a href="login.php">Login now</a></p>
            <br>
        </div>
    </center>

</body>

</html>