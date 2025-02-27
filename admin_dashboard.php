<?php
session_start();

// Set the default username and password
$defaultUsername = "admin";
$defaultPassword = "admin";

// Check if the admin is authenticated
if (
    !isset($_SESSION["admin_authenticated"]) ||
    $_SESSION["admin_authenticated"] !== true ||
    ($_POST["username"] !== $defaultUsername || $_POST["password"] !== $defaultPassword)
) {
    // Redirect to the login page if not authenticated
    header("Location: admin_login.php?error=1");
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

// Fetch room requests from the database
$selectQuery = "SELECT * FROM room_requests";
$result = $conn->query($selectQuery);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #d7bce1;
            color: rgb(90, 0, 126);
            text-align: left;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 25px;
            font-weight: bold;
            padding-right: 10px;
            width: 100%;
            margin: 0;
        }

        .dashboard-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            color: #4b0082;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            background-color: #bd72d5;
            color: rgb(54, 14, 52);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
        }

        .button:hover {
            background-color: #bea5d0;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
        .back-to-login {
        position: fixed;
        bottom: 10px;
        right: 10px;
        background-color: #bd72d5;
        color: rgb(54, 14, 52);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .back-to-login:hover {
        background-color: #bea5d0;
    }
    </style>
</head>

<body>
    <header>
        <img src="HMS.png" alt="University of Vavuniya Logo" style="height: 80px;">
        <div style="display: inline-block;">
            <div style="color: #4b0082;">Hostel Management System <br> University of Vavuniya</div>
        </div>
    </header>

    <div class="dashboard-container">
        <h2>Welcome, Admin!</h2>
        <h3>Room Requests</h3>
        <?php if ($result->num_rows > 0) : ?>
            <table>
                <tr>
                    <th>Request ID</th>
                    <th>Student ID</th>
                    <th>Room No</th>
                    <th>Hostel</th>
                    <th>Status</th>
                    <th>Request Date</th>
                    <th>Action</th> 
                </tr>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["student_id"] ?></td>
                        <td><?= $row["room_no"] ?></td>
                        <td><?= $row["hostel"] ?></td>
                        <td><?= $row["status"] ?></td>
                        <td><?= $row["request_date"] ?></td>
                        <td>
                            <!-- Buttons to approve or reject requests -->
                            <a href="approve_request.php?id=<?= $row["id"] ?>" class="button">Approve</a>
                            <a href="reject_request.php?id=<?= $row["id"] ?>" class="button">Reject</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else : ?>
            <p>No room requests found.</p>
        <?php endif; ?>
        <p><a href="admin_logout.php">Logout</a></p>
        <a href="admin_login.php" class="back-to-login">Back to Login</a>
    </div>
    <div class="dashboard-container">
        <?php
        if (isset($_GET["error"]) && $_GET["error"] == 1) {
            echo "<p class='error-message'>Invalid username or password</p>";
        }
        ?>
    </div>
</body>

</html>
