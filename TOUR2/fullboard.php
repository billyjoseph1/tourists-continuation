<?php
if (isset($_POST['submit'])) {
    // Get the form data
    $people = $_POST['people'];
    $rooms = $_POST['rooms'];
    $datei = $_POST['datei'];
    $dateo = $_POST['dateo'];
    $menu = $_POST['menu'];
    $person = $_POST['person'];
    $date= $_POST['date'];
    $roomtable = $_POST['roomtable'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "fullboard";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO hotel2 (people, rooms, datei, dateo, menu, person, date, roomtable) VALUES ('$people', '$rooms','$datei','$dateo', '$menu', '$person', '$ddate','$roomtable')";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    echo "data successfully inserted";
    header("Location: hotel.html");
    exit();
}
?>