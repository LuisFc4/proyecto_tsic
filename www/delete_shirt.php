<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM playeras WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto eliminado satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Registro.php');
}

?>
