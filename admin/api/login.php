<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST["username"];
    $admin_password = $_POST["password"];

    $connection = new mysqli("localhost:3306", "root", "Abcd!234", "adyapana");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $table = $connection->query("SELECT * FROM `admin` WHERE `Username`='$admin_username' AND `password`='$admin_password';");

    if ($table->num_rows !== 0) {
        $response = "Success";
    } else {
        $response = "Error";
    }

    echo(json_encode($response));
}


?>