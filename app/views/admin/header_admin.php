<!-- Navbar -->
<div class="position-relative z-index-30 m-0 p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg z-index-30 w-100 bg-dark" style="height: 70px;">
        <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
                <!-- Logo -->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 text-white" href="./" style="width: 5%;">
                    <!-- Start of Navigation brand -->
                    <div class="d-flex align-items-center">
                        <!-- Start of Logo -->
                        <img src="../../assets/images/logos/hvln-black.webp" class="bg-light me-2" style="width: 60%;" alt="Logo VLNH">
                        <!-- End of Logo -->

                        <!-- Start of Text -->
                        <span class="fs-5">VLNH</span>
                        <!-- End of Text -->
                    </div>
                    <!-- End of Navigation Brand -->
                </a>
                <!-- Logo -->

                <!-- Navigation Icons -->
                <ul class="list-unstyled mb-0 d-flex align-items-center">

                    <!-- Navbar Wishlist-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                            <i class="ri-heart-line ri-lg align-middle text-white"></i>
                        </a>
                    </li>
                    <!-- /Navbar Wishlist-->

                    <!-- Navbar Cart-->
                    <li class="ms-1 d-inline-block position-relative">

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
                        <?php
                        require_once __DIR__.'/../../../controllers/user.php';
                        if (isset($_COOKIE['user_id'])) {
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
                                ', GetName($_COOKIE['user_id']), $profile_path, $_COOKIE['user_id'], $login_path);
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
