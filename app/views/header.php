<!-- Navbar -->
<div class="position-relative z-index-30 m-0 p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg z-index-30 w-100 bg-dark" style="height: 70px;">
        <div class="w-100 pb-lg-0 pt-lg-0">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
                <!-- Logo -->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 text-white" href="./" style="width: 5%;">
                    <!-- Start of Navigation brand -->
                    <div class="d-flex align-items-center">
                        <!-- Start of Logo -->
                        <img src="../assets/images/logos/hvln-black.webp" class="bg-light me-2" style="width: 60%;">
                        <!-- End of Logo -->

                        <!-- Start of Text -->
                        <span class="fs-5">VLNH</span>
                        <!-- End of Text -->
                    </div>
                    <!-- End of Navigation Brand -->
                </a>
                <!-- Logo -->

                <!-- Search -->
                <div class="ms-5 w-auto d-none d-lg-block d-flex align-items-center justify-content-center">
                    <form class="d-flex ms-5" role="search">
                        <input class="form-control bg-light px-4 ms-5" type="search" placeholder="Search" aria-label="Search" style="border-radius: 1rem 0 0 1rem;
                        border-bottom-left-radius: 1rem;">
                        
                        <button class="btn btn-link px-3 text-decoration-none d-flex align-items-center bg-light text-dark" data-pr-search style="border-radius: 0 1rem 1rem 0;">
                            <i class="ri-search-2-line align-middle"></i>
                        </button>
                    </form>
                </div>
                <!-- /Search -->

                <!-- Navigation Icons -->
                <ul class="list-unstyled mb-0 d-flex align-items-center">

                    <!-- Navigation Toggle Icon -->
                    <li class="d-inline-block d-lg-none">
                        <button class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#NavToggleOffcanvas" aria-controls="NavToggleOffcanvas">
                            <i class="ri-menu-line"></i>
                        </button>
                    </li>
                    <!-- Navigation Toggle Icon -->

                    <!-- Navbar Wishlist-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                            <i class="ri-heart-line ri-lg align-middle text-white"></i>
                        </a>
                    </li>
                    <!-- /Navbar Wishlist-->

                    <!-- Navbar Cart-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <!-- <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" href="./cart.php">
                        <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-white"></i>
                        </a> -->
                        <button type="button" class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#cartModal" aria-controls="cartModal">
                            <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-white"></i>
                        </button>
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
                            Đăng nhập
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

<!-- Modal -->

<!-- /Modal -->

<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="NavToggleOffcanvas" aria-labelledby="NavToggleOffcanvasLabel">
  <div class="offcanvas-header">
    <h6 class="offcanvas-title" id="NavToggleOffcanvasLabel">Menu</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#NavToggleOffcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container d-flex flex-column">
        <!-- Search -->
        <div class="d-flex align-items-center align-self-center">
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
        <ul class="list-unstyled mb-0 align-items-start">

            <!-- Navbar Wishlist-->
            <li class="mt-3">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="#">
                    <i class="ri-heart-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Wish List</span>
                </a>
            </li>
            <!-- /Navbar Wishlist-->

            <!-- Navbar Cart-->
            <li class="mt-1">
                <!-- <a class="btn btn-link px-0 text-decoration-none d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" href="./cart.php">
                <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-dark"></i>
                </a> -->
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center"  data-bs-toggle="modal" data-bs-target="#cartModal" aria-controls="cartModal">
                    <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-dark"></i><span class="fs-5 fw-bold ms-2">Shopping Cart</span>
                </a>
            </li>
            <!-- /Navbar Cart-->

            <!-- Navbar Login-->
            <li class="mt-1 d-inline-block position-relative">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="#">
                    <i class="ri-user-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Tài khoản</span>
                </a>
            </li>
            <!-- /Navbar Login-->

            <!-- Navbar Sign In -->
            <li class="mt-1">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="./login.php">
                    <i class="ri-login-circle-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Đăng nhập</span>
                </a>
            </li>
            <!-- /Navbar Sign In -->

        </ul>
        <!-- Navigation Icons -->
    </div>
  </div>
</div>
<!-- /Modal -->

<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="NavToggleOffcanvas" aria-labelledby="NavToggleOffcanvasLabel">
  <div class="offcanvas-header">
    <h6 class="offcanvas-title" id="NavToggleOffcanvasLabel">Menu</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#NavToggleOffcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container d-flex flex-column">
        <!-- Search -->
        <div class="d-flex align-items-center align-self-center">
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
        <ul class="list-unstyled mb-0 align-items-start">

            <!-- Navbar Wishlist-->
            <li class="mt-3">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="#">
                    <i class="ri-heart-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Wish List</span>
                </a>
            </li>
            <!-- /Navbar Wishlist-->

            <!-- Navbar Cart-->
            <li class="mt-1">
                <!-- <a class="btn btn-link px-0 text-decoration-none d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" href="./cart.php">
                <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-dark"></i>
                </a> -->
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center"  data-bs-toggle="modal" data-bs-target="#cartModal" aria-controls="cartModal">
                    <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10 text-dark"></i><span class="fs-5 fw-bold ms-2">Shopping Cart</span>
                </a>
            </li>
            <!-- /Navbar Cart-->

            <!-- Navbar Login-->
            <li class="mt-1 d-inline-block position-relative">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="#">
                    <i class="ri-user-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Tài khoản</span>
                </a>
            </li>
            <!-- /Navbar Login-->

            <!-- Navbar Sign In -->
            <li class="mt-1">
                <a class="text-dark btn btn-link px-0 text-decoration-none d-flex align-items-center" href="./login.php">
                    <i class="ri-login-circle-line ri-lg align-middle text-dark"></i><span class="fs-5 fw-bold ms-2">Đăng nhập</span>
                </a>
            </li>
            <!-- /Navbar Sign In -->

        </ul>
        <!-- Navigation Icons -->
    </div>
  </div>
</div>
<!-- /Offcanvas -->

