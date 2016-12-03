<?php
$dbHost = 'localhost';
$dbUser = 'rado';
$dbPass = 'rado13579';
$dbName = 'homie';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>