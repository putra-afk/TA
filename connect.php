<?php
    $host = "localhost";
    $db = "Kos";
    $uname = "root";
    $pass = "";

    $connect = mysqli_connect($host, $uname, $pass, $db);

    if (!$connect) {
        echo "Could not connect to database " . mysqli_connect_error();
    }