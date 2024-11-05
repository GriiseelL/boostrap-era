<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$inputBuku = $_POST["book"];
$inputId = $_POST["thor"];
$inputYear = $_POST["year"];


$sql = "INSERT INTO book (book_name, author_id, publication_year)
VALUES ('$inputBuku' , $inputId, $inputYear)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: dasboardBuku.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>