<?php
    $conn = mysqli_connect('itf-lab12.mysql.database.azure.com', 'it63070010@itf-lab12', 'PJPvjx84', 'itflab', 3306);
    $sql = 'SELECT * FROM guestbook WHERE ID = '.$_GET['ID'].'';
    $query = mysqli_query($conn, $sql);
    if(!$query) {
        header('Location: show.php');
    }
    else {
        $data = mysqli_fetch_assoc($query);
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <form action = "insert.php" method = "post">
    <input type="text" name="ID" value="<?php echo $data['ID']; ?>"> <br>
    Name:<br>
    <input type="text" name = "Name" placeholder="Enter Name"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "Comment" placeholder="Enter Comment"></textarea><br>  
    Link:<br>
    <input type="text" name = "Link" placeholder="Enter Link"> <br><br>
    <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </form> 
</body>
</html>
