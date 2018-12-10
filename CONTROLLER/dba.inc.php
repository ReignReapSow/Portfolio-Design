<?php
    /* CONNECTOR IS WORKING */
    /*  PDO == my_portfolio DATABASE connection */
    $server   = "localhost";
    $dbname   = "my_portfolio";
    $username = "root";
    $pass     = " ";

    try {
        $conn = new PDO("mysql:host=$server; $dbname, $username, $pass ");

        //activates PDO error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //TODO == CONNECTED IF IT DOES NOT SHOW A WARNING
        }
    catch(PDOException $e) {
        echo "Connection failed: <br>".
            "<p style='color: red; font-size: 1.2rem; z-index: 4;'>".
            $e->getMessage()."</p>";
    }

