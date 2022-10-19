
 <?php

 if (isset($_POST['username']) && isset($_POST['surname']) ) {
     echo "Welcome: " . $_POST['username'] .' ' . $_POST['surname'] .'<br>' ;
 };
 if (isset($_POST['phone']) ) {
     echo 'Phone: ' . $_POST['phone'];
};
?>