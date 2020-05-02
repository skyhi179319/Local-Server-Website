<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Tables/Table.css" rel="Stylesheet" />
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Tables/Search-By/Race.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<form class="SearchForm" method="post" action="" enctype='multipart/form-data'>
    <p>Race:</p>
    <input class="race_input" type="text" name="Race"/>
    <input class="submit_button" type='submit' value='Check Races' name='Check_Race'>
</form>
<div class="TableDiv">
    <!-- Uploads Images And Race Names From Computer And Mobile Browsers -->
    <table class="DataTable" align="center">
        <tr class="TableHeaders">
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
        if(isset($_POST['Check_Race'])){
            $sql = "SELECT image, race FROM images WHERE race='$_POST[Race]'";
            $result = $conn->query($sql);
            // Image Query: Pulling From AXC Database
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $race= $row["race"];
                    $image_src = $row['image'];
                    echo "<tr>";
                    echo "<td>";
                    echo "<img src= '$image_src'>";
                    echo "</td>";
                    echo "<td>";
                    echo "<p>$race</p>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            else {
                echo "<tr>";
                # colspan is full table
                echo "<td colspan='2'>0 results</td>";
                echo "</tr>";
            }
        }
        echo "<tr>";
        # colspan is full table
        echo "<td colspan='2'><a href='http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Tables/Search-By/Race.php'>Refresh</a></td>";
        echo "</tr>";
        echo "<tr>";
        # colspan is full table
        echo "<td id='MobileBackButton' colspan='2' style='display: none;'><a href='http://127.0.0.0/Local-Server-Website/Home.php'>Return To Home Page</a></td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        $conn->close();
        ?>