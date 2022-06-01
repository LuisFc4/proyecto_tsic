<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query1 = "SELECT * FROM carrito WHERE id_playera=$id";
  $result1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_array($result1);
  $query = "SELECT * FROM playeras WHERE id=$id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $stock=$row['inventario'];
  $cantidad=$row1['cantidad'];
  $stocks=$stock+$cantidad;
  $query = "DELETE FROM carrito WHERE id_playera= $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Producto eliminado satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  $query3 = "UPDATE playeras SET inventario = $stocks WHERE id=$id";
  mysqli_query($conn, $query3);
  header('Location: menu.php');
}

?>
