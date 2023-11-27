<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Pizza Order</title>
  </head>

  <body>
    
    <?php
    function calcTax(float $s):float {
      return $s * 0.13;
    }

    $subTotal = 0.0;
    $pizzaSize = "";
    if ( isset( $_POST['pizza-size'] ) ){
      $pizzaSize = $_POST['pizza-size'];
    }
    $pizzaTopping = "";
    if ( isset( $_POST['pizza-topping'] ) ){
      $pizzaTopping = $_POST['pizza-topping'];
    }

    if( $pizzaSize == 1 ){
      $subTotal += 6.0;
    }
    elseif ( $pizzaSize == 2 ){
      $subTotal += 10.0;
    }


    $tax = calcTax($subTotal);
    $total = $subTotal + $tax;

    echo "<h1>My Pizza</h1>\n";
    echo "<p>My Pizza Size is = ".$pizzaSize."</p>\n";
    echo "<p>My Pizza Toppings is = ".$pizzaTopping."</p>\n";

    echo "<p>Subtotal: $".$subTotal."</p>\n";
    echo "<p>HST: $".$tax."</p>\n";
    echo "<p>Total: $".$total."</p>\n";

    ?>
    
  </body>
  
</html>
