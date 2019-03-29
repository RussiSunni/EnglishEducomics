<?php

    $name = htmlspecialchars($_GET["username"]);
    $courseId = htmlspecialchars($_GET["courseId"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

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

    $sql = "UPDATE usercourses 
            SET completed = 1
            WHERE courseid = '".$courseId."' AND userid =  ((SELECT id
            FROM users
            WHERE username = '".$name."'))
            ";

    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 

    $conn->close();
?>
