<!DOCTYPE HTML>
<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');
?>
<?php
$to = $_SESSION['email'];
$subject = "Test mail";
$message = "Your order has been confirmed. Your Guitar will be delivered soon !";
mail($to, $subject, $message, "");
$to_owner = "owner@guitarshop.com";
$subject_owner = "New Order";
$message_owner = "New Order made by $to.<br>";
$message_owner = $message_owner.$_POST['guitarid'];
mail($to_owner, $subject_owner, $message_owner, "");
?>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guitar Garage | Thank You</title>
	<link rel="stylesheet" type="text/css" href="css/stylesSucces.css">
	</head>
	<br>
	<body background="images/photo.jpg">
		<center>
		<div class="center">
			<!-- Code for Header-->
			<div style="width: 840px;">
				<div style="float: left;margin: 20px 0 0 20px;">
					<a href="home.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
				</div>
				
				<div class="logout">
					<a href="logout-script.php" class="logset">Logout!</a>
				</div>
				<div class="setting">
					<a href="settings.php" class="logset">Settings!</a>
				</div>
			</div>
			<hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
			<br>
			<div style="min-height: 200px;width:600px;">
				<p style="font-family:candara; font-size: 20px;">Thank you for ordering from Guitar Garage<br>The Guitars shall be delivered to you shortly.</p>
				<p style="font-family:candara; font-size: 20px;">Order some more Guitars <a href="home.php">here</a>.</p>
			</div>
			
			<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
			<br>
		</div>
	</body>
</html>