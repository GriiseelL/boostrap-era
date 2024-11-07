<?php

session_start(); 

if (!isset($_SESSION['email'])) { 

 header("Location: login.php"); 

} 

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

$sql = "SELECT author_id, author_name FROM author";
$result = $conn->query($sql);

$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>

    body{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    button{
        margin-left: 40px;
    }

  </style>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dasboardBuku.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dasboardAuthor.php">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actionLogin.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> <br>
<table class="table table-bordered" style="width: 50%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <!-- <th scope="col">Judul buku</th> -->
      <!-- <th scope="col">Tahun terbit</th> -->
      <th scope="col">Penulis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
  while($row = $result->fetch_assoc()) {
  $author= $row["author_id"];
  ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["author_id"]?></td>
      <td><?php echo $row["author_name"]?></td>
      <td>
        <a href="edit.php?author_id=<?php echo $author?>">edit</td></a>
    </tr>
    <?php } ?>
  </tbody>
</table>
<br>
<a href="insertAuthor.php"><button type="button" class="btn btn-dark btn-lg"  style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 80px; --bs-btn-font-size: 15px;">ADD Buku</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>