<?php
    include('../../models/connection.php');
?>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM product_images p WHERE p.product_id = $id";
    $images = $conn->query($sql);
    
    $sql = "SELECT * FROM product WHERE id = $id";
    $product_data = $conn->query($sql);
    if ($product_data->num_rows > 0) {
        $product = $product_data->fetch_assoc();
    }

    $sql = "SELECT p.quantity_remain, s.name FROM product_sizes p JOIN size s ON s.id = p.size_id WHERE p.product_id = $id";
    $sizes = $conn->query($sql);
?>