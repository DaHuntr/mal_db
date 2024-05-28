<?php

function connect()
{
    session_start();
    $host = "127.0.0.1";
    $user = "root";
    $passwd = "";
    $db = "person_db";
    
    $tilkobling = mysqli_connect($host, $user, $passwd, $db);
    if ($tilkobling->connect_error) {
        die("Connection failed: " . $tilkobling->connect_error);
    }
    return $tilkobling;
}

?>