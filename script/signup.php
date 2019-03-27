<?php
      
 
      $name = $email = "";
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = test_input($_POST["name"]);
         $email = test_input($_POST["email"]);
      }
      
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
     echo "Connected successfully";


     // get the form values
     $sql = "INSERT INTO users (username, email)
     VALUES ('".$name."', '".$email."')";




     if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }


     $conn->close();

   ?>