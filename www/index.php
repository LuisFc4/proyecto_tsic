<?php include("db.php"); ?> 
<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html>
<!-- https://es.stackoverflow.com/questions/450986/frontend-como-hacer-un-catalogo-de-productos-en-html-->
<!-- https://www.youtube.com/watch?v=ZavZ2fcpvVY&ab_channel=VaidrollTeam-->
 <head>
    <meta charset="utf-8">
    <title>GamorsWeb</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
 </head>
 <body>

    <div class="row main-container middle-xs center-xs">
      <div class="col-md-8 col-sm-10 col-xs-11 col-lg-7">
        <div class="box">

          <div class="menu">
            <header class="text-center">
              <img src="Imagenes/logo.jpg" height="100" alt="Logo de GamorsWeb">
            </header>
            <div class="producto">
              <div class="row center-xs">
                <?php
                $query = "SELECT * FROM playeras WHERE inventario > 0";
                $result_shirts = mysqli_query($conn, $query);    


                while($row = mysqli_fetch_assoc($result_shirts)) { ?>
                <form action="save_shirt_carrito.php?id=<?php echo $row['id']?>"method="POST">
                  <div clas="producto col-xs-10 col-sm-6 col-md-4">
                      <div class="card">
                        <img src="<?php echo $row['imagen']; ?>" alt="Playera Bam Bam">
                        <h3><?php echo $row['nombre']; ?></h3>
                        <p><?php echo $row['precio']; ?></p>
                        <input type="submit" name="save_shirt_carrito.php?id=<?php echo $row['id']?>" class="btn btn-success btn-block" value="Agregar producto">
                        </td>
                      </div>
                    </div>
                  </form>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <br/>
    <header class="recuadro text-recuadro">
    <main class="container p-4">
    <div class="row">
    <div class="crud_menu">
    <p style="color:#FFFFFF";>RESUMEN</p>
      <table class="shirt-table">
        <thead>
          <tr>
            <th>NOMBRE</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>SUBTOTAL</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM carrito";
          $result_shirts = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_shirts)) { ?>
          <tr>
            <td style="color:#000000"><?php echo $row['nombre']; ?></td>
            <td style="color:#000000"><?php echo $row['cantidad']; ?></td>
            <td style="color:#000000"><?php echo $row['precio']; ?></td>
            <td style="color:#000000"><?php echo $row['cantidad']*$row['precio']; ?></td>
            <td>
              <a href="delete_shirt_carrito1.php?id=<?php echo $row['id_playera']?>" class="btn btn-secondary">
                <input type="image" src="Imagenes/edit.png"/>
              </a>
              <a href="delete_shirt_carrito.php?id=<?php echo $row['id_playera']?>" class="btn btn-danger">
                <input type="image" src="Imagenes/x-button.png"/>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <form action="carrito.php">
        <input type="submit" href="carrito.php" class="btn btn-success btn-block" value="Ir al carrito" id="carrito_boton">
      </form>
      </div>
      </div>
      </main>
            
      <?php include('includes/footer.php'); ?>
    </header>

  </body>
</html>
