<?php
    include_once('connection.php');
    $result = $conn->query("SELECT * FROM product");
    // $products = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($product = $result->fetch_assoc()) {
            echo 'id: '.$product['id'].'<br>';
            echo 'name: '.$product['name'].'<br>';
            echo 'price: '.$product['price'].'<br>';
            echo 'color: '.$product['color'].'<br>';
            echo 'img: '.$product['img'].'<br>';
            echo 'quantity_remain: '.$product['quantity_remain'].'<br>';
        }
    }
    // foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
    //     $products[] = new Product(
    //         echo 'id: '.$product['id'];
    //         echo 'name: '.$product['name'];
    //         echo 'price: '.$product['price'];
    //         echo 'color: '.$product['color'];
    //         echo 'img: '.$product['img'];
    //         echo 'quantity_remain: '.$product['quantity_remain'];
    //     );
    // }
?>