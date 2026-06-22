<?php
$servername = "localhost"; 
$username = "root";        
$password = "";          
$dbname = "condofix_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sambungan pangkalan data gagal: " . $conn->connect_error);
}

?>