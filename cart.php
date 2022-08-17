<?php

   echo "Shopping cart:\n";

      $items = count($_SESSION['cart']);    
     {
         $total = 0;
    echo "<table width=\"100%\" cellpadding=\"1\" border=\"1\">\n";
            echo "<tr><td>Item Name</td><td>Quantity</td><td>Total</td></tr>\n";
            foreach($_SESSION['cart'] as $itemid => $quantity)
            {
                $query = "SELECT description, price FROM items WHERE itemid = $itemid";
                $result = mysql_query($query);
                $row = mysql_fetch_array($result, MYSQL_ASSOC);
                $name = $row['name'];
                $price = $row['price'];

                $subtotal = $price * $quantity;
                $total += $subtotal;

    printf("<tr><td>%s</td><td>%s</td><td>$%.2f</td></tr>\n", $name, $quantity, $subtotal);
            }
            printf("<tr><td colspan=\"2\">Total</td><td>$%.2f</td></tr>\n", $total);
            echo "</table>\n";
       }

?> 