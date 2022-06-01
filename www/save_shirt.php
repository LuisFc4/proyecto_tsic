<?php

include('db.php');

if (isset($_POST['save_shirt'])) {
  $name = $_POST['shirt_name'];
  $price = $_POST['shirt_price'];
  $stock = $_POST['shirt_stock'];
  $image = $_POST['shirt_image'];
  $description = $_POST['shirt_description'];
  $query = "INSERT INTO playeras(nombre, precio, inventario, descripcion, imagen) VALUES ('$name', $price, $stock, '$description', '$image')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto registrado satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: Registro.php');

}

?>
