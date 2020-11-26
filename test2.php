<?php
$conn = mysqli_connect('ihost.it.kmitl.ac.th', 'it63070010_test', 'PJPvjx84' 'it63070010_test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$A = $_POST['A'];
$B = $_POST['B'];
$sql = "INSERT INTO test (A, B) VALUES('$A', '$B')";
?>
