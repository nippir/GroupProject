<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petassure";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if(!$con){
        echo "Connection Failed";
    }