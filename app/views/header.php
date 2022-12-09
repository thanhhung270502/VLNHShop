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
<button type="button" class="cart-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Gio~
          </button>

          <!-- Modal -->
          <div class="modal fade cart_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <li class="border-bottom"><a class="dropdown-item dropdown-padding">
                          <div class="d-flex">
                            <div class="col-2">
                                <img src="../" alt="abc" class="img-fluid">
                            </div>
                            <div class="col-8 cart-item__infor">
                              <div class="cart-item__name">
                                ABC
                              </div>
                              <div class="cart-item__size">
                                Size:
                                L
                              </div>
                              <div class="cart-item__quantity">
                                Qty:
                                1
                              </div>
                            </div>
                              <div class="col-2 cart-item__price">
                                456
                              </div>
                          </div>
                        </a></li>
                </div>
                <div class="modal-footer">
                  <div class="d-flex justify-content-between modal_total w-100">
                    <div>
                      Subtotal
                    </div>
                    <div>
                     5.0
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- /Offcanvas for Cart -->