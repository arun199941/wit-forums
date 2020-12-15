<?php

$host = "localhost";
$user = "";
$password = '';
$db_name = "";

$conn = mysqli_connect($host,$user,$password,$db_name);

if (!$conn) {
    die("Error" . mysqli_error($conn));
}

