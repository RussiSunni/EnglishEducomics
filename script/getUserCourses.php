<?php

    $name = "";

    $name = htmlspecialchars($_GET["username"]);

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

    
    $sql = "SELECT c.name, c.category 
            FROM usercourses as uc
            JOIN courses as c ON uc.courseid = c.id
            WHERE userid = (SELECT id
            FROM users
            WHERE username = '".$name."')";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $courseJson = '{"usercourses": [';
        
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $folder = str_replace(' ', '-', $name);
            $courseJson .= json_encode($folder);
            $courseJson .= ', ';
        }
        $courseJson = preg_replace("/\, $/","",$courseJson);
        $courseJson .= ']}';
        echo $courseJson;
    } 
    else 
    {
        echo "0 results";
    }

    $conn->close();
?>
