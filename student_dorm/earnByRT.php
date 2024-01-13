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
    
        $query = "SELECT rd.RoomType, SUM(p.Amount) AS TotalEarnings
        FROM payment p
        INNER JOIN stayingperiod sp ON p.StayingID = sp.StayingID
        INNER JOIN roomdetails rd ON sp.RoomID = rd.RoomID
        GROUP BY rd.RoomType        
        ";
        $result = $connection->query($query);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Total Earnings From Room Type: " . $row["TotalEarnings"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    
        $connection->close();
    }
   
?>