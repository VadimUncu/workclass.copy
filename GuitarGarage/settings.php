<!DOCTYPE HTML>
<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Garage | Thank You</title>
    <link rel="stylesheet" type="text/css" href="css/stylesSettings.css">
</head>
<br>

<body background="images/photo.jpg">
    <center>
        <div class="center">
            <div>
                <div class="logo">
                    <a href="home.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
                </div>
                <div class="logout">
                    <a href="logout-script.php" class="logset">Logout</a>
                </div>
                <div class="settings">
                    <a href="about.php" class="logset">About Us</a>
                </div>
            </div>
            <hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
            <br>
            <div>
                <form action="settings-script.php" method="POST">
                    <table style="font-family:candara;">
                        <b>Change password:</b>
                        <tr>
                            <td colspan="2">
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Old Password:</td>
                            <td>
                                <input size="25" type="password" name="old-password" placeholder="Old Password" required="true" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">New Password:</td>
                            <td>
                                <input size="25" type="password" name="password" placeholder="New Password" required="true" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Retype New Password:</td>
                            <td>
                                <input size="25" type="password" name="password1" placeholder="Retype New Password" required="true" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php
								echo "<p style='color:red;'><b>".$_GET['error']."</b></p>";
								echo "<p style='color:green;'><b>".$_GET['error1']."</b></p>";
							?>
                            </td>
                            <td>
                                <input type="submit" name="submit" value="Submit!" class="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <hr size="1" color="c0c0c0" width="95%" style="clear: both;">
            <br>
        </div>
    </center>
</body>

</html>