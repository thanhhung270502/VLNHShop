<!-- Footer -->
<footer class="bg-dark">
    <!-- Menus & NewsLetter -->
    <div class="border border-dark border-top">
        <div class="container">
            <div class="row my-4 text-white">

                <!-- Footer Nav-->
                <nav class="col-3 col-md mb-4 mb-md-0">
                    <h6 class="mb-4 fw-bolder fs-6">Tổ chức</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="#">Về chúng tôi</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="#">Blog</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="#">FAQs</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="#">Liên hệ</a></li>
                    </ul>
                </nav>
                <!-- /Footer Nav-->

                <!-- Footer Nav-->
                <nav class="col-3 col-md mb-4 mb-md-0">
                    <h6 class="mb-4 fw-bolder fs-6">Các trang</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="./user/register.php">Đăng ký</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="./cart.php">Giỏ hàng</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="./checkout.php">Thanh toán</a></li>
                        
                        <?php
                        require_once __DIR__.'/../../controllers/user.php';
                        if (isset($_COOKIE['user_id'])) {
                            echo '<li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="./user/edit-profile.php?id=%d">Tài khoản</a></li>';}
                        else{
                            echo '<li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all" href="./user/register.php">Tài khoản</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
                <!-- /Footer Nav-->

                <!-- Footer Contact-->
                <div class="col-6">
                    <h6 class="mb-4 fw-bolder fs-6">Nhận thông báo từ chúng tôi</h6>
                    <p class="opacity-75">Đăng ký nhận thông báo của chúng tôi, chúng tôi sẽ gửi cho bạn mã giảm giá 15% ứng với giá trị đơn hàng đầu tiên của bạn. Khi bạn đồng ý đăng ký nhận thư từ chúng tôi, bạn đã đồng ý với những điều khoản điều kiện của công ty.</p>
                    <form class="bg-white d-flex justify-content-start align-items-center border-dark-focus-within transition-all mt-4">
                        <div class="input-group m-0">
                            <input type="text" class="form-control d-flex flex-grow-1 border-0 bg-transparent py-3" placeholder="Nhập Email của bạn" aria-label="Nhập Email của bạn">
                            <span class="input-group-text bg-transparent border-0"><a class="text-decoration-none text-dark" href="/"><i class="ri-arrow-right-line align-middle"></i></a></span>
                        </div>
                    </form>
                </div>
                <!-- /Footer Contact-->


            </div>
            <div class="row border-light border-top">
                <div class="col-6">
                    <p class="small opacity-75 text-white mt-3">&copy; 2022 All Rights Reserved. Designed by VLNH</p>
                </div>
                <div class="col-6">
                    <div class="container d-flex justify-content-end align-items-center mt-3">
                        <p class="lead d-none d-md-flex fw-bolder mb-0 lh-1 text-white">Find us online</p>
                        <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0 ms-3 lh-1">
                            <li class="mx-1 mb-0 lh-1"><a class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i class="ri-instagram-fill ri-xl lh-1"></i></a></li>
                            <li class="mx-1 mb-0 lh-1"><a class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i class="ri-facebook-fill ri-xl lh-1"></i></a></li>
                            <li class="mx-1 mb-0 lh-1"><a class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i class="ri-twitter-fill ri-xl lh-1"></i></a></li>
                            <li class="mx-1 mb-0 lh-1"><a class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i class="ri-snapchat-fill ri-xl lh-1"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menus & NewsLetter -->
</footer>
<!-- /Footer -->