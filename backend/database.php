<?php
$host     = "localhost";
$username = "root";
$password = "";
$db_name  = "internship_project";

try {
    $connection = new mysqli($host, $username, $password, $db_name);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

} catch (Exception $e) {
    echo $e->getMessage();
}

