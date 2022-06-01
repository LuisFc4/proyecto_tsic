<?php
include("db.php");
$name = '';
$price = '';
$stock = '';
$image = '';
$description = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM playeras WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['nombre'];
    $price = $row['precio'];
    $stock = $row['inventario'];
    $image = $row['imagen'];
    $description = $row['descripcion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $name = $_POST['shirt_name'];
  $price = $_POST['shirt_price'];
  $stock = $_POST['shirt_stock'];
  $image = $_POST['shirt_image'];
  $description = $_POST['shirt_description'];

  $query = "UPDATE playeras SET nombre = '$name', precio = $price, inventario = $stock, imagen = '$image', descripcion = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Playera actualizadas satisfactoriamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: menu.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
            <input type="text" name="shirt_name" class="form-control" placeholder="Nombre producto" autofocus>
          </div>
          <div class="form-group">
            <input  type="number" name="shirt_price" rows="2" class="form-control" placeholder="Precio del producto"></input>
          </div>
          <div class="form-group">
            <input  type="number" name="shirt_stock" rows="2" class="form-control" placeholder="Cantidad a registrar"></input>
          </div>
          <div class="form-group">
            <input type="text" name="shirt_image" class="form-control" placeholder="Imagen de producto" autofocus>
          </div>
          <div class="form-group">
            <textarea name="shirt_description" rows="2" class="form-control" placeholder="Descripción producto"></textarea>
          </div>
        <button class="btn-success" name="update">
          Actualizar producto
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
