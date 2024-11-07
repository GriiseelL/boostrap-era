<?php
$buku= $_POST['buku'];

$servername="localhost";
$username="root";
$password="";
$database="buku";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$id = $_GET['book_id'];

$sql = $conn->query("UPDATE book SET book_name='$buku' WHERE book_id='$id'");


 if ($sql === TRUE) {
    echo "New record created successfully";
    header ("Location: dasboardBuku.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
