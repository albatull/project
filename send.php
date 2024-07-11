<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "movementrobot";
   
   $movedata = $_POST["move"];
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   
   $sql = "INSERT INTO movement_robot (ID, move_type)
   VALUES ('', '$movedata')";
   
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
   ?>