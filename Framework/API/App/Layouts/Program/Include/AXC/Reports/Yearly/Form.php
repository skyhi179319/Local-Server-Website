<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Reports/Yearly/Form.css" rel="Stylesheet" />
<script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
<script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
<form class="InputForm" method="post" action="" enctype='multipart/form-data'>
    <p>Year:</p>
    <input class="race_input" type="number" name="Year"/>
    <input class="submit_button" type='submit' value='Insert' name='Insert_Record'>
    <input class="submit_button" type='submit' value='Update' name='Update_Record'>
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
    $RaceSQL = "SELECT COUNT(`Race`) AS TotalRaces FROM `records`";
    $RaceResult = mysqli_query($conn, $RaceSQL);
    $RaceRow = mysqli_fetch_object($RaceResult) ;
    $Race = $RaceRow->TotalRaces;
    $TakenSQL = "SELECT SUM(`Taken`) AS TotalTaken FROM `records`";
    $TakenResult = mysqli_query($conn, $TakenSQL);
    $TakenRow = mysqli_fetch_object($TakenResult);
    $Taken = $TakenRow->TotalTaken;
    $InDatabaseSQL = "SELECT SUM(`In_Database`) AS TotalInDatabase FROM `records`";
    $InDatabaseResult = mysqli_query($conn, $InDatabaseSQL);
    $InDatabaseRow = mysqli_fetch_object($InDatabaseResult);
    $InDatabase = $InDatabaseRow->TotalInDatabase;
    $NotInDatabaseSQL = "SELECT SUM(`Not_In_Database`) AS TotalNotInDatabase FROM `records`";
    $NotInDatabaseResult = mysqli_query($conn, $NotInDatabaseSQL);
    $NotInDatabaseRow = mysqli_fetch_object($NotInDatabaseResult);
    $NotInDatabase = $NotInDatabaseRow->TotalNotInDatabase;
    $GoProSQL = "SELECT SUM(`GoPro`) AS TotalGoPro FROM `records`";
    $GoProResult = mysqli_query($conn, $GoProSQL);
    $GoProRow = mysqli_fetch_object($GoProResult);
    $GoPro = $GoProRow->TotalGoPro;
    $DroneSQL = "SELECT SUM(`Drone`) AS TotalDrone FROM `records`";
    $DroneResult = mysqli_query($conn, $DroneSQL);
    $DroneRow = mysqli_fetch_object($DroneResult);
    $Drone = $DroneRow->TotalDrone;
    $PhoneSQL = "SELECT SUM(`Phone`) AS TotalPhone FROM `records`";
    $PhoneResult = mysqli_query($conn, $PhoneSQL);
    $PhoneRow = mysqli_fetch_object($PhoneResult);
    $Phone = $PhoneRow->TotalPhone;
    $MainQuery = "insert into yearly_records(Year,Races,Taken,In_Database,Not_In_Database,GoPro,Drone,Phone) values('$_POST[Year]','$Race','$Taken','$InDatabase','$NotInDatabase','$GoPro','$Drone','$Phone')";
    mysqli_query($conn,$MainQuery);
}
if(isset($_POST['Update_Record'])){
    // Insert record
    $RaceSQL = "SELECT COUNT(`Race`) AS TotalRaces FROM `records`";
    $RaceResult = mysqli_query($conn, $RaceSQL);
    $RaceRow = mysqli_fetch_object($RaceResult) ;
    $Race = $RaceRow->TotalRaces;
    $TakenSQL = "SELECT SUM(`Taken`) AS TotalTaken FROM `records`";
    $TakenResult = mysqli_query($conn, $TakenSQL);
    $TakenRow = mysqli_fetch_object($TakenResult);
    $Taken = $TakenRow->TotalTaken;
    $InDatabaseSQL = "SELECT SUM(`In_Database`) AS TotalInDatabase FROM `records`";
    $InDatabaseResult = mysqli_query($conn, $InDatabaseSQL);
    $InDatabaseRow = mysqli_fetch_object($InDatabaseResult);
    $InDatabase = $InDatabaseRow->TotalInDatabase;
    $NotInDatabaseSQL = "SELECT SUM(`Not_In_Database`) AS TotalNotInDatabase FROM `records`";
    $NotInDatabaseResult = mysqli_query($conn, $NotInDatabaseSQL);
    $NotInDatabaseRow = mysqli_fetch_object($NotInDatabaseResult);
    $NotInDatabase = $NotInDatabaseRow->TotalNotInDatabase;
    $GoProSQL = "SELECT SUM(`GoPro`) AS TotalGoPro FROM `records`";
    $GoProResult = mysqli_query($conn, $GoProSQL);
    $GoProRow = mysqli_fetch_object($GoProResult);
    $GoPro = $GoProRow->TotalGoPro;
    $DroneSQL = "SELECT SUM(`Drone`) AS TotalDrone FROM `records`";
    $DroneResult = mysqli_query($conn, $DroneSQL);
    $DroneRow = mysqli_fetch_object($DroneResult);
    $Drone = $DroneRow->TotalDrone;
    $PhoneSQL = "SELECT SUM(`Phone`) AS TotalPhone FROM `records`";
    $PhoneResult = mysqli_query($conn, $PhoneSQL);
    $PhoneRow = mysqli_fetch_object($PhoneResult);
    $Phone = $PhoneRow->TotalPhone;
    $MainQuery = "UPDATE yearly_records SET Races='$Race', Taken = '$Taken',In_Database = '$InDatabase', Not_In_Database = '$NotInDatabase', GoPro = '$GoPro', Drone = '$Drone', Phone = '$Phone' WHERE Year=''$_POST[Year]''";
    mysqli_query($conn,$MainQuery);
}
$conn->close();
?>