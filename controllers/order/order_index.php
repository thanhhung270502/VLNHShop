<?php
    $cart_info = $conn->query("SELECT * FROM cart WHERE user_id=$user_id");

    if($cart_info->num_rows > 0) {
        while($row = $cart_info->fetch_assoc()) {
            $order_total_money = $row['total_money'];
            // echo $order_total_money;
            
            $add_order = $conn->query("INSERT INTO `order`(user_id, total_money) VALUES ($user_id, $order_total_money)");

            $items = $conn->query("SELECT * FROM cart_item WHERE cart_id='$cart_id'");
            if($items->num_rows > 0) {
                while($item = $items->fetch_assoc()) {
                    $product_id = $item['product_id'];
                    $quantity = $item['quantity'];
                    $size = $item['size'];
                    $add_order = $conn->query("INSERT INTO order_item(order_id, product_id, quantity, size) 
                            VALUES ($cart_id, $product_id, $quantity, $size)");
                            
                    $quantity_remain_result = $conn->query("SELECT * FROM product WHERE id=$product_id");
                    $quantity_remain_new = $quantity_remain_result->fetch_assoc()['quantity_remain'] - $quantity;

                    $update_qty_remain = $conn->query("UPDATE product SET quantity_remain=$quantity_remain_new WHERE id=$product_id");
                }   
            }
        }
    }
?>