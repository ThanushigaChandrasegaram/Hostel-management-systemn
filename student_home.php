<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
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

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #4b0082;
        }

        .hostel-container {
            display: flex;
            justify-content: space-around;
        }

        .hostel-column {
            flex: 1;
            margin: 10px;
        }

        .room-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 10px 0;
            padding: 20px;
            text-align: center;
        }

        .room-card button {
            background-color: #bd72d5;
            color: rgb(54, 14, 52);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .room-card button:hover {
            background-color: #bea5d0;
        }
        .view-requests-button {
        background-color: #bd72d5;
        color: rgb(54, 14, 52);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin: 20px 0;
    }

    .view-requests-button:hover {
        background-color: #bea5d0;
    }
    </style>
</head>
<body>
<header style="background-color: #d7bce1; color: rgb(90, 0, 126); text-align: left; padding: 10px; display: flex; justify-content: space-between; align-items: center; font-size: 25px; font-weight: bold; padding-right: 10px; width: 100%; margin: 0;">
        <img src="HMS.png" alt="University of Vavuniya Logo" style="height: 80px;">
        <div style="display: inline-block;">
            <div style="color: #4b0082;">Hostel Management System <br> University of Vavuniya</div>
        </div>
    </header>

    <div class="container">
        <h1>Welcome, Student!</h1>
        <div class="hostel-container">
            <div class="hostel-column">
                <h2>Boys Hostel - Building 1</h2>
                <div id="boys_building_1_rooms"></div>
                <script>displayRooms('boys_building_1', 5, 'boys_building_1_rooms');</script>
            </div>
            <div class="hostel-column">
                <h2>Girls Hostel - Building 1</h2>
                <div id="girls_building_1_rooms"></div>
                <script>displayRooms('girls_building_1', 5, 'girls_building_1_rooms');</script>
            </div>
            <div class="hostel-column">
                <h2>Girls Hostel - Building 2</h2>
                <div id="girls_building_2_rooms"></div>
                <script>displayRooms('girls_building_2', 5, 'girls_building_2_rooms');</script>
            </div>
        </div>
    </div>

    <div class="container">
    

    <!-- Button to view requests -->
    <a href="view_requests.php" class="view-requests-button">View Your Requests</a></div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        displayRooms('boys_building_1', 5, 'boys_building_1_rooms');
        displayRooms('girls_building_1', 5, 'girls_building_1_rooms');
        displayRooms('girls_building_2', 5, 'girls_building_2_rooms');
    });

    function requestRoom(hostel, roomNo) {
        var confirmation = confirm('Are you sure you want to request Room ' + roomNo + ' in ' + hostel + '?');
        if (confirmation) {
            // Use AJAX to send a request to the server for processing
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText); // Display the response from the server (for debugging)
                }
            };
            xmlhttp.open("GET", "process_request.php?hostel=" + hostel + "&roomNo=" + roomNo, true);
            xmlhttp.send();
        }
    }

    function displayRooms(hostel, numRooms, containerId) {
        var container = document.getElementById(containerId);
        for (let i = 1; i <= numRooms; i++) {
            var roomCard = document.createElement('div');
            roomCard.className = 'room-card';
            roomCard.innerHTML = '<p>Room No: ' + i + '</p>' +
                '<button onclick="requestRoom(\'' + hostel + '\', ' + i + ')">Apply</button>';
            container.appendChild(roomCard);
        }
    }
</script>

</body>

</html>
