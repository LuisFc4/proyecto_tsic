<?php

include('db.php');

if  (isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "SELECT * FROM playeras WHERE id=$id";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $name = $row['nombre'];
    $price = $row['precio'];
    $image = $row['imagen'];
    $description = $row['descripcion'];
    $stock=$row['inventario'];
    $stock=$stock-1;
    $query1 = "SELECT * FROM carrito WHERE id_playera=$id";
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) == 1) {
      $row1 = mysqli_fetch_array($result1);
      $cantidad=$row1['cantidad'];
      $cantidad=$cantidad+1;
      $query = "UPDATE carrito SET cantidad = $cantidad WHERE id_playera=$id";
      mysqli_query($conn, $query);
      $_SESSION['message'] = 'Playera actualizadas satisfactoriamente';
      $_SESSION['message_type'] = 'warning';
      $query = "UPDATE playeras SET inventario = $stock WHERE id=$id";
      mysqli_query($conn, $query);
      $_SESSION['message'] = 'Playera actualizadas satisfactoriamente';
      $_SESSION['message_type'] = 'warning';
    }
    else{
      $cantidad = 1;
      $query = "INSERT INTO carrito(id_playera, nombre, precio, cantidad, descripcion, imagen) VALUES ($id,'$name', $price, $cantidad, '$description', '$image')";
      $result = mysqli_query($conn, $query);
      if(!$result) {
        die("Query Failed.");
      }
      $query = "UPDATE playeras SET inventario = $stock WHERE id=$id";
      mysqli_query($conn, $query);
      $_SESSION['message'] = 'Playera actualizadas satisfactoriamente';
      $_SESSION['message_type'] = 'warning';
    }
    
    
    $_SESSION['message'] = 'Producto registrado satisfactoriamente';
    $_SESSION['message_type'] = 'success';
    header('Location: menu.php');
  }
}


?>
