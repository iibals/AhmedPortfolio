<?php 
session_start();
//if (!isset($_SESSION['user_id'])) {
    header('Location: http://localhost/ghzalyWebSite/cpanel/cpanel.php');
    exit;
//} else {
//    header('Location: https//localhost')
//}