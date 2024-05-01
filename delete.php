<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
$username = "root";
$password = "";
$database = "hostel_management";

// create connection

$connection = new mysqli($servername, $username, $password, $database);

$sql= "DELETE FROM clients WHERE id= $id";
$connection->query($sql);

}

header("location:/hostel_management/index.php");
        exit;

?>