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

$inputAuthor= $_POST["author"];

$sql = "INSERT INTO author (author_name)
VALUES ('$inputAuthor')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: dasboardAuthor.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>