<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "const_db";

$dsn = "mysql:host=$host; dbname=$dbname";
$pdo = new PDO($dsn, $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


// echo "connected";

