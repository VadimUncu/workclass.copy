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
    <link rel="stylesheet" type="text/css" href="css/stylesAbout.css">
</head>

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
                    <a href="settings.php" class="logset">Settings</a>
                </div>
            </div>
            <hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
            <br>
            <div>
                <h2>About Guitar Garage</h2>
                <p>Guitar Garage was founded in the early 1920s and now distribute for top agencies like Lag Guitars, Jim Dunlop, Zoom, Deering Banjos, SX Guitars and many more across Ireland. We also produce Irish Tin Whistles, Bodhrans, Harps and publish
                    our own Irish music books and DVD tutors. We have a major music store at Blanchardstown Retail Park, which have recently been renovated to allow for a wider choice. In 2005, we launched one of Ireland's largest online music stores
                    where you can buy books, guitars and even pianos online! Our original Georges St. shop was a key location for the Oscar-winning Irish film 'Once'. And the Oscar ceremony used the theme of the hanging guitars from the shop in their
                    stage set for the award-winning song.
                </p>
                <h4>The Best Online Prices</h4>
                <p>We buy direct from the biggest manufacturers and distributors. We buy as much stock as we can get to achieve the best possible prices and we pass these savings on to you. We not only carry all the most up-to-date products but we also offer
                    huge discounts on end of life equipment. Check out our special offers section for latest details.</p>
                <h4>Safe Internet Shopping</h4>
                <p>Buying from our site is 100% safe. All orders are taken over a secure server based in Dublin, Ireland. This website is protected with SSL (secure socket layer) encryption, the highest standard in Internet security. Your credit card details
                    are sent directly to REALEX for processing. We will never store your credit card details anywhere on our systems.</p>
                <h4>Extensive Range</h4>
                <p>We are constantly adding to our range of products by reviewing all new product launches and including them on the website as appropriate.</p>
                <h4>Comprehensive Customer Support</h4>
                <p>Our Customer Support team is always on hand to offer you any advice you require on product selection, sales or after-sales queries. Our support lines are open 9.00 a.m. – 5.00 p.m. Mon - Friday.
                    <br><br> Telephone: +353 (0)1 860 6438
                    <br> Email: <a href="#">info@guitargarage.ie</a></p>
            </div>
            <hr size="1" color="c0c0c0" width="95%" style="clear: both;">
            <br>
        </div>
    </center>
</body>

</html>