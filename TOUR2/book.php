<?php
if (isset($_POST['submit'])) {
    // Get the form data
    $people = $_POST['people'];
    $rooms = $_POST['rooms'];
    $datei = $_POST['datei'];
    $dateo = $_POST['dateo'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "booking";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO hotel1 (people, rooms, datei, dateo) VALUES ('$people', '$rooms','$datei','$dateo')";
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