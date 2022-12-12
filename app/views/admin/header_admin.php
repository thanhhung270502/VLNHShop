<!-- Navbar -->
<div class="position-relative z-index-30 m-0 p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-light z-index-30 w-100 bg-dark" style="height: 70px;">
        <div class="w-100">
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

                    <!-- Navbar Sign In -->
                    <li class="ms-1 d-inline-block">
                        <?php
                        require_once __DIR__.'/../../../controllers/user.php';
                        if (isset($_COOKIE['user_id'])) {
                            if (preg_match('(/VLNHShop/app/views/admin)', $_SERVER['REQUEST_URI'])) {
                                $profile_path = '../user/edit-profile.php?id=';
                                $login_path = '../user/login.php';
                            } else if (preg_match('(/VLNHShop/app/views/user/edit-profile.php)', $_SERVER['REQUEST_URI'])) {
                                $profile_path = '/VLNHShop/app/views/user/edit-profile.php?id=';
                                $login_path = 'login.php';
                            } else {
                                $profile_path = 'user/edit-profile.php?id=';
                                $login_path = 'user/login.php';
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
