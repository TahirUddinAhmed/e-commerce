<?php
 session_start();
 
 define('HOST', 'LOCALHOST');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'ecommerce');

 // connect query 
 $conn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);

 if(!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
 } 