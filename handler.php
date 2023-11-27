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
	$pizzaName = "";
    if ( isset( $_POST['pizza-size'] ) ){
      $pizzaSize = $_POST['pizza-size'];
    }
    $pizzaTopping = "";
    if ( isset( $_POST['pizza-topping'] ) ){
      $pizzaTopping = $_POST['pizza-topping'];
    }

    if( $pizzaSize == 1 ){
      $pizzaName = "large";
      $subTotal += 6.0;
    }
    elseif ( $pizzaSize == 2 ){
      $pizzaName = "extra large";
      $subTotal += 10.0;
    }

    if( $pizzaTopping == 1 ){
      $subTotal += 1.00;
    }
    elseif ( $pizzaTopping == 2 ){
      $subTotal += 1.75;
    }
    elseif ( $pizzaTopping == 3 ){
      $subTotal += 2.50;
    }
    elseif ( $pizzaTopping == 4 ){
      $subTotal += 3.35;
    }

    $tax = calcTax($subTotal);
    $total = $subTotal + $tax;

    echo "<h1>My Pizza Order</h1>\n";
    echo "<p>One ".$pizzaName." pizza with ".$pizzaTopping." toppings</p>\n";

    echo "<p>Subtotal: $".$subTotal."</p>\n";
    echo "<p>HST: $".$tax."</p>\n";
    echo "<p>Total: $".$total."</p>\n";

    ?>
    
  </body>
  
</html>
