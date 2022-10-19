<?php
$password = 'YcsRnGvmtS1w!ZLy';
$userName = 'php-user';
$databaseName = 'users';
$host = 'localhost' ;

$connection = mysqli_connect($host,$userName,$password,$databaseName,3306);
var_dump($connection);
?>
<!DOCTYPE html>
<html>
    <head>
   
        <title>Sign Up form</title>
    </head>

    <body > 
    
	
	<h1>Hi there!</h1>
    <h3>Create a new account</h3>

	
<form method="post" action="signup.php">

	<div>
	    <input type="text" name="username" value="" placeholder="Your Username"  required />
	</div>
	
    <div>
		<input type="text" name="surname" value="" placeholder="Your Surname"  required />
	</div>
    
    <div>
        <input  type="tel" name="phone" placeholder="Your Phone Number" required />
	</div>
	
    <div>
	    <input  type="submit" name="registerBtn" value="create account" />
	</div>
   
	
</form>
        
    </body>
</html>