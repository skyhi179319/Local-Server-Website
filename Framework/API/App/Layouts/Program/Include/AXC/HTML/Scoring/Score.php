<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Score.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<form class="InputForm" method="post" action="" enctype='multipart/form-data'>
    <p>Name:</p>
    <input class="race_input" type="text" name="Name"/>
    <p>Group:</p>
    <input class="race_input" type="text" name="Group"/>
    <p>Place:</p>
    <input class="race_input" type="text" name="Place"/>
    <input class="submit_button" type='submit' value='Check Races' name='Insert_Record'>
</form>

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
if(isset($_POST['Insert_Record'])){
    // Insert record
    // When Entering M/C Racers Please Use MC
    $query = "insert into scoring(Name,Race_Group,Place) values('$_POST[Name]','$_POST[Group]','$_POST[Place]')";
    mysqli_query($conn,$query);
}
$conn->close();
?>