<?php

$server="localhost";
$username="root";
$password="eweeww";
$database="obnews";
$conn=new mysqli($server, $username, $password, $database);
if($conn->connect_error){
    die("connection failed");
}
echo "connection success";
conn->close();
?>