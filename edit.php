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
    <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center;">TAMBAHKAN JUDUL AUTHOR BARU</h2>
    <br>

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

$author_id = $_GET["author_id"];

$sql = "SELECT * FROM author WHERE author_id='$author_id'";
foreach ($sql as $dt) {

$conn->close();
?>
    <form action="actionEdit.php?author_id=<?php echo $author_id?>" method="post">
    <div class="input-group flex-nowrap" style="margin-left: 30px;">
         <span class="input-group-text" id="addon-wrapping">tambahkan author</span>
         <input type="text" class="form-control" value="<?php echo $dt ['author_name']?>" name="author" placeholder="input author" aria-label="Username" aria-describedby="addon-wrapping">
    </div> 
<?php } ?>
    <br>
        <button type="submit" class="btn btn-dark btn-lg"  style="margin-left: 40px; --bs-btn-padding-y: 10px; --bs-btn-padding-x: 80px; --bs-btn-font-size: 15px;">ADD</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>