<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLNH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- <link href="../assets/css/home.css" rel="stylesheet"> -->
    <link href="../assets/css/cart.css" rel="stylesheet">
    <link href="../assets/css/general.css" rel="stylesheet">
</head>

<body>

    <?php
        include("header.php");
    ?>

    <section class="mt-5 container">
        <!-- Cart Title -->
        <h1 class="mb-6 display-5 fw-bold text-center">Giỏ hàng</h1>
        <!-- /Cart Title -->

        <!-- Cart Content -->
        <div class="row my-5">

            <!-- Cart Items -->
            <div class="col-7">
                <!-- <div class="table-responsive"> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell" style="width: 15%">Ảnh</th>
                                <th class="ps-sm-3">Chi tiết</th>
                                <th>Số lượng</th>
                                <th style="height: 100%;">Giá</th>
                            </tr>
                        </thead>

                        <?php 
                            include('../../controllers/cart/cart_index.php');
                            $total_money = 0;

                            if ($items_result->num_rows > 0) {
                                while($cart_item = $items_result->fetch_assoc()) {
                    
                                    $item_id = $cart_item['product_id'];

                                    // lấy ảnh trong bảng product_images
                                    $img_query = "SELECT * FROM product_images WHERE product_id=$item_id";
                                    $imgs = $conn->query($img_query);
                                    $image = $imgs->fetch_assoc();
                                    if ($image["src"][0] == 'h' && $image["src"][1] == 't' && $image["src"][2] == 't' && $image["src"][3] == 'p') {
                                        $img_link = $image["src"];
                                    }
                                    else {
                                        $img_link = '../../'.$image['src'];
                                    }

                                    // $img_link = '../../'.$cart_item['img'];
                                    $sub_total_money = $cart_item['quantity'] * $cart_item['price'];
                                    $total_money += $sub_total_money;
                        ?>
                        <tbody>
                            <tr>
                                <td class="d-sm-table-cell">
                                    <picture class="d-block bg-light p-3 f-w-20">
                                        <img class="img-fluid" src="<?php echo $img_link; ?>" alt="">
                                    </picture>
                                </td>
                                <td>
                                    <div class="ps-sm-3">
                                        <h6 class="mb-2 fw-bolder">
                                            <?php echo $cart_item['name']; ?> 
                                        </h6>
                                        <small class="d-block text-muted"><?php echo $cart_item['color']; ?> / 
                                        <?php
                                        $size_id = $cart_item['size'];
                                        $size_name_result = $conn->query("SELECT * FROM size WHERE id='$size_id'");
                                        $size_name = $size_name_result->fetch_assoc()['name'];
                                        echo $size_name;
                                    ?>
                                        </small>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3">
                                        <span class="small text-muted mt-1"><?php echo $cart_item['quantity']; ?> @ <?php echo $cart_item['price']; ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between flex-column align-items-end h-100">
                                        <a 
                                            href="../../controllers/cart/cart_item_delete.php?id=<?php echo $item_id; ?>&size=<?php echo $size_id; ?>"
                                            class="text-decoration-none text-dark me-1 float-end"    
                                        ><i class="ri-close-circle-line ri-lg"></i></a>    
                                    <!-- <button class="delete-button bg-white border-0"><i class="ri-close-circle-line ri-lg"></i></button> -->
                                        <p class="fw-bolder me-1 mt-4 float-end">$<?php echo $sub_total_money; ?></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                            
                            //cập nhật tổng tiền
                            $conn->query("UPDATE cart SET total_money='$total_money'");
                        ?>
                    </table>
                <!-- </div> -->
            </div>
            <!-- /Cart Items -->

            <div class="col-5">
                <div class="bg-dark p-4 p-md-5 text-white">
                    <h3 class="fs-3 fw-bold m-0 text-center">Thông tin đơn hàng</h3>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2 flex-column flex-sm-row">
                            <p class="m-0 fw-bolder fs-6">Tổng giỏ hàng</p>
                            <p class="m-0 fs-6 fw-bolder">$<?php echo $total_money; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mt-3 m-sm-0">
                            <p class="m-0 fw-bolder fs-6">Phí giao hàng</p>
                            <span class="text-white opacity-75 small">Được tính khi thanh toán</span>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                            <div>
                                <p class="m-0 fs-5 fw-bold">Tổng cộng</p>
                                <span class="text-white opacity-75 small">Bao gồm 10% thuế GTGT</span>
                            </div>
                            <p class="mt-3 m-sm-0 fs-5 fw-bold">$<?php echo $total_money * 1.1; ?></p>
                        </div>
                    </div>

                    <!-- This can be add later -->
                    <!-- Coupon Code-->
                    <!-- <button class="btn btn-link p-0 mt-2 text-white fw-bolder text-decoration-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Have a coupon code?
                    </button>
                    <div class="collapse" id="collapseExample" style="">
                        <div class="card card-body bg-transparent p-0">
                            <div class="input-group mb-0 mt-2">
                                <input type="text" class="form-control border-0" placeholder="Enter coupon code" data-dashlane-rid="cbea1ec854b5eb52">
                                <button class="btn btn-white text-dark px-3 btn-sm border-0 d-flex justify-content-center align-items-center" data-dashlane-rid="570e8c54e0f49151"><i class="ri-checkbox-circle-line ri-lg"></i></button>
                            </div>
                        </div>
                    </div> -->
                    <!-- / Coupon Code-->
                    <!-- /This can be add later -->

                    <!-- Checkout Button-->
                    <a href="./checkout.php" class="btn btn-orange w-100 text-white fw-bold mt-3" role="button" data-dashlane-rid="913cb21ce6af3f20"><i class="ri-secure-payment-line align-bottom"></i>  Đi đến thanh toán</a>
                    <!-- <a href="./checkout.php" class="btn btn-orange w-100 text-white fw-bold mt-3" role="button" data-dashlane-rid="48d77dcecd2a4151"><i class="ri-paypal-line align-bottom"></i>Th</a> -->
                    <!-- Checkout Button-->
                </div>

                <!-- Payment Icons-->
                <!-- <ul class="list-unstyled d-flex justify-content-center mt-3">
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-paypal"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-mastercard"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-american-express"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-visa"></i></li>
                </ul> -->
                <!-- / Payment Icons-->
            </div>
        </div>
        <!-- /Cart Content -->

    </section>

    <?php
        include("footer.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>