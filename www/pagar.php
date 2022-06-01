<!DOCTYPE html>

<?php include('includes/header.php'); ?>
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Pago Form</title>
  <link rel="stylesheet" href="css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form action="pay_carrito.php"method="POST"class="checkout">
    <div class="checkout-header">
      <h1 class="checkout-title">
        Pago
        <span class="checkout-price">$<?php echo $_GET['total']?></span>
      </h1>
    </div>
    <p>
      <input type="text" name="nombre" class="checkout-input checkout-name" placeholder="Nombre" autofocus>
      <input type="text" name="MM" class="checkout-input checkout-exp" placeholder="MM">
      <input type="text" name="YY" class="checkout-input checkout-exp" placeholder="YY">
    </p>
    <p>
      <input type="text" name="tarjeta" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111">
      <input type="text" name="CVC" class="checkout-input checkout-cvc" placeholder="CVC">
    </p>
    <p>
       <input type="submit" name="pay_carrito" class="checkout-btn" value="Pagar">
    </p>
  </form>

</body>
</html>
