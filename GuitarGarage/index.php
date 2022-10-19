<!DOCTYPE HTML>
<?php 
session_start();
if (isset($_SESSION['email']))
	header('location: home.php');
?>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guitar Garage</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/stylesIndex.css">
	</head>
		<body background="images/photo.jpg">
		<div id="top"></div>
			<br>
			<center>
				<div class="center">
					<!-- Code for Header-->
					<div class="header">
						<div class="logo">
							<a href="index.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;" ></a>
						</div>
						<div class="signup">
							<a href="login.php" class="signlogin">Login/Sign Up</a>
						</div>
					</div>
					<hr size="2px" color="rgb(156,1,0)" width="95%" style="clear: both;">
					<!--Code for Body-->
					<div class="position">
						<div class="img">
							<img src="images/gipson.jpg" />
						</div>
						<div class="content">
							<p>Melody Maker Special Gibson introduced its beloved Melody Maker "student" lineup in 1959, and it has been a favorite of players seeking great tone at a great value ever since. In the spirit of the countless Melody Makers that have been modded, hotrodded and upgraded over the years by players aiming to emulate the performance of more up-market guitars, Gibson USA introduces the Melody Maker Special.
							</p>
							<br><br>
							<div class="guitarName">
								<span>Gibson Melody Maker</span>
							</div>
							<div class="price">
								<span>Price: $799</span>
							</div>
							<br><br><br>
						</div>
					</div>
					<hr size="1px" color="rgb(55, 55, 55)" width="90%" style="clear: both;">
					<div class="position">
						<div class="img">
							<img src="images/ibanez.jpg"/>
						</div>
						<div class="content">
							<p>The smooth GRG-profile maple neck can be played incredibly fast, and with a stunning rosewood fingerboard that holds 24 jumbo frets you will never struggle with speedy scale runs.
							
                              The GRG140 has a versatile pickup combination of a bridge humbucker, a centre single-coil and a neck single-coil. If you are looking for crisp notes with a great deal of articulation, fat and beefy rhythm tones, or chunky ground-shaking rhythm, this is the guitar for you.
                             </p> 
							<br><br>
							<div class="guitarName">
								<span>Ibanez Electric Guitar</span>
							</div>
							<div class="price">
								<span>Price: $599</span>
							</div>
							<br><br><br>
						</div>
					</div>
					<hr size="1px" color="rgb(55, 55, 55)" width="90%" style="clear: both;">
                    <div class="position">
						<div class="img">
							<img src="images/esp.jpg"/>
						</div>
						<div class="content">
							<p>
							Boasting all manner of metal guitarists in their signature artist roster, ESP's and the LTD brand are set to continue their dominance over the metal scene as the choice of some of today's most popular metal acts, like Kirk Windstein and Pepper Keenan of Down, Alexi Laiho of Children of Bodom and Ozzy Osbourne's latest guitarist Gus G.
							</p>
							<br><br>
							<div class="guitarName">
								<span>ESP Electric Guitar</span>
							</div>
							<div class="price">
								<span>Price: $399</span>
							</div>
							<br><br><br>
						</div>
					</div>
					<hr size="1px" color="rgb(55, 55, 55)" width="90%" style="clear: both;">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To view the rest of the guitars in our garage, <a href="#top">Sign Up/Login</a> at the top of our site.</p>
					<br>
				</div>
			</center>
			<br>
			<script src="js/index.js"></script>
		</body>
</html>	