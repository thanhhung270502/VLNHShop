<?php
    include_once('../../models/connection.php');
?>

<?php
    $product_id = $_GET["id"];
    $size = $_GET["size"];
    $quantity = $_GET["quantity"];
    $item_id=$_GET['id'];
    $user_id=$_COOKIE['user_id'];

    echo $product_id . '<br>';
    echo $size . '<br>';
    echo $quantity . '<br>';

    $cart_info = $conn->query("SELECT * FROM cart WHERE user_id='$user_id'");
    $cart_id = $cart_info->fetch_assoc()['id'];

    echo $cart_id . '<br>';

    $size_id_result = $conn->query("SELECT id FROM size WHERE name='$size'");
    $size_id = $size_id_result->fetch_assoc()['id'];

    echo $size_id . '<br>';
    $check_already_add = $conn->query("SELECT * FROM cart_item WHERE product_id='$product_id' AND size='$size_id'");

    if($check_already_add->num_rows > 0) {
        $already_item = $check_already_add->fetch_assoc();
        $already_item_id = $already_item['id'];

        echo $already_item_id.'<br>';

        // thêm số lượng vào sản phẩm, không thêm record mới
        $addition_quantity = $already_item['quantity'];
        $total_quantity = $quantity + $addition_quantity;

        $update_cart_query = "UPDATE cart_item SET quantity='$total_quantity' WHERE id='$already_item_id'";
        $update_cart_result = $conn->query($update_cart_query);
    }
    else {
        // thêm record mới vào cart_item
        $add_to_cart_query = "INSERT INTO cart_item(cart_id, product_id, quantity, size) VALUES ($cart_id, $product_id, $quantity, $size_id)";
        $add_to_cart_result = $conn->query($add_to_cart_query);
    }
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>