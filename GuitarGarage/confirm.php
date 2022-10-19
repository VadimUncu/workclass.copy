<!DOCTYPE HTML>
<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');
?>


<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guitar Garage | Thank You</title>
	<link rel="stylesheet" type="text/css" href="css/stylesConfirm.css">
	</head>
	<form action="success.php" method="POST">
		<body background="images/photo.jpg">
			<center>
			<div class="center">
				<!-- Code for Header-->
				<div>
					<div class="logo">
							<a href="home.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
					</div>
					
					<div class="logout">
						<a href="logout-script.php" class="logset">Logout!</a>
					</div>
					<div class="settings">
						<a href="settings.php" class="logset">Settings!</a>
					</div>
				</div>
				<hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
				<br>
				<br><font size="5em;">YOUR ORDER</font>
				<hr width="25%" style="margin-top: 0px;"size="2" color="rgb(156,1,0)" style="clear: both;">
				<div style="min-height: 100px;">
					<p style="font-family:candara;font-size: 1em;">Please confirm that you wish to order the following items.</p>
					<table border="0" style="font-family:georgia;">
						<tr>
							<td style="font-size: 15px;border-right: 1pt solid #cccccc;border-bottom : 1pt solid #cccccc;padding: 5px;"><b>Guitar Name</b></td>
							<td style="padding: 5px;border-bottom: 1pt solid #cccccc;text-align:right;"><b>Cost</b></td>
						</tr>
						<?php
						if (!empty($_GET['guitars']))
							{
							$ordered = $_GET['guitars'];
							$totalprice = 0;
							$price = 0;
							$message = "Guitar ID : ";
							if (empty($ordered))
								header('location: home.php');
							else							
								{
									for ($i=0; $i<count($ordered); $i++)
										{
										$id = $ordered[$i];
										$message = $message.$id." ";
										$con = mysqli_connect('localhost', 'root', '', '');
										$db = mysqli_select_db($con,'guitar_garage');
										$query = "SELECT Price, Name FROM guitars WHERE Name='$id'";
										$result = mysqli_query($con,$query);
										$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
										$price = ($row['Price']);
										$totalprice += $price;

										echo "<tr>";
									    echo "<td style=\"font-size: 15px;border-right: 1pt solid #cccccc;padding: 5px; \">$id</td>";
										echo "<td style=\"padding: 5px; text-align:right;\">$$price</td>";
										echo "<tr>";
										}
									echo "<tr>";
									echo "<td style=\"font-size: 15px;padding: 5px; border-top: 1pt solid #cccccc;border-right: 1pt solid #cccccc;\">Total</td>";
									echo "<td style=\"padding: 5px;text-align:right;border-top: 1pt solid #cccccc;\">$$totalprice</td>";
								}
							}
						else
							header('location: home.php');
						?>
						
						
						
					</table>
					<input type="hidden" name="guitarid" value="<?php echo $message; ?>">
					<input type="submit" name="submit" value = "Confirm!" class="confirm">
				</div>
				<br><br>
				<hr size="1" color="c0c0c0" width="95%" style="clear: both;">
				<br>
			</div>
		</body>
	</form>
</html>