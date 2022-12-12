<?php
    include('../../models/connection.php')
?>

<?php
    $sql = "SELECT * FROM size";
    $result = $conn->query($sql);
    
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM product WHERE id = $product_id";
    $product_data = $conn->query($sql);
    $product = $product_data->fetch_assoc();

    $sql = "SELECT * FROM product_images WHERE product_id = $product_id";
    $product_images = $conn->query($sql);

    $sql = "SELECT * FROM product_sizes WHERE product_id = $product_id";
    $result_product_sizes = $conn->query($sql);
    $product_sizes = [];
    if ($result_product_sizes->num_rows > 0) {
        while($row = $result_product_sizes->fetch_assoc()) {
            array_push($product_sizes, $row);
            // echo $row["size_id"];
        }
    }
    // array_push($array, $row["src"]);
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo '
    //             name: '.$row["name"].'
    //         ';
    //     }
    // }
?>