<?php
    include('../../models/connection.php');
    $id = $_GET["id"];
    // $sql = "SELECT * FROM product_sizes p
    // JOIN size s ON s.id = p.size_id
    // WHERE p.product_id = $id";
    $sql = "SELECT p.id product_size_id, p.product_id product_id, p.size_id size_id, p.quantity_remain quantity_remain, s.name `name` 
    FROM product_sizes p 
    JOIN size s ON s.id = p.size_id 
    WHERE p.product_id = $id";
    $result = $conn->query($sql);
?>
<?php
    // $product_id = 0;
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //     $product_id = $row["product_id"];
    //     echo '
    //     <form action="../../controllers/products/products_update_quantity.php" action="GET">
    //         <input type="hidden" name="product_size_ids[]" value="'.$id.'" style="display: none;/>
    //         <div class="col-12 mb-3">
    //         <div class="input-group flex-nowrap">
    //             <span class="input-group-text" id="addon-wrapping">'.$row["name"].'</span>
    //             <input type="text" class="form-control" value="'.$row["quantity_remain"].'" name="quantity[]">
    //         </div>
    //         </div>
    //         <div class="col-12">
    //         <input type="submit" class="btn btn-primary w-100">
    //         </div>
    //     </form>
    //     ';
    //     }
    // }
    // echo '<input type="text" name="product_id" value="'.$product_id.'" style="display: none;>';
?>