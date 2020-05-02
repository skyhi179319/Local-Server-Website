<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/CSS/Form.css" rel="Stylesheet" />
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
    <input class="submit_button" type='submit' value='Insert' name='Insert_Record'>
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
    $query = "insert into records(Race,Taken,In_Database,Not_In_Database,GoPro,Drone,Phone) values('$_POST[Race_Input]','$_POST[Taken_Input]','$_POST[In_Database_Input]','$_POST[Not_In_Database_Input]','$_POST[GoPro_Input]','$_POST[Drone_Input]','$_POST[Phone_Input]')";
    mysqli_query($conn,$query);
}
$conn->close();
?>