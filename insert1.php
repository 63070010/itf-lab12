<?php

$conn = mysqli_connect('itf-lab12.mysql.database.azure.com', 'it63070010@itf-lab12', 'PJPvjx84', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price  = $_POST['Price'];
$Amount  = $_POST['Amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount) VALUES ('$Product', '$Price', '$Amount')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><a href="show1.php" class="btn btn-primary">BACK</a>
</body>
</html>
