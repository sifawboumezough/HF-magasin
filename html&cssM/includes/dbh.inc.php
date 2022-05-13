<?php

$servername = "localhost";
$dBUsername = 'root';
$dBpassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername , $dBUsername, $dBpassword ,$dbName);

if(!$conn) {
    die("Connection Failed !" .mysqli_connect_error());
}