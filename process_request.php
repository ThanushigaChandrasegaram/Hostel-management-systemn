<?php


if (isset($_GET['hostel']) && isset($_GET['roomNo'])) {
    $hostel = $_GET['hostel'];
    $roomNo = $_GET['roomNo'];

   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostel_management";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO room_requests (student_id, room_no, hostel, status) VALUES (1, $roomNo, '$hostel', 'Requested')";
    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request parameters.";
}
?>
