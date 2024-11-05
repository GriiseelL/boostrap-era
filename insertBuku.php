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

$sql = "SELECT*FROM author";
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

  </style>
  <body>
    <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center;">TAMBAHKAN JUDUL BUKU BARU</h2>
    <br>
    <form action="actionInsertB.php" method="post">
    <div class="input-group flex-nowrap" style="margin-left: 30px;">
         <span class="input-group-text" id="addon-wrapping">tambahkan buku</span>
         <input type="text" class="form-control" name="book" placeholder="input judul" aria-label="Username" aria-describedby="addon-wrapping">
    </div> <br>

    <select class="form-select" aria-label="Default select example" style="margin-left: 30px;" name="thor">
      <option selected>Open this select menu</option>
        <?php
     while($row = $result->fetch_assoc()) {
    ?>
        <option value="<?php echo $row["author_id"]?>"><?php echo $row["author_name"]?></option>
        <?php }?>
    </select>
    <br>
     <div class="input-group flex-nowrap" style="margin-left: 30px;">
         <span class="input-group-text" id="addon-wrapping">tahun terbit</span>
         <input type="text" class="form-control" name="year" placeholder="input tahun" aria-label="Username" aria-describedby="addon-wrapping">
      </div> <br>
        <button type="submit" class="btn btn-dark btn-lg"  style="margin-left: 40px; --bs-btn-padding-y: 10px; --bs-btn-padding-x: 80px; --bs-btn-font-size: 15px;">ADD</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>