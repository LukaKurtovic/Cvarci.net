<?php

$dbhost = "us-cdbr-east-04.cleardb.com";
$dbuser = "b0238a2cb3108a";
$dbpass = "ce8f06ec";
$dbname = "heroku_8197e2e67b2b5ed";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect to database");
}
