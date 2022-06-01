<!DOCTYPE html>
<?php include('includes/header.php'); ?>

<head>
<div class="text-center center-xs">
<meta charset="utf-8">
    <title>GamorsWeb</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <br></br>
    <script>
        cont=0  
        imagenes = ["imagenes/1.jpg", "imagenes/2.jpg", "imagenes/3.jpg" ,"imagenes/4.jpg"]
        
        function adelante(){
            if (cont == imagenes.length-1){
                cont = 0
            }
            cont++
            name = imagenes[cont]
            document.getElementById("imagen1").src = name
        }

        function atras(){
            if (cont == 0){
                cont = imagenes.length-1
            }
            cont--
            name = imagenes[cont]
            document.getElementById("imagen1").src = name
        }
    </script>
</head>
<html>


<body bgcolor="#FFFFFF" width=100% style="min-height: 100%;">
    <input type="image" src="imagenes/left.png" onclick="atras()" width="125" height="100" />
    <img id= imagen1 name= imagen1 src = "imagenes/2.jpg" width=500 height="600">
    <input type="image" src="imagenes/right.png"  onclick="adelante()" width="100" height="100" />
  
</body>
<br></br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/vrnWGw5va_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</html>