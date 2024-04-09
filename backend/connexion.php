<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {

    $conn = new PDO('mysql:host=b5qqvwmrm7q7pxolxh7l-mysql.services.clever-cloud.com;dbname=b5qqvwmrm7q7pxolxh7l;charset=utf8;', 'uryrdeok7ieimbxs', 'ytiuIdcW4RitUu9gnI2B');

} catch (Exception $e) {
    die('Erreur de connexion: ' . $e->getMessage());
}
