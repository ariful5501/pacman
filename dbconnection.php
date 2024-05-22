<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbdatabaseName="login";

$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbdatabaseName);

if(!$conn){
    die("Connection Failed.");
    
}
?>