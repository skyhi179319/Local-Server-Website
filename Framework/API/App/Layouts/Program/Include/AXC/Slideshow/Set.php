<?php
function Set()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "arizona";
    $dbname = "axc";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT image FROM images ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    // Image Query: Pulling From AXC Database
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $image_src = $row['image'];
            echo "<img class='MainFade' src= '$image_src'>";
        }
    }
}

Set();
?>