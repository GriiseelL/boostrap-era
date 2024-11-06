<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "buku"; 

$conn = new mysqli($host, $username, $password, $database); 

if ($conn->connect_error) { 
    die("Koneksi gagal: " . $conn->connect_error); 
} 

session_start();
$email= $_POST['email'];
$password= $_POST['password'];
// $name= $_POST['name'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";   

$result = $conn->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['email'] = $email; 

 header("Location: dasboardBuku.php"); 

} else { 

 echo "Login gagal. <a href='login.php'>Coba lagi</a>"; 

} 
?>