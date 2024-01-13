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
    
        $query = "SELECT student.StudentName, student.ContactNumber
        FROM student
        INNER JOIN roomdetails ON student.StudentID = roomdetails.StudentID
        WHERE roomdetails.RoomID = '1'
        ";
        $result = $connection->query($query);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Student Name: " . $row["StudentName"] . ", Student Contact Number: " . $row["ContactNumber"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    
        $connection->close();
    }
   
?>