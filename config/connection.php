<?php

function connection()
{
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "online_shop";

    // Create connection
    $connection = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        exit();
    }

    return $connection;
}
