<?php
session_start();

$conn = mysqli_connect(
  'mysql',
  'root',
  'admin',
  'gamorsweb'
) or die(mysqli_erro($mysqli));

?>
