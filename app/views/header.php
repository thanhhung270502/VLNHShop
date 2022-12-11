<!-- Navbar -->
<div class="position-relative z-index-30 m-0 p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg z-index-30 w-100 bg-dark" style="height: 70px;">
        <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
                <!-- Logo -->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 text-white" href="./">
                    <!-- Start of Navigation brand -->
                    <div class="d-flex align-items-center">
                        <!-- Start of Logo -->
                        <!-- End of Logo -->

                        <!-- Start of Text -->
                        <span class="fs-5">VLNH</span>
                        <!-- End of Text -->
                    </div>
                    <!-- End of Navigation Brand -->
                </a>
                <!-- Logo -->

                <!-- Main Navigation -->
                <div class="ms-5 flex-shrink-0 collapse navbar-collapse w-auto flex-grow-1">
                    <!-- Begin Button for MainNav -->
                    <ul class="navbar-nav py-lg-2 mx-auto">
                        <!-- Menswear Menu -->
                        <li class="nav-item me-lg-4 dropdown position-static">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menswear
                            </a>
                            <!-- Menswear Dropdown menu -->
                            <div class="container-fluid dropdown-menu ">
                                <div class="row d-flex" style="height: 300px;">
                                    <!-- Dropdown Content -->
                                    <div class="col align-self-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="dropdown-header">
                                                    WATERPROOF LAYERS
                                                </h6>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Jacket</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Jacket</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Jacket</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Jacket</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Jacket</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="dropdown-header">
                                                    BRANDS
                                                </h6>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Brand</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Brand</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Brand</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Brand</a></li>
                                                    <li class="dropdown-list-item>"><a class="dropdown-item" href="#">Sample Brand</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dropdown Content -->

                                    <!-- Dropdown Image -->
                                    <div class="col">
                                        <div class="bg-image bg-pos-center-center h-100" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.webp');"></div>
                                    </div>
                                    <!-- Dropdown Image -->
                                </div>
                            </div>
                            <!-- Menswear Dropdown menu -->
                        </li>
                        <!-- Menswear Menu -->

                    </ul>
                    <!-- End Button for MainNav -->
                </div>
                <!-- Main Navigation -->

                <!-- Navigation Icons -->
                <ul class="list-unstyled mb-0 d-flex align-items-center">

                    <!-- Navbar Search-->
                    <li class="ms-1 d-inline-block">
                        <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-pr-search>
                            <i class="ri-search-2-line ri-lg align-middle text-white"></i>
                        </button>
                    </li>
                    <!-- /Navbar Search-->

                    <!-- Navbar Wishlist-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                            <i class="ri-heart-line ri-lg align-middle text-white"></i>
                        </a>
                    </li>
                    <!-- /Navbar Wishlist-->

                    <!-- Navbar Cart-->
                    <li class="ms-1 d-inline-block position-relative">
                        <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" href="./cart.php">
                            <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-white"></i>
                        </a>
                    </li>
                    <!-- /Navbar Cart-->

                    <!-- Navbar Login-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center" href="#">
                            <i class="ri-user-line ri-lg align-middle text-white"></i>
                        </a>
                    </li>
                    <!-- /Navbar Login-->

                    <!-- Navbar Sign In -->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <?php
                        require_once __DIR__.'/../../controllers/user.php';
                            if (isset($_COOKIE['user-id'])) {
                                if (preg_match('(/VLNHShop/app/views/admin)', $_SERVER['REQUEST_URI'])) {
                                    $profile_path = '../user/edit-profile.php?id=';
                                    $login_path = '../user/login.php';
                                } else {
                                    $profile_path = 'user/edit-profile.php?id=';
                                    $login_path = 'user/login.php';
                                }
                                if (preg_match('(/VLNHShop/app/views/user/edit-profile.php)', $_SERVER['REQUEST_URI'])) {
                                    $profile_path = '/VLNHShop/app/views/user/edit-profile.php?id=';
                                    $login_path = 'login.php';
                                }
                                echo sprintf('
                                    <div class="dropdown">
                                        <a class="btn text-white text-decoration-none fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        %s
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" style="right: 0; left: auto;">
                                            <li><a class="dropdown-item py-1" href="%s%d">Hồ sơ</a></li>
                                            <li><a class="dropdown-item py-1" href="%s">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                ', GetName($_COOKIE['user-id']), $profile_path, $_COOKIE['user-id'], $login_path);
                            } else {
                                echo '
                                <a class="text-white text-decoration-none fw-bold" href="user/login.php">
                                    Đăng nhập
                                </a>';
                            }
                        ?>
                    </li>
                    <!-- /Navbar Sign In -->

                </ul>
                <!-- Navigation Icons -->
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</div>
<!-- Navbar -->

<!-- Offcanvas for Cart -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
            <div>

                <!-- Cart Product-->
                <div class="row mx-0 pb-4 mb-4 border-bottom">
                    <div class="col-3">
                        <picture class="d-block bg-light">
                            <img class="img-fluid" src="../assets/images/products/product-1.jpg" alt="Bootstrap 5 Template by Pixel Rocket">
                        </picture>
                    </div>
                    <div class="col-9">
                        <div>
                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                Mens StormBreaker Jacket
                                <a class="text-decoration-none text-dark" href="#"><i class="ri-close-line"></i></a>
                            </h6>
                            <small class="d-block text-muted fw-bolder">Size: Medium</small>
                            <small class="d-block text-muted fw-bolder">Qty: 1</small>
                        </div>
                        <p class="fw-bolder text-end m-0">$85.00</p>
                    </div>
                </div>

                <!-- Cart Product-->
                <div class="row mx-0 pb-4 mb-4 border-bottom">
                    <div class="col-3">
                        <picture class="d-block bg-light">
                            <img class="img-fluid" src="../assets/images/products/product-2.jpg" alt="Bootstrap 5 Template by Pixel Rocket">
                        </picture>
                    </div>
                    <div class="col-9">
                        <div>
                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                Mens Torrent Terrain Jacket
                                <a class="text-decoration-none text-dark" href="#"><i class="ri-close-line"></i></a>
                            </h6>
                            <small class="d-block text-muted fw-bolder">Size: Medium</small>
                            <small class="d-block text-muted fw-bolder">Qty: 1</small>
                        </div>
                        <p class="fw-bolder text-end m-0">$99.00</p>
                    </div>
                </div>

            </div>
            <div class="border-top pt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fw-bolder">Subtotal</p>
                    <p class="m-0 fw-bolder">$233.33</p>
                </div>
                <a href="./checkout.php" class="btn btn-orange text-white fw-bold mt-5 mb-2 d-block text-center">Checkout</a>
                <a href="./cart.php" class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
            </div>
        </div>
    </div>
</div>
<!-- /Offcanvas for Cart -->