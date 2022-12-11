<?php
    include_once('../../models/connection.php');

    // tạo cookie test cart
    // $cookie_name = "user_id";
    // $cookie_value = "3";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    // lấy id người dùng
    $user_id = 0;
    if (isset($_COOKIE["user_id"])) {
        $user_id = $_COOKIE["user_id"];

        $check_already_cart = $conn->query("SELECT * FROM cart WHERE user_id='$user_id'");
        if($check_already_cart->num_rows == 0) {
            $add_cart = $conn->query("INSERT INTO cart(user_id) VALUES ($user_id)");
        }
    }
    else {}
    
    $cart_info = $conn->query("SELECT * FROM cart WHERE user_id=$user_id");
    $cart_id = 0;
    
    if($cart_info->num_rows > 0) {
        while($row = $cart_info->fetch_assoc()) {
            $cart_id = $row['id'];
        }
    }
    
    $items_result = $conn->query("SELECT product_id, quantity, name, color, price, size from cart_item c join product p on p.id=c.product_id where c.cart_id=$cart_id");
    // // lấy ảnh trong bảng product_images
    // $image_query = "SELECT * FROM product p
    //         JOIN product_images ON product_images.product_id = p.id
    //         GROUP BY product_images.product_id";
    // $image_links = $conn->query($image_query);
?>