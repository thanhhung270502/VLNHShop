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
                        <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194"><path fill="currentColor" class="svg-logo-white" d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z"></path><path fill="currentColor" class="svg-logo-dark" d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z"></path></svg>
                        </div>
                        <!-- End of Logo -->

                        <!-- Start of Text -->
                        <span class="fs-5">VLNH</span>
                        <!-- End of Text -->
                    </div>
                    <!-- End of Navigation Brand -->
                </a>
                <!-- Logo -->

                <!-- Search -->
                <div class="ms-5 w-auto d-flex align-items-center">
                    <form class="d-flex" role="search">
                        <input class="form-control bg-light px-4" type="search" placeholder="Search" aria-label="Search" style="border-radius: 1rem 0 0 1rem;
                        border-bottom-left-radius: 1rem;">
                        
                        <button class="btn btn-link px-3 text-decoration-none d-flex align-items-center bg-light text-dark" data-pr-search style="border-radius: 0 1rem 1rem 0;">
                            <i class="ri-search-2-line align-middle"></i>
                        </button>
                    </form>
                </div>
                <!-- /Search -->

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
                        <a class="text-white text-decoration-none fw-bold" href="./login.php">
                            Sign In
                        </a>
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