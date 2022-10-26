<!DOCTYPE HTML>
<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Garage | Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/stylesHome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
</head>

<body background="images/photo.jpg">
    <br>
    <form action="confirm.php" method="GET">
        <center>
            <div class="center">
                <!-- Code for Header-->
                <header>

                    <nav>
                        <div class="about">
                            <a href="about.php" class="set">About Us</a>
                            <a href="settings.php" class="set">Settings</a>
                            <a href="logout-script.php" class="set">Logout</a>
                        </div>
                    </nav>

                    <div class="logo">
                        <a href="home.php"><img src="images/logo.jpeg" style="height: 100px; width:300px;"></a>
                    </div>
                </header>
                <hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
                <br>
                <main>
                    <div class="container">
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/1r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Blueridge has been making beautiful, accurate historical recreations of pre-war guitars for over 35 years.Blueridge has made waves in the folk and bluegrass community for decades and continues to do so, whether
                                                you're a beginner or a pro.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Blueridge</b></p>
                                <p><i>$449</i></p>
                                <input type="checkbox" name="guitars[]" value="Blueridge">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/2r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Yamaha guitars have captivated the ears of listeners and players for over 60 years. The company’s wide range of acoustic and electric models remain ubiquitous in every kind of musical genre, from classical to
                                                folk to hard rock.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Yamaha</b></p>
                                <p><i>$329</i></p>
                                <input type="checkbox" name="guitars[]" value="Yamaha">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/3r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Ovation is one of the first guitar brands to use synthetic materials in their guitars. The body of Ovation guitars is generally made of a synthetic material called Lyrachord. A material that can be can be made
                                                as thin as desired for vibration purposes and yet remain very strong.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Ovation</b></p>
                                <p><i>$539</i></p>
                                <input type="checkbox" name="guitars[]" value="Ovation">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div style="text-align: center;padding: 20px; margin-top: 20px;">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/4r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">The Fender story begins over 70 years ago in a small Fullerton, California workshop. The guitar’s contoured body and double cutaway design provided greater comfort and playability, making it easier to access
                                                the higher frets and explore a new range of sounds.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Fender</b></p>
                                <p><i>$299</i></p>
                                <input type="checkbox" name="guitars[]" value="Fender">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr size="1" color="c0c0c0" width="90%">
                    <div class="container">
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/5r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Easy on the fingers, and even easier on the wallet, Jasmine Guitars are known for their durability, quality, and high level of craftsmanship. With stunning intonation and flawless tone, they're specifically
                                                designed for the novice player. </p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Jasmine </b></p>
                                <p><i>$349</i></p>
                                <input type="checkbox" name="guitars[]" value="Jasmine">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/6r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Gibson is a guitar brand that needs no introduction. They are known for creating some of the most iconic electric guitars in history, the main one being the famous Gibson Les Paul. Despite being released back
                                                in the 1950s.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Gibson</b></p>
                                <p><i>$249</i></p>
                                <input type="checkbox" name="guitars[]" value="Gibson">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/7.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Epiphone started as a family business in 1873 as a luxury banjo manufacturer. In the 1930’s, they switched up their business model and began producing high-end guitars. They grew in popularity and by the 1950’s,
                                                became Gibson’s main rival.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Epiphone</b></p>
                                <p><i>$369</i></p>
                                <input type="checkbox" name="guitars[]" value="Epiphone">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div style="text-align: center;padding: 20px; margin-top: 20px;">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/8r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Marshall Amplification makes some of the best guitar amps on the planet, and their “signature” logo is an iconic symbol to have splashed on the backline of any stage setup. Marshall is undoubtedly one of the
                                                most recognizable amplifier brands on the planet.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Marshall</b></p>
                                <p><i>$459</i></p>
                                <input type="checkbox" name="guitars[]" value="Marshall">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr size="1" color="c0c0c0" width="90%">
                    <div class="container">
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/1r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Blueridge has been making beautiful, accurate historical recreations of pre-war guitars for over 35 years.Blueridge has made waves in the folk and bluegrass community for decades and continues to do so, whether
                                                you're a beginner or a pro.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Blueridge</b></p>
                                <p><i>$449</i></p>
                                <input type="checkbox" name="guitars[]" value="Blueridge">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                            <br>
                            <hr size="1" color="c0c0c0">
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/2r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Yamaha guitars have captivated the ears of listeners and players for over 60 years. The company’s wide range of acoustic and electric models remain ubiquitous in every kind of musical genre, from classical to
                                                folk to hard rock.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Yamaha</b></p>
                                <p><i>$329</i></p>
                                <input type="checkbox" name="guitars[]" value="Yamaha">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                            <br>
                            <hr size="1" color="c0c0c0">
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/3r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Ovation is one of the first guitar brands to use synthetic materials in their guitars. The body of Ovation guitars is generally made of a synthetic material called Lyrachord. A material that can be can be made
                                                as thin as desired for vibration purposes and yet remain very strong.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Ovation</b></p>
                                <p><i>$539</i></p>
                                <input type="checkbox" name="guitars[]" value="Ovation">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                            <br>
                            <hr size="1" color="c0c0c0">
                        </div>
                        <div class="content">
                            <div style="text-align: center;padding: 20px; margin-top: 20px;">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/4r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">The Fender story begins over 70 years ago in a small Fullerton, California workshop. The guitar’s contoured body and double cutaway design provided greater comfort and playability, making it easier to access
                                                the higher frets and explore a new range of sounds.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Fender</b></p>
                                <p><i>$299</i></p>
                                <input type="checkbox" name="guitars[]" value="Fender">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                            <br>
                            <hr size="1" color="c0c0c0">
                        </div>
                    </div>
                    <div class="container">
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/9r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Ibanez started in the guitar business by importing high-end classical guitars, originally made by the renowned Spanish guitar builder Salvador Ibáñez. Ibanez's best-selling bass is the GSR180, an extremely affordable
                                                model with a great range of features such as active electronics.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Ibanez</b></p>
                                <p><i>$649</i></p>
                                <input type="checkbox" name="guitars[]" value="Ibanez">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/esp.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Hofner has always been a family affair and remains so today. Our electric guitars are used by some of the most discerning professional players who demand quality. Our Violin Bass has become one of the world's
                                                iconic guitars and remains, as the preferred bass guitar for many.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Hofner</b></p>
                                <p><i>$699</i></p>
                                <input type="checkbox" name="guitars[]" value="Hofner">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div class="border-right">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/11.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">It's for good reason, too, since Schecter Guitar Research has spent its four decades in business establishing itself as the maker of some of the best gear a musician can own. Schecter Guitar Research is another
                                                manufacturer that creates quality bass guitar musician.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Schecter</b></p>
                                <p><i>$479</i></p>
                                <input type="checkbox" name="guitars[]" value="Schecter">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                        <div class="content">
                            <div style="text-align: center;padding: 20px; margin-top: 20px;">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="images/12r.jpg" height="150" width="150">
                                        </div>
                                        <div class="flip-box-back">
                                            <p class="text">Blackstar is relatively new to the scene, forming in 2007 and founded by a group of ex-Marshall employees; it is a British company with a steady following in the music world. Blackstar is known for producing
                                                and manufacturing guitar amps, and effects units.</p>
                                        </div>
                                    </div>
                                </div>
                                <p><b>Blackstar</b></p>
                                <p><i>$529</i></p>
                                <input type="checkbox" name="guitars[]" value="Blackstar">
                                <input type="submit" name="submit" value="Buy" class="buy">
                            </div>
                        </div>
                    </div>
                    <button class="load">Show more</button>
                    <hr size="1" color="c0c0c0" width="95%">
                    <br>
                </main>

                <!--Code for main footer-->

                <footer class="site-footer">

                    <div class="social-icons">

                        <a href="#" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>

                    </div><br>
                    <div>
                        <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                            <a href="home.php">Guitar Garage</a>.
                        </p>
                    </div>
                </footer>

            </div>
        </center>
    </form>
    <br>
    <script src="js/home.js"></script>
</body>

</html>