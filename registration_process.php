<?php
session_start();
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $faculty = $_POST['faculty'];
    $reg_no = $_POST['reg_no'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO students (username, password, faculty, reg_no, gender) VALUES ('$username', '$password', '$faculty', '$reg_no', '$gender')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        $_SESSION['username'] = $username;
        header("location: student_login.php"); // Redirect to a student login page
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
