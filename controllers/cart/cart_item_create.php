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
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con))
?>