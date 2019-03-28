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
        echo "<table class='table'><tr><th>ID</th><th>Name</th><th>Familiar</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["familiar"]."</td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>