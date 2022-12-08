<?php
    include('../../models/connection.php')
?>

<?php
    $sql = "SELECT *
    FROM product p
    JOIN product_images ON product_images.product_id = p.id
    GROUP BY product_images.product_id";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo '
    //             name: '.$row["name"].'
    //         ';
    //     }
    // }
?>