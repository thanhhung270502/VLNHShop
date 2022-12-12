<?php
require_once __DIR__.'/../models/connection.php';
?>

<?php
    $sql = "SELECT p.id, p.price, p.name, pi.src FROM product p JOIN product_images pi ON pi.product_id = p.id GROUP BY pi.product_id";
    $result = $conn->query($sql);
    $products = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($products, $row);
        }
    }
?>