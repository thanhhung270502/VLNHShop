<?php
    include_once('../../models/connection.php');

    $item_id = $_GET['id'];

    $delete_query = "delete from cart_item where product_id='$item_id'";
    $delete_query_result =$conn->query($delete_query);

    header("location:../../app/views/cart.php");
?>