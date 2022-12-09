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

<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title">Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

    <div class="modal-body">
    <?php 
        include('../../controllers/cart/cart_index.php');
        $total_money = 0;
        if ($items_result->num_rows > 0) {
            while($cart_item = $items_result->fetch_assoc()) {
                $item_id = $cart_item['product_id'];
                $img_link = '../../'.$cart_item['img'];
                $sub_total_money = $cart_item['quantity'] * $cart_item['price'];
                $total_money += $sub_total_money;
    ?>
            <div class="border-bottom p-2">
                <div class="row">
                    <div class="col-3">
                        <picture class="d-block bg-light">
                            <img class="img-fluid" src="<?php echo $img_link; ?>" alt="">
                        </picture>
                    </div>
                    <div class="col-6 cart-item__infor">
                      <div class="cart-item__name fs-6">
                        <!-- <%= cart_item.product.name %> --><?php echo $cart_item['name'];?>
                      </div>
                      <div class=" fs-6 cart-item__size fw-semibold text-secondary">
                        Size: M
                      </div>
                      <div class="fs-6 cart-item__quantity fw-semibold text-secondary">
                        Qty: <?php echo $cart_item['quantity']; ?>
                      </div>
                    </div>
                    
                    <div class="col-3 d-flex flex-column align-items-stretch justify-content-between">
                        <a 
                            href="../../controllers/cart/cart_item_delete.php?id=<?php echo $item_id; ?>"
                            class="text-decoration-none text-dark"    
                        ><i class="ri-close-circle-line ri-lg"></i></a>    
                                    <!-- <button class="delete-button bg-white border-0"><i class="ri-close-circle-line ri-lg"></i></button> -->
                        <!-- <div class="fw-semibold">Price</div> -->
                        <div class="mt-5 fw-bold">$<?php echo $sub_total_money; ?></div>
                    </div>
                    <!-- <% if cart_item.product.price == cart_item.product.current_price %>
                      <div class="col-2 cart-item__price">
                        $<%= cart_item.product.price %>
                      </div>
                    <% else %>
                      <%= content_tag :div, class: "col-2 cart-item__new_price" do %>
                        <span>$<%= cart_item.product.price %></span> <br/>
                        $<%= cart_item.product.current_price %>
                      <% end %>
                    <% end %> -->
                </div>
            </div>
    <?php
            }
        }
    ?>
    </div>

      <div class="m-3">
          <div class="border-top p-3">
              <div class="d-flex justify-content-between align-items-center">
                  <p class="m-0 fw-bolder">Subtotal</p>
                  <p class="m-0 fw-bolder">$<?php echo $total_money; ?></p>
              </div>
              <a href="./checkout.php" class="btn btn-orange text-white fw-bold mt-5 mb-2 d-block text-center">Checkout</a>
              <a href="./cart.php" class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->