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
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title">Giỏ hàng</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

    <div class="modal-body">
    <?php 
        include('../../controllers/cart/cart_index.php');
        $total_money = 0;
        if ($items_result->num_rows > 0) {
            while($cart_item = $items_result->fetch_assoc()) {
                $item_id = $cart_item['product_id'];
            
                $sub_total_money = $cart_item['quantity'] * $cart_item['price'];
                $total_money += $sub_total_money;

                // lấy ảnh trong bảng product_images
                $img_query = "SELECT * FROM product_images WHERE product_id=$item_id";
                $imgs = $conn->query($img_query);
                $img_link = '../../'.$imgs->fetch_assoc()['src'];
    ?>
            <div class="border-bottom p-2">
                <div class="row">
                    <div class="col-3">
                        <picture class="d-block bg-light">
                            <img class="img-fluid" src="<?php echo $img_link; ?>" alt="">
                        </picture>
                    </div>
                    <div class="col-6 cart-item__infor">
                      <div class="cart-item__name fs-6 fw-bold">
                        <!-- <%= cart_item.product.name %> --><?php echo $cart_item['name'];?>
                      </div>
                      <div class=" fs-6 cart-item__size fw-semibold text-secondary">
                        Size: 
                        <?php
                            $size_id = $cart_item['size'];
                            $size_name_result = $conn->query("SELECT * FROM size WHERE id='$size_id'");
                            $size_name = $size_name_result->fetch_assoc()['name'];
                            echo $size_name;
                        ?>
                      </div>
                      <div class="fs-6 cart-item__quantity fw-semibold text-secondary">
                        Qty: <?php echo $cart_item['quantity']; ?>
                      </div>
                    </div>
                    
                    <div class="col-3 d-flex flex-column align-items-stretch justify-content-between">
                        <a 
                            href="../../controllers/cart/cart_item_delete.php?id=<?php echo $item_id; ?>&size=<?php echo $size_id; ?>"
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

        //cập nhật tổng tiền
        $conn->query("UPDATE cart SET total_money='$total_money'");
    ?>
    </div>

      <div class="m-3">
          <div class="border-top p-3">
              <div class="d-flex justify-content-between align-items-center">
                  <p class="m-0 fw-bolder">Tổng</p>
                  <p class="m-0 fw-bolder">$<?php echo $total_money; ?></p>
              </div>
              <a href="./checkout.php" class="btn btn-orange text-white fw-bold mt-5 mb-2 d-block text-center">Thanh toán</a>
              <a href="./cart.php" class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">Xem giỏ hàng</a>
          </div>
      </div>
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

