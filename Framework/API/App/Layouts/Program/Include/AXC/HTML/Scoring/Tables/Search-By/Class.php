<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Tables/Table.css" rel="Stylesheet" />
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Tables/Search-By/Class.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<div class="MobileClassPage">
    <form class="InputForm" method="post" action="" enctype='multipart/form-data'>
        <p>Class:</p>
        <input class="race_input" type="text" name="Class"/>
        <input class="submit_button" type='submit' value='Check Class' name='Check_Class_Record'>
    </form>
    <div id="MobileTable" class="TableDiv">
        <!-- Creates Table For Name Of Person, Group And Place For All Devices-->
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
            if(isset($_POST['Check_Class_Record'])){
                $sql = "SELECT * FROM scoring WHERE Race_Group='$_POST[Class]' ORDER BY Place";
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
            }
            echo "<tr>";
            # colspan is full table
            echo "<td colspan='3'><a href='http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Tables/Search-By/Class.php'>Refresh</a></td>";
            echo "</tr>";
            echo "<tr>";
            # colspan is full table For Mobile
            echo "<td id='MobileBackButton' colspan='3' style='display: none;'><a href='http://127.0.0.0/Local-Server-Website/Home.php'>Return To Home Page</a></td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";
            $conn->close();
            ?>
</div>