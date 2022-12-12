<?php
    include('../../models/connection.php');
?>

<?php
    $product_id = $_GET["product_id"];
    $name = $_GET["name"];  
    $price = (float)$_GET["price"];
    $color = $_GET["color"];
    $description = $_GET["description"];
    $images = $_GET["images"];
    $sizes = $_GET["size"];

    $sql1 = "UPDATE product SET `name` = '$name' and price = '$price' and color = '$color' and `description` = '$description'";
    
?>