<?php
    include('../../models/connection.php');
?>

<?php
    $product_id = $_GET["id"];
    $size = $_GET["size"];
    $quantity = $_GET["quantity"];
    
    echo $product_id . '<br>';
    echo $size . '<br>';
    echo $quantity . '<br>';
?>