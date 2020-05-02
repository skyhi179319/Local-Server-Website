<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://127.0.0.0/Local-Server-Website/Jquery.js"></script>
    <script src="http://127.0.0.0/Local-Server-Website/Framework/Layouts/Scripts/JS/Main-Layout.js"></script>
    <script src="http://127.0.0.0/Local-Server-Website/Framework/Mobile/JS/Mobile.js"></script>
    <link href="http://127.0.0.0/Local-Server-Website/Framework/Mobile/CSS/Mobile.css" rel="Stylesheet" />
    <link href="http://127.0.0.0/Local-Server-Website/Pages/Delete-form.css" rel="Stylesheet" />
    <link href="http://127.0.0.0/Local-Server-Website/Framework/Themes/Defualt.css" rel="Stylesheet" />
</head>
<body>
<div id="ImportNav"></div>
<div id="ImportHeader"></div>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "arizona";
$dbname = "axc";
// Deletes Images And Race Of The Given Name In The Text Box From The AXC Database
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['delete_photo'])){

    // sql to delete a record
        $sql = "DELETE FROM images WHERE race = '$_POST[Race]'";

        if ($conn->query($sql) === TRUE) {
        } else {
        }

        $conn->close();
    }
?>
<form class="DeleteForm" method="post" action="" enctype='multipart/form-data'>
    <p>Race:</p>
    <input class="race_input" type="text" name="Race"/>
    <input class="submit_button" type='submit' value='Delete Images' name='delete_photo'>
</form>
</body>
</html>
