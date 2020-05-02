<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/CSS/Form.css" rel="Stylesheet" />
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/CSS/Table.css" rel="Stylesheet" />
<form class="InputForm" method="post" action="" enctype='multipart/form-data'>
    <div class="FormDivider">
        <p>Race:</p>
        <input class="race_input" type="text" name="Race_Input"/>
        <p>Taken:</p>
        <input class="race_input" type="text" name="Taken_Input"/>
    </div>
    <div class="FormDivider">
        <p>In Database:</p>
        <input class="race_input" type="text" name="In_Database_Input"/>
        <p>Not In Database:</p>
        <input class="race_input" type="text" name="Not_In_Database_Input"/>
    </div>
    <div class="FormDivider">
        <p>GoPro:</p>
        <input class="race_input" type="text" name="GoPro_Input"/>
        <p>Drone:</p>
        <input class="race_input" type="text" name="Drone_Input"/>
    </div>
    <div class="FormDivider">
        <p>Phone:</p>
        <input class="race_input" type="text" name="Phone_Input"/>
    </div>
    <input class="submit_button" type='submit' value='Update' name='Update_Record'>
</form>
<!-- create Table -->
<div class="TableDiv">
    <!-- Uploads Image Captured Data -->
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
        $sql = "SELECT * FROM records";
        $result = $conn->query($sql);
        // Record Query: Pulling From AXC Database
        echo "<table class='DataTable' align='center'>";
        echo "<tr class='TableHeaders'>";
        echo "<th>Race</th>";
        echo "<th>Taken</th>";
        echo "<th>In Database</th>";
        echo "<th>Not In Database</th>";
        echo "<th>GoPro</th>";
        echo "<th>Drone</th>";
        echo "<th>Phone</th>";
        echo "</tr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $Race = $row["Race"];
                $Taken = $row["Taken"];
                $In_Database = $row['In_Database'];
                $Not_In_Database = $row['Not_In_Database'];
                $GoPro = $row['GoPro'];
                $Drone = $row['Drone'];
                $Phone = $row['Phone'];
                echo "<tr>";
                echo "<td>$Race</td>";
                echo "<td>$Taken</td>";
                echo "<td>$In_Database</td>";
                echo "<td>$Not_In_Database</td>";
                echo "<td>$GoPro</td>";
                echo "<td>$Drone</td>";
                echo "<td>$Phone</td>";
                echo "</tr>";
                echo "<tr>";
                # colspan is full table
                echo "<td colspan='7''><a href='http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/HTML/ImagesCaptured/Update.php'>Refresh</a></td>";
                echo "</tr>";
            }
        }
        else {
            echo "<tr>";
            # colspan is full table
            echo "<td colspan='7'>0 results</td>";
            echo "</tr>";
        }
        echo "<tr>";
        # colspan is full table
        echo "<td id='MobileBackButton' colspan='7' style='display: none;'><a href='http://127.0.0.0/Local-Server-Website/Home.php'>Return To Home Page</a></td>";
        echo "</tr>";
        echo "</table>";
        $conn->close();
        ?>
</div>
<!-- Update Database -->
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
if(isset($_POST['Update_Record'])){
    // Update record
    $sql = "UPDATE records SET Taken ='$_POST[Taken_Input]',In_Database = '$_POST[In_Database_Input]', Not_In_Database = '$_POST[Not_In_Database_Input]', GoPro = '$_POST[GoPro_Input]', Drone = '$_POST[Drone_Input]', Phone = '$_POST[Phone_Input]'  WHERE Race = '$_POST[Race_Input]'";
    mysqli_query($conn,$sql);
}
$conn->close();
?>