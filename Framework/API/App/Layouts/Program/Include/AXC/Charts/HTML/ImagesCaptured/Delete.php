<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/CSS/Form.css" rel="Stylesheet" />
<form class="DeleteForm" method="post" action="" enctype='multipart/form-data'>
    <div class="FormDivider">
        <p>Delete Race:</p>
        <input class="race_input" type="text" name="Delete_Race"/>
    </div>
    <input class="submit_button" type='submit' value='Delete' name='Delete_Record'>
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
if(isset($_POST['Delete_Record'])){
    // Delete record
    $query = "DELETE FROM records WHERE Race='$_POST[Delete_Race]'";
    mysqli_query($conn,$query);
}
$conn->close();
?>