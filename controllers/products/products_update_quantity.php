<?php
    include('../../models/connection.php');
?>

<?php
    $product_id = $_GET["product_id"];
    $quantity = $_GET["quantity"];
    $id = $_GET["product_sizes_id"];
    echo $product_id . '<br>';
    echo $quantity . '<br>';
    echo $id . '<br>';

    $sql = "UPDATE product_sizes SET quantity_remain = '$quantity' WHERE product_id = $product_id and id = $id";
    $result = $conn->query($sql);
    if ($result) {
        header("location:../../app/views/products_edit_quantity.php?id=$product_id");
    }
?>