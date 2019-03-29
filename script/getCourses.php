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

    
    $sql = "SELECT id, name, category 
            FROM courses";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $courses = '{"courses": [';
    
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $id = $row["id"];
            $name = $row["name"];
            $category = $row["category"];
            $courses .=  '{"id": "' .  $id . '", "name": "' . $name . '", "category": "' . $category . '"}, ';
        }

        $courses = preg_replace("/\, $/","",$courses);
        $courses .= ']}';
        echo $courses;
    } 
    else 
    {
        echo "0 results";
    }

    $conn->close();
?>

   
          
         
           
         
   

    
