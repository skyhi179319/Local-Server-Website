<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Settings.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<div class="SettingsAreaForm">
    <div class="FormArea">
        <p>Reset Scoring System</p>
        <form class="SettingsForm" method="post" action="" enctype='multipart/form-data'>
            <input class="submit_button" type='submit' value='Reset Scoring' name='Rest_Scoring'>
        </form>
    </div>
    <div class="FormArea">
        <p>Update Racer Info</p>
        <form class="SettingsForm" method="post" action="" enctype='multipart/form-data'>
            <p>Name:</p>
            <input class="race_input" type="text" name="Racer_Name"/>
            <p>Place:</p>
            <input class="race_input" type="number" name="Racer_Place"/>
            <input class="submit_button" type='submit' value='Update Racer' name='Update_Racer'>
        </form>
    </div>
    <div class="FormArea">
        <p>Delete Racer</p>
        <form class="SettingsForm" method="post" action="" enctype='multipart/form-data'>
            <p>Racer:</p>
            <input class="race_input" type="text" name="Delete_Racer_Name"/>
            <input class="submit_button" type='submit' value='Delete Racer' name='Delete_Racer'>
        </form>
    </div>
</div>
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
if(isset($_POST['Rest_Scoring'])) {
    // Resets The Data In The Scoring Table
    $query = "TRUNCATE TABLE scoring";
    mysqli_query($conn,$query);
}
if(isset($_POST['Update_Racer'])) {
    // Updates Racer Place Info
    $query = "UPDATE scoring SET Place='$_POST[Racer_Place]' WHERE Name='$_POST[Racer_Name]'";
    mysqli_query($conn,$query);
}
if(isset($_POST['Delete_Racer'])) {
    // Deletes Racer Place Info
    $query = "DELETE FROM scoring WHERE Name='$_POST[Delete_Racer_Name]'";
    mysqli_query($conn,$query);
}
$conn->close();
?>
