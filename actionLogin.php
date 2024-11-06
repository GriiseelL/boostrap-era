<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "nama_database"; 

$conn = new mysqli($host, $username, $password, $database); 

if ($conn->connect_error) { 
    die("Koneksi gagal: " . $conn->connect_error); 
} 

session_start();
$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";   

?>