
<?php

include("db.php");
if (isset($_POST['pay_carrito'])) {
  $name = $_POST['nombre'];
  $mm = $_POST['MM'];
  $yy = $_POST['YY'];
  $tarjeta = $_POST['tarjeta'];
  $cvc = $_POST['CVC'];
  $query = "INSERT INTO tarjetas(nombre, mes, año, tarjeta, cvc) VALUES ('$name', $mm, $yy, '$tarjeta', $cvc)";
  $result = mysqli_query($conn, $query);

  $query1 = "SELECT * FROM carrito";
  $result1 = mysqli_query($conn, $query1);

  while($row = mysqli_fetch_assoc($result1)) { 
    $id=$row['id_playera'];
    $name=$row['nombre'];
    $precio= $row['precio'];
    $cantidad= $row['cantidad'];
    $descripcion = $row['descripcion'];
    $imagen =$row['imagen'];
    $query = "INSERT INTO ventas(id_playera, nombre, precio, cantidad, descripcion, imagen) VALUES ($id,  '$name', $precio, $cantidad, '$descripcion', '$imagen')";
    $result = mysqli_query($conn, $query);
 } 

  $query = "DELETE FROM carrito";
  $result = mysqli_query($conn, $query);
  header('Location: menu.php');
}
?>