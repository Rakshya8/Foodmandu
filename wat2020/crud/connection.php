<?php

$hostname="localhost";
$username ="root";
$password="";
$databaseName="mydb";
$connection =mysqli_connect($hostname, $username,$password,$databaseName) or exit("Unable to connect!");
//if($connection)
//        echo "Connected";
//else
//    echo "Failed";
?>