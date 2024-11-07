<?php
$author= $_POST['author'];

$servername="localhost";
$username="root";
$password="";
$database="buku";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$id = $_GET['author_id'];

$sql = $conn->query("UPDATE author SET author_name='$author' WHERE author_id='$id'");


 if ($sql === TRUE) {
    echo "New record created successfully";
    header ("Location: dasboardAuthor.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
