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
    <!-- <link href="../assets/css/homepage.css" rel="stylesheet"> -->
    <link href="../assets/css/checkout.css" rel="stylesheet">
</head>

<body>

    <?php
        include("header.php");
    ?>

    <section class="my-5 container">

        <!-- Checkout Title -->
        <h1 class="mb-4 display-5 fw-bold text-center">
            Kiểm tra quá trình thanh toán
        </h1>

        <p class="text-center mx-auto">
            Hãy điền thông tin vào đơn sau. Đã đăng ký?
            <a class="text-dark" href="login.php">Đăng nhập ở đây!</a>
        </p>
        <!-- /Checkout Title -->

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
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            </div>

                            <!-- Mailing List Signup-->
                            <div class="form-group form-check m-0 mt-3">
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
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                    required="">
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastName" class="form-label">Họ</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    required="">
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="268, Lý Thường Kiệt, Quận 10, Thành phố Hồ Chí Minh" required="">
                            </div>
                        </div>

                        <!-- Country-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country" class="form-label">Tỉnh</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Hãy chọn...</option>
                                    <option>Thành phố Hồ Chí Minh</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Shipping Address -->

                <!-- Shipping Method -->
                <div class="checkout-panel">
                    <h5 class="title-checkout border-bottom border-top py-4">Phương thức vận chuyển</h5>

                    <!-- Shipping Option-->
                    <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodOne" checked="">
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
                            id="checkoutShippingMethodTwo">
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
                            id="checkoutShippingMethodThree">
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

                <!-- Payment -->
                <div class="checkout-panel" data-dashlane-rid="6f1e2c758b1b82b3" data-form-type="payment">
                    <h5 class="title-checkout border-top border-bottom py-4">Thông tin thanh toán</h5>

                    <div class="row">
                        <!-- Payment Option-->
                        <div class="col-12">
                            <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentStripe" checked="" data-dashlane-rid="b63c81cf5837d29e"
                                    data-form-type="payment,type" data-kwimpalastatus="dead">
                                <label class="form-check-label" for="checkoutPaymentStripe">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Thẻ tín dụng</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Option-->
                        <div class="col-12">
                            <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentPaypal" data-dashlane-rid="bc56ab365afa18c8"
                                    data-form-type="payment,type" data-kwimpalastatus="dead">
                                <label class="form-check-label" for="checkoutPaymentPaypal">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">PayPal</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Option-->
                        <div class="col-12">
                            <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentMomo" data-dashlane-rid="bc56ab365afa18c8"
                                    data-form-type="payment,type" data-kwimpalastatus="dead">
                                <label class="form-check-label" for="checkoutPaymentMomo">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Momo</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Details-->
                    <div class="card-details">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-name" class="form-label">Chủ thẻ</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required=""
                                        data-dashlane-rid="f6c038e757f8c296" data-form-type="name,credit_card,payment"
                                        data-kwimpalastatus="alive" data-kwimpalaid="1670526377289-10">
                                    <small class="text-muted">Họ và tên được khắc trên thẻ</small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-number" class="form-label">Số thẻ</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required=""
                                        data-dashlane-rid="97dcdecbe44e1f9d" data-form-type="payment,number,credit_card"
                                        data-kwimpalastatus="alive" data-kwimpalaid="1670526377289-11">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cc-expiration" class="form-label">Hạn</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                        required="" data-dashlane-rid="1faf5e54474b4bc5"
                                        data-form-type="date,expiration,credit_card,payment" data-kwimpalastatus="alive"
                                        data-kwimpalaid="1670526377289-12">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label for="cc-cvv"
                                            class="form-label d-flex w-100 justify-content-between align-items-center">Mã bảo vệ</label>
                                        <button type="button" class="btn btn-link p-0 fw-bolder fs-xs text-nowrap"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="A CVV is a number on your credit card or debit card that's in addition to your credit card number and expiration date"
                                            data-dashlane-rid="4994ab64affc0f7c" data-form-type="other"
                                            data-dashlane-label="true">
                                            Đây là gì?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required=""
                                        data-dashlane-rid="343ca18b7f51c050" data-form-type="payment,credit_card,cvv"
                                        data-kwimpalastatus="alive" data-kwimpalaid="1670526377289-13">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Payment Details-->

                    <!-- Paypal Info-->
                    <div class="paypal-details bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferred to Paypal to enter your payment
                        details.
                    </div>
                    <!-- /Paypal Info-->
                </div>
                <!-- /Payment -->
            </div>
            <!-- /Checkout Panel Left -->

            <!-- Checkout preview - Right -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="bg-light p-4 sticky-md-top top-5" data-dashlane-rid="82f5ff0d48579d1c"
                    data-form-type="other">
                    <div class="border-bottom pb-3">
                        <!-- Cart Item-->
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
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
                        </div>
                        <!-- / Cart Item-->
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 fw-bolder fs-6">Tạm tính</p>
                            <p class="m-0 fs-6 fw-bolder">$422.99</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="m-0 fw-bolder fs-6">Phí giao hàng</p>
                            <p class="m-0 fs-6 fw-bolder">$8.95</p>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 fw-bold fs-5">Tổng cộng</p>
                                <span class="text-muted small">Đã bao gồm 10% thuế GTGT</span>
                            </div>
                            <p class="m-0 fs-5 fw-bold">$422.99</p>
                        </div>
                    </div>
                    <!-- Accept Terms Checkbox-->
                    <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked=""
                            data-dashlane-rid="3c9caa1d7baabb3a" data-form-type="consent,terms">
                        <label class="form-check-label fw-bolder" for="accept-terms">Tôi đã đồng ý <a
                                href="#">điều khoản &amp; dịch vụ</a></label>
                    </div>
                    <a href="#" class="btn btn-dark w-100" role="button" data-dashlane-rid="af75b47f85be43cd"
                        data-form-type="other" data-dashlane-label="true">Hoàn thành đặt hàng</a>
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