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
      <th width="100"> <div align="center">Product</div></th>
      <th width="150"> <div align="center">Price </div></th>
      <th width="150"> <div align="center">Amount </div></th>
      <th width="150"> <div align="center">Total </div></th>
      <th width="200"> <div align="center">Button </div></th>
    </tr>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
    $A = $Result['Product'];
    $B = $Result['Amount'];
{
    $Total = $A * $B;
?>
  <tr id="<?php echo $Result['ID'];?>">
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Amount'];?></td>
    <td><?php echo $Total;?></td>
    <td align="center">
      <a href="delete1.php?ID=<?php echo $Result['ID'];?>" class="btn btn-secondary">DEL</a>
    </td>
  </tr>
<?php
}
?>
</table>
  <center>
    <a href="form1.html">
      <button type="submit" class="btn btn-secondary" align="center">ADD</button>
    </a>
  </center>
<?php
mysqli_close($conn);
?>
</body>
</html>

