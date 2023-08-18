<?php

$server_name = "localhost";
$user_username = "id20871157_nikole";
$password = "StrongPassword23!";
$db_name = "id20871157_localhost";

$conn = mysqli_connect($server_name, $user_username, $password, $db_name);

if(!$conn){
    echo "Connection Failed!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Intranet</title>
</head>
<body>
    <h1>Welcome to the Employee Intranet</h1>
    <p>Here you can find important information:</p>
    <ul>
        <li>Number of tourists booked for the next flight: 100</li>
        <li><a href="#">HR Liability Release Form</a></li>
    </ul>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
