<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-lab12.mysql.database.azure.com', 'it63070010@itf-lab12', 'PJPvjx84', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="100"> <div align="center">Name</div></th>
      <th width="350"> <div align="center">Comment </div></th>
      <th width="150"> <div align="center">Link </div></th>
      <th width="200"> <div align="center">Button </div></th>
    </tr>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr id="<?php echo $Result['ID'];?>">
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td align="center">
      <a href="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-secondary">DEL</a>
      <a href="edit.php?ID=<?php echo $Result['ID'];?>" class="btn btn-secondary">EDIT</a>
    </td>
  </tr>
<?php
}
?>
</table>
  <center>
    <a href="form.html">
      <button type="submit" class="btn btn-secondary" align="center">ADD</button>
    </a>
  </center>
<?php
mysqli_close($conn);
?>
</body>
</html>
