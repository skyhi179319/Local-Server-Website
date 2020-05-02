<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Tables/Table.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<div class="TableDiv">
    <!-- Creates Table For Name Of Person, Group And Place For Only Computer And Tablets-->
    <table class="DataTable" align="center">
        <tr class="TableHeaders">
            <th>Name</th>
            <th>Group</th>
            <th>Place</th>
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
        $sql = "SELECT Name, Race_Group, Place FROM scoring";
        $result = $conn->query($sql);
        // Data Query: Pulling From AXC Database
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $Name= $row["Name"];
                $Group = $row['Race_Group'];
                $Place = $row['Place'];
                echo "<tr>";
                echo "<td>";
                echo "<p>$Name</p>";
                echo "</td>";
                echo "<td>";
                echo "<p>$Group</p>";
                echo "</td>";
                echo "<td>";
                echo "<p>$Place</p>";
                echo "</td>";
                echo "</tr>";
            }
        }
        else {
            echo "<tr>";
            # colspan is full table
            echo "<td colspan='3'>0 results</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        $conn->close();
        ?>