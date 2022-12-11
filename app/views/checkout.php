<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLNH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- <link href="../assets/css/home.css" rel="stylesheet"> -->
    <link href="../assets/css/general.css" rel="stylesheet">
    <link href="../assets/css/checkout.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
    <script>
        $(document).ready(function() {
            $('input[type=radio][name=checkoutShippingMethod]').change(function() {
                document.getElementById("ship").innerHTML = '$' + this.value;
                console.log(this.value);

                var sub_total = document.getElementById("sub_total").innerHTML.substr(1);
                console.log(sub_total);

                var order_total_money = Number(this.value) + 1.1 * Number(sub_total);
                console.log(order_total_money);

                document.getElementById("total").innerHTML = '$' + Math.round(order_total_money * 100) / 100;
            });
        });
    </script>
</head>

<body>
    <?php
        include("header.php");
        include("../../models/connection.php");
        include("../../models/checkout.php");

        $user_id = $_COOKIE['user_id'];
        $user_result = $conn->query("SELECT * from user where id=$user_id");
        $user = $user_result->fetch_assoc();
    ?>

    <section class="my-5 container">

        <!-- Checkout Title -->
        <h1 class="mb-4 display-5 fw-bold text-center">
            Xác thực thông tin thanh toán
        </h1>

        <p class="text-center mx-auto">
            Hãy điền thông tin vào đơn sau. Đã đăng ký?
            <a class="link-primary" href="login.php">Đăng nhập ở đây!</a>
        </p>
        <!-- /Checkout Title -->

        <?php
            include_once('../../controllers/cart/cart_index.php');
            $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $addressErr = ' ';

            if (isset($_POST['submit'])) {
                $firstNameErr = displayError(firstnameErr('firstName'));
                $lastNameErr = displayError(lastnameErr('lastName'));
                $emailErr = displayError(emailErr('email'));
                $phoneErr = displayError(phoneErr('phone'));
                $addressErr = displayError(addressErr('address'));
        
                if ($firstNameErr == '' && $lastNameErr == '' && $emailErr == ''
                && $phoneErr == '' && $addressErr == '') {
                    // header('Location:../../controllers/order/order_index.php');
                    echo '<script>alert("Đặt hàng thành công!")</script>';
                    include('../../controllers/order/order_index.php');
        ?>
        <script>
            window.location.href = 'index.php';
        </script>
        <?php
                }
            }
        ?>

        <form action="" method="post">

        <!-- Checkout Content -->
        <div class="row g-md-8 mt-4">
            <!-- Checkout Panel Left -->
            <div class="col-12 col-lg-6 col-xl-7">
                <!-- Get Contact Information -->
                <div class="checkout-panel">
                    <h5 class="title-checkout pb-4 border-bottom">Thông tin liên hệ</h5>
                    <div class="row">

                        <!-- Email-->
                        <div class="col-12" data-form-type="newsletter">
                            <div class="form-group">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone">
                                <?php echo $phoneErr?>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                                <?php echo $emailErr?>
                            </div>

                            <!-- Mailing List Signup-->
                            <div class="form-group form-check m-0 mt-1">
                                <input type="checkbox" class="form-check-input" id="add-mailinglist" checked="">
                                <label class="form-check-label" for="add-mailinglist">Luôn cập nhật những thông tin mới nhất từ chúng tôi</label>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /Get Contact Information -->

                <!-- Shipping Address -->
                <div class="checkout-panel" data-form-type="shipping">
                    <h5 class="title-checkout border-top border-bottom py-4">Địa chỉ giao hàng</h5>
                    <div class="row">
                        <!-- First Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstName" class="form-label">Tên</label>
                                <input type="text" class="form-control" name="firstName" placeholder="" value="">
                                <?php echo $firstNameErr?>
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastName" class="form-label">Họ</label>
                                <input type="text" class="form-control" name="lastName" placeholder="" value="">
                                <?php echo $lastNameErr?>
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="address"
                                    placeholder="268, Lý Thường Kiệt, Quận 10, Thành phố Hồ Chí Minh">
                                <?php echo $addressErr?>
                            </div>
                        </div>

                        <!-- Country
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country" class="form-label">Tỉnh</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Hãy chọn...</option>
                                    <option>Thành phố Hồ Chí Minh</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- /Shipping Address -->

                <!-- Shipping Method -->
                <div class="checkout-panel">
                    <h5 class="title-checkout border-bottom border-top py-4">Phương thức vận chuyển</h5>

                    <!-- Shipping Option-->
                    <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodOne" value="0" checked>
                        <label class="form-check-label" for="checkoutShippingMethodOne">
                            <span class="d-flex justify-content-between align-items-start w-100">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Nhận tại cửa hàng của chúng tôi</span>
                                    <small class="">Nhận tại chi nhánh số 1 tại Thủ Đức</small>
                                </span>
                                <span class="small fw-bolder text-uppercase">Free</span>
                            </span>
                        </label>
                    </div>

                    <!-- Shipping Option-->
                    <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodTwo" value="19.99">
                        <label class="form-check-label" for="checkoutShippingMethodTwo">
                            <span class="d-flex justify-content-between align-items-start">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Vận chuyển siêu tốc</span>
                                    <small class="">Vận chuyển hàng trong 24 giờ</small>
                                </span>
                                <span class="small fw-bolder text-uppercase">$19.99</span>
                            </span>
                        </label>
                    </div>

                    <!-- Shipping Option-->
                    <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodThree" value="9.99">
                        <label class="form-check-label" for="checkoutShippingMethodThree">
                            <span class="d-flex justify-content-between align-items-start">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Vận chuyển tiêu chuẩn</span>
                                    <small class="">Vận chuyển trong 36 - 48 giờ</small>
                                </span>
                                <span class="small fw-bolder text-uppercase">$9.99</span>
                            </span>
                        </label>
                    </div>
                </div>
                <!-- /Shipping Method -->
            </div>
            <!-- /Checkout Panel Left -->

            <?php
                include('../../models/connection.php');
                $user_id = $_COOKIE["user_id"];
                $cart_info = $conn->query("SELECT * FROM cart WHERE user_id=$user_id");

                $cart_money = $cart_info->fetch_assoc()['total_money'];
            ?>

            <!-- Checkout preview - Right -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="bg-light p-4 sticky-md-top top-5" data-dashlane-rid="82f5ff0d48579d1c"
                    data-form-type="other">
                    <div class="border-bottom pb-3">
                        <div>
                            <p class="m-0 fw-bold fs-5 text-center">Preview đơn hàng</p>
                        </div>
                        <!-- Cart Item-->
                        <!-- <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">1</span>
                                    <img src="./assets/images/products/product-1.jpg" alt="" class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">Mens StormBreaker Jacket</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Mens / Blue / Medium</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$1129.99</span>
                            </div>
                        </div>
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">2</span>
                                    <img src="./assets/images/products/product-2.jpg" alt="" class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">North Face Jacket</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Mens / Blue / Large</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$999.98</span>
                            </div>
                        </div>
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">1</span>
                                    <img src="./assets/images/products/product-4.jpg" alt="" class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">Womens Adidas Hoodie</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Womens / Red / Medium</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$59.99</span>
                            </div>
                        </div> -->
                        <!-- / Cart Item-->
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 fw-bolder fs-6">Tổng sản phẩm</p>
                            <p class="m-0 fs-6 fw-bolder" id="sub_total">$<?php echo $cart_money; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="m-0 fw-bolder fs-6">Phí giao hàng</p>
                            <p class="m-0 fs-6 fw-bold" id="ship">$0
                                <!-- Tùy vào phương thức vận chuyển -->
                                <!-- giá trị dựa vào phương thức ship -->
                            </p>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 fw-bold fs-5">Tổng cộng</p>
                                <span class="text-muted small">Đã bao gồm 10% thuế GTGT</span>
                            </div>
                            <p class="m-0 fs-5 fw-bold" id="total">$<?php echo $cart_money * 1.1; ?></p>
                        </div>
                    </div>
                    <!-- Accept Terms Checkbox-->
                    <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked=""
                            data-dashlane-rid="3c9caa1d7baabb3a" data-form-type="consent,terms">
                        <label class="form-check-label fw-bolder" for="accept-terms">Tôi đã đồng ý <a
                                href="#">điều khoản &amp; dịch vụ</a></label>
                    </div>
                    <input class="btn btn-dark w-100 fw-bold" type="submit" name="submit" value="Hoàn thành đặt hàng">
                </div>
            </div>
            <!-- /Checkout preview - Right -->

        </div>
        <!-- /Checkout Content -->

    </section>

    <?php
        include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>