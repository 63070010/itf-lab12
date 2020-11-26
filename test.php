<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $conn = mysqli_connect('ihost.it.kmitl.ac.th', 'it63070010_test', 'PJPvjx84' 'it63070010_test', 3306);
  if (mysqli_connect_errno($conn))
  {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM test');
  ?>
  <table>
    <tr>
      <th width="150">A</th>
      <th width="150">B</th>
      <th width="150">C<th>
    </tr>
  </table>
  <?php
  while($Result = mysqli_fetch_array($res));
  {
  $A = $Result['A'];
  $B = $Result['B'];
  $C = $A + $B;
  ?>
    <table>
      <tr id="<?php echo $Result['id'];?>">
        <td><?php echo $A;?></td>
        <td><?php echo $B;?></td>
        <td><?php echo $C;?></td>
      </tr>
    </table>
  <?php
  }
  ?>
</body>
</html>
