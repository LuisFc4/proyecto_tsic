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
  if($cantidad == 1){
    $query = "DELETE FROM carrito WHERE id_playera= $id";
    $result = mysqli_query($conn, $query);
    $stocks=$stock+1;
    $query = "UPDATE playeras SET inventario = $stocks WHERE id=$id";
    mysqli_query($conn, $query);
  }
  else{
  $stocks=$stock+1;
  $cantidad=$cantidad-1;
  $query = "UPDATE carrito SET cantidad = $cantidad WHERE id_playera=$id";
  $result = mysqli_query($conn, $query);
  $query = "UPDATE playeras SET inventario = $stocks WHERE id=$id";
  mysqli_query($conn, $query);
  }
  header('Location: menu.php');
}

?>
