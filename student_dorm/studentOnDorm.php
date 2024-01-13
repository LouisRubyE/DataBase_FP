<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'student_dorm';

    // create connection
    $conn = new mysqli('localhost', 'root', '', 'student_dorm');

    if (isset($_POST['action']) && $_POST['action'] == 'get_data') {  
        $connection = new mysqli($host, $user, $password, $database);
    
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
    
        $query = "SELECT s.StudentID, s.StudentName, s.ContactNumber, r.RoomType, r.Cost
        FROM student s
        INNER JOIN stayingperiod sp ON s.StayingID = sp.StayingID
        INNER JOIN roomdetails r ON sp.RoomID = r.RoomID
        WHERE sp.LeavingDate IS NULL             
        ";
        $result = $connection->query($query);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo " Student ID: " . $row["StudentID"] . ", Student Name: " . $row["StudentName"] . ", Student Contact Number: " . $row["ContactNumber"] . ", Room Type: " . $row["RoomType"] .", Total Cost of Student Room: " . $row["TotalCost"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    
        $connection->close();
    }
   
?>