<?php
// Database Connection
$dbname = "absu-marketplace";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($connection){
    echo "Connected";
}else{
    echo "Failed to connect" . mysqli_connect_error();
}
?>