<?php
    include_once('connection.php');

    $cart_info = $conn->query('SELECT * FROM cart');
    $cart_id = $user_id = $total_money = 0;

    if($cart_info->num_rows > 0) {
        while($row = $cart_info->fetch_assoc()) {
            $cart_id = $row['id'];
            $user_id = $row['user_id'];
            echo $user_id. ' - cart id:'.$cart_id;
        }
    }

    $items_result = $conn->query("select quantity, img, name, color, price from cart_item c join product p on p.id=c.product_id where c.cart_id=$cart_id");

    if ($items_result->num_rows > 0) {
        while($cart_item = $items_result->fetch_assoc()) {
            $img_link = '../'.$cart_item['img'];
            echo '
            <img src="'.$img_link.'" alt="Product img">';
            echo 'Name: '.$cart_item['name'].'<br>';
            
            echo $cart_item['quantity'].'Price: '.$cart_item['price'].'<br>';
            $total_money += $cart_item['quantity'] * $cart_item['price'];
        }
    }

    echo "Final: ".$total_money;

?>