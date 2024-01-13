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
    
        $query = "SELECT r.RoomType, COUNT(s.StudentID) AS NumberOfStudents
        FROM roomdetails r
        LEFT JOIN student s ON r.RoomID = s.RoomNumber
        GROUP BY r.RoomType                    
        ";
        $result = $connection->query($query);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo " RoomType: " . $row["RoomType"] . ", Number Of Students:" . $row["NumberOfStudents"]  ."<br>";
            }
        } else {
            echo "no results found";
        }
    
        $connection->close();
    }
   
?>