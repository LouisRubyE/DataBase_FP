<?php

    $StudentID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $ContactNumber = $_POST['ContactNumber'];
    $RoomNumber = $_POST['RoomNumber'];
    $StayingID = $_POST['StayingID'];   


    // create connection
    $conn = new mysqli('localhost', 'root', '', 'student_dorm');

    // check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into student(StudentID, StudentName, ContactNumber, RoomNumber, StayingID)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("isiii", $StudentID, $StudentName, $ContactNumber, $RoomNumber, $StayingID);
        $execval = $stmt->execute();
		echo $execval;
        echo "Registered Successfully";
        $stmt -> close();
        $conn -> close();
    }

?>