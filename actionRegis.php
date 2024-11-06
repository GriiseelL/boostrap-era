<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$sql = "INSERT INTO users (email, name, password)
VALUES ('$email' , '$name', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>