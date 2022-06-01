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
              <img src="imagenes/logo.jpg" height="150" alt="Logo de GamorsWeb">
            </header>
            <div class="producto">
              <div class="row center-xs">
                <?php
                $query = "SELECT * FROM ventas ";
                $result_shirts = mysqli_query($conn, $query);    


                while($row = mysqli_fetch_assoc($result_shirts)) { ?>
                  <div clas="producto col-xs-10 col-sm-6 col-md-4">
                      <div class="card">
                        <img src="<?php echo $row['imagen']; ?>" alt="Playera Bam Bam">
                        <h3><?php echo $row['nombre']; ?></h3>
                        <p><?php echo $row['precio']; ?></p>
                        <p>Cantidad: <?php echo $row['cantidad']; ?></p>
                        </td>
                      </div>
                    </div>
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
          $query = "SELECT * FROM ventas";
          $result_shirts = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_shirts)) { ?>
          <tr>
            <td style="color:#000000"><?php echo $row['nombre']; ?></td>
            <td style="color:#000000"><?php echo $row['cantidad']; ?></td>
            <td style="color:#000000"><?php echo $row['precio']; ?></td>
            <td style="color:#000000"><?php echo $row['cantidad']*$row['precio']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="center-xs">
        <?php
        $query = "SELECT * FROM ventas";
        $result_shirts = mysqli_query($conn, $query);    
        $total=0;
        while($row = mysqli_fetch_assoc($result_shirts)) { ?>
       <?php 
       $total=$total + ($row['cantidad']*$row['precio'])
       ?>
       <?php } ?>
       <p style="color:#FFFFFF ";>Total: <b><?php  echo "<font color='#FFFFFF'>$total mxn</font>";?></b></p>
        </div>
      </div>
        </div>
      </div>
      </div>
      
      </main>
            
      <?php include('includes/footer.php'); ?>
    </header>

  </body>
</html>
