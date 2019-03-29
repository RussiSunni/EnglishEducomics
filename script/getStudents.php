<?php

    // connect to db
    $servername = "localhost";
    $username = "root";
    $password = "Shukuk@1";
    $dbname = "englisheducomics";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    $sql = "SELECT id, username, familiar 
            FROM users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $students = '{"students": [';
       
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $username = $row["username"];
            $familiar = $row["familiar"];
            $students .=  '{"id": "' .  $id . '", "username": "' . $username . '", "familiar": "' . $familiar . '"}, ';
        }

        $students = preg_replace("/\, $/","",$students);
        $students .= ']}';
        echo $students;

    } else {
        echo "0 results";
    }


    $conn->close();
?>