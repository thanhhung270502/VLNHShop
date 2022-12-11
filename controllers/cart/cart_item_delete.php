<?php
    include_once('../../models/connection.php');

    $product_id = $_GET['id'];
    $size_id = $_GET['size'];

    $delete_query = "DELETE from cart_item where product_id='$product_id' and size='$size_id'";
    $delete_query_result =$conn->query($delete_query);

    // header("location:../../app/views/cart.php");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>