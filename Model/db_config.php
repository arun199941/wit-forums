<?php

$host = "localhost";
$user = "root";
$password = '';
$db_name = "wit-forum";

$conn = mysqli_connect($host,$user,$password,$db_name);

if (!$conn) {
    die("Error" . mysqli_error($conn));
}

