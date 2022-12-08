<?php
    include 'connection.php';

    function create_cart() {

    }

    function add_item() {
        // check if quantity < quantity_remain
    }

    function remove_item() {
        $item_id = $_GET['id'];
        // $user_id = $_SESSION['id'];
        $delete_query = "delete from cart_item where id='$item_id'";
        $delete_query_result =$conn->query($delete_query);

        header('location: ../views/cart.php');
    }

    function checkout() {

    }
?>