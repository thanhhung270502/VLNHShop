<?php
    include_once('../../models/connection.php');

    // lấy id người dùng
    $user_id = 1;
    
    $cart_info = $conn->query("SELECT * FROM cart WHERE user_id=$user_id");
    $cart_id = 0;
    
    if($cart_info->num_rows > 0) {
        while($row = $cart_info->fetch_assoc()) {
            $cart_id = $row['id'];
        }
    }
    
    $items_result = $conn->query("select product_id, quantity, img, name, color, price from cart_item c join product p on p.id=c.product_id where c.cart_id=$cart_id");

    // function checkout() {

    // }
?>