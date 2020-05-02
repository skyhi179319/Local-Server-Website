<div>
    <!-- Change Veiw Point: Scrolling Activate When Table Gets Big -->
    <table align="center">
        <tr>
            <th>Image</th>
            <th>Race</th>
        </tr>
<?php
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
$sql = "SELECT image, race FROM images";
$result = $conn->query($sql);
// Profile Delete: Refresh Page Using PHP After Query
// Button Will Be Where The Profile Button Will Be
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        $race= $row["Number"];
        $image_src = $row['image'];
        echo "<tr>";
        echo"<td>";
        echo "<img src= '$image_src'>";
        echo "</td>";
        echo "<td>";
        echo "<p>$race</p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
else {
    echo "0 results";
}
$conn->close();
?>