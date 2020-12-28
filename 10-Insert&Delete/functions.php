<?php
    /*Hostname*/ $host = "localhost";
    /*Username*/ $user = "root";
    /*Password*/ $pass = "";
    /*Database*/ $db = "phpdasar";

    $conn = mysqli_connect($host, $user, $pass, $db);



    function query ($query) {
        global $conn;
        $result = mysqli_query($conn, "$query");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
 ?>