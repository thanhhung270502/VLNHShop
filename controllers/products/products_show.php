<?php
    include('../../models/connection.php');
?>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM product_images p WHERE p.product_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
                src: '.$row["src"].'
            ';
        }
    }
    header('location: ../../app/views/products_show.php');
?>