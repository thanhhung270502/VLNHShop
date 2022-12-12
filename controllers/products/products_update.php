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

    $sql1 = "UPDATE product SET `name` = '$name' and price = '$price' and color = '$color' and `description` = '$description' WHERE id = $product_id";
    $insert_data = $conn->query($sql1);
    if ($insert_data) {
        $sql2 = "SELECT * FROM product_sizes WHERE product_id = $product_id";
        $result_product_sizes = $conn->query($sql2);

        $product_sizes = [];
        if ($result_product_sizes->num_rows > 0) {
            while($result_product_size = $result_product_sizes->fetch_assoc()) {
                array_push($product_sizes, $result_product_size);
            }
        }
        if (count($product_sizes) < count($sizes)) {
            foreach($sizes as $size) {
                $check = 1;
                for ($i = 0; $i < count($product_sizes); $i++) {
                    if ($product_sizes[$i]["size_id"] == $size) {
                        $check = 0;
                    }
                }
                if ($check == 1) {
                    $sql3 = "INSERT INTO product_sizes (product_id, size_id) VALUES ('$product_id', '$size')";
                    $conn->query($sql3);
                }
            }
        }

        $index = 0;
        $sql5 = "SELECT * FROM product_images WHERE product_id = $product_id";
        $result_product_images = $conn->query($sql5);
        $product_images = [];
        if ($result_product_images->num_rows > 0) {
            while($result_product_image = $result_product_images->fetch_assoc()) {
                array_push($product_images, $result_product_image);
            }
        }
        foreach($images as $image) {
            $product_image_id = $product_images[$index]["id"];
            echo $product_image_id;
            $sql4 = "UPDATE product_images SET src = '$image' WHERE id = $product_image_id";
            $conn->query($sql4);
            $index++;
        }
    }
?>