<?php
session_start();

// Check if the admin is authenticated
if (!isset($_SESSION["admin_authenticated"]) || $_SESSION["admin_authenticated"] !== true) {
    // Redirect to the login page if not authenticated
    header("Location: admin_login.php");
    exit();
}

// database connection 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the request ID from the URL
$requestId = isset($_GET['id']) ? $_GET['id'] : null;

// Check if the request ID is provided
if ($requestId) {
    // Update the status in the database to 'Rejected'
    $updateQuery = "UPDATE room_requests SET status = 'Rejected' WHERE id = $requestId";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Request rejected successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request parameters.";
}

// Close the database connection
$conn->close();
?>
