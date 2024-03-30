<?php
    // if not logged in, go to login page
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
?>