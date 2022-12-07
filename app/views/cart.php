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
</head>

<body>

    <?php
        include("header.php")
    ?>

    <section class="mt-5 container">
        <!-- Cart Title -->
        <h1 class="mb-6 display-5 fw-bold text-center">Your Cart</h1>
        <!-- /Cart Title -->

        <!-- Cart Content -->
        <div class="row mt-5">

            <!-- Cart Item -->
            <div class="col-7">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell" style="width: 15%"></th>
                                <th class="ps-sm-3">Details</th>
                                <th>Qty</th>
                                <th style="height: 100%;"></th>
                            </tr>
                        </thead>

                        <!-- Loop here -->
                        <tbody>
                            <tr>
                                <!-- image -->
                                <td class="d-none d-sm-table-cell">
                                    <picture class="d-block bg-light p-3 f-w-20">
                                        <img class="img-fluid" src="../assets/images/products/product-1.jpg" alt="">
                                    </picture>
                                </td>
                                <!-- image -->

                                <!-- Details -->
                                <td>
                                    <div class="ps-sm-3">
                                        <h6 class="mb-2 fw-bolder">
                                            Mens StormBreaker Jacket
                                        </h6>
                                        <small class="d-block text-muted">Blue / Medium</small>
                                    </div>
                                </td>
                                <!-- Details -->

                                <!-- Qty -->
                                <td>
                                    <div class="px-3">
                                        <span class="small text-muted mt-1">1 @ $1129.99</span>
                                    </div>
                                </td>
                                <!-- /Qty -->

                                <!-- Actions -->
                                <td class="position-relative">
                                    <div class="d-flex flex-column align-items-stretch justify-content-between">
                                        <a class="text-decoration-none text-dark" href="#"><i class="ri-close-circle-line ri-lg"></i></a>
                                        <p class="fw-bolder mt-3 m-sm-0" style="position: absolute; top: 70%; left: -50%">$1129.99</p>
                                    </div>
                                </td>
                                <!-- /Actions -->

                            </tr>
                        </tbody>
                        <!-- /Loop here -->

                    </table>
                </div>
            </div>
            <!-- /Cart Item -->

            <div class="col-5">
                <div class="bg-dark p-4 p-md-5 text-white">
                    <h3 class="fs-3 fw-bold m-0 text-center">Order Summary</h3>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2 flex-column flex-sm-row">
                            <p class="m-0 fw-bolder fs-6">Subtotal</p>
                            <p class="m-0 fs-6 fw-bolder">$422.99</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mt-3 m-sm-0">
                            <p class="m-0 fw-bolder fs-6">Shipping</p>
                            <span class="text-white opacity-75 small">Will be set at checkout</span>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                            <div>
                                <p class="m-0 fs-5 fw-bold">Grand Total</p>
                                <span class="text-white opacity-75 small">Inc $45.89 sales tax</span>
                            </div>
                            <p class="mt-3 m-sm-0 fs-5 fw-bold">$422.99</p>
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
                    <a href="./checkout.html" class="btn btn-orange w-100 text-white fw-bold mt-3" role="button" data-dashlane-rid="913cb21ce6af3f20"><i class="ri-secure-payment-line align-bottom"></i> Proceed to checkout</a>
                    <a href="./checkout.html" class="btn btn-orange w-100 text-white fw-bold mt-3" role="button" data-dashlane-rid="48d77dcecd2a4151"><i class="ri-paypal-line align-bottom"></i> Checkout with PayPal</a>
                    <!-- Checkout Button-->
                </div>

                <!-- Payment Icons-->
                <ul class="list-unstyled d-flex justify-content-center mt-3">
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-paypal"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-mastercard"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-american-express"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-visa"></i></li>
                </ul>
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