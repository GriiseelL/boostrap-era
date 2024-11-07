<?php

$servername="localhost";
$username="root";
$password="";
$database="buku";

$conn = new mysqli($servername, $username, $password, $database );

$id = $_GET['author_id'];

$sql = $conn->query("DELETE FROM author WHERE author_id=$id");
header("Location:dasboardAuthor.php");
?>