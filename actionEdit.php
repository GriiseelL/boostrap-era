<?php
$author= $_POST['buku'];

$servername="localhost";
$username="root";
$password="";
$database="web1";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$id = $_GET['author_id'];

$sql = "UPDATE author SET author_name='$author' WHERE author_id='$id'";
$query = mysqli_query($db, $sql);

 if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: edit.php');
 }else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
