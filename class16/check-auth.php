<?php
if($form_submitted) {
    setcookie('type_id', $new_type_id, time() + 60*60*24*30, '/');
    header("Location: login.php");
    exit;
}

if($_SESSION["loggedIn"] != true){
    echo 'not logged in';
    header("Location: login.php");
    exit;
}
?>