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

    
    $sql = "SELECT c.name, completed 
            FROM usercourses as uc
            JOIN courses as c ON uc.courseid = c.id
            WHERE userid = (SELECT id
            FROM users
            WHERE username = '".$name."')";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $userCourse = '{"usercourses": [';
        
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $completed = $row["completed"];
            $folder = str_replace(' ', '-', $name);

            $userCourse .= '{"name": "' . $folder . '", "completed": "'. $completed .'"}';
            $userCourse .= ', ';
        }
        $userCourse = preg_replace("/\, $/","",$userCourse);
        $userCourse .= ']}';
        echo $userCourse;
    } 
    else 
    {
        echo "0 results";
    }

    $conn->close();
?>
