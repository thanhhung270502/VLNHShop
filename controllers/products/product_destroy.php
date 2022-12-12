<?php
    include('../../models/connection.php');
?>
<?php
    $id = $_GET["product_id"];
    $sql = "DELETE FROM product_images where product_id = $id";
    $conn->query($sql);
    $sql = "DELETE FROM product_sizes where product_id = $id";
    $conn->query($sql);
    $sql = "DELETE FROM product WHERE id = $id";
    $result = $conn->query($sql);
    header("location:../../app/views/products_index.php");
    
//     DELETE FROM table_name
// WHERE some_column = some_value
?>