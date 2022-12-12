<?php
    include('../../models/connection.php');
?>

<?php
    $name = $_GET["name"];  
    $price = (float)$_GET["price"];
    $color = $_GET["color"];
    $description = $_GET["description"];
    $images = $_GET["images"];
    $sizes = $_GET["size"];

    $sql = "insert into product (price, name, color, description) values ('$price', '$name', '$color', '$description')";
    // $sql = "insert into product (id, price, name, color, description, quantity_remain, img) values (7, '13.51', 'shirt 1', 'Brown', null, 92, './app/assets/images/products/product-1.jpg');";
    
    $conn->query($sql);
    $sql_user = "SELECT * FROM product WHERE `name` = '$name'";
    $user = $conn->query($sql_user);
    if ($user->num_rows > 0) {
        while($row = $user->fetch_assoc()) {
            $product_id = $row["id"];
            foreach ($sizes as $size) {
                $sql = "INSERT INTO product_sizes (product_id, size_id) VALUES ('$product_id', '$size')";
                $conn->query($sql);
            }
            foreach ($images as $image) {
                $sql = "INSERT INTO product_images (product_id, src) VALUES ('$product_id', '$image')";
                $conn->query($sql);
            }
            header("location:../../app/views/products_show.php?id=$product_id");
        }
    }
?>
