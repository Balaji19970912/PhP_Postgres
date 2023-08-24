<?php

    $host_Name = "localhost";
    $db_Name = "anime";
    $user_Name = "postgres";
    $password = "Balaji@786";

    $conn = pg_connect("host = $host_Name dbname=$db_Name user=$user_Name password=$password");

    if($conn) {
        echo "Yeah!";
    } else {
        echo "Database connection failed!";
        die();
    }

    $sql_Query1 = "SELECT * FROM person;";
    $res_Query1 = pg_query($conn, $sql_Query1);

    while($row = pg_fetch_assoc($res_Query1)) {
        echo "<pre>";
        print_r($row);
    }


?>