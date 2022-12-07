<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
        rel="stylesheet"
    />
    <!-- My Styles -->
    <link
        href="../assets/css/style.css"
        rel="stylesheet"
    />
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
    ></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).init();
            });

            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).update();
            });
        });
    </script>
    <title>Login</title>

</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Chào mừng bạn đến với VLNH Shop</h4>
                                </div>

                                <form>
                                    <p>Đăng ký và trở thành một thành viên của VLNH Shop</p>

                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="form-outline">
                                            <input type="email" id="username-signup" class="form-control"
                                                   placeholder="" />
                                            <label class="form-label" for="username-signup">Tên đăng nhập</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>

                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="form-outline">
                                            <input type="password" id="password-signup" class="form-control" />
                                            <label class="form-label" for="password-signup">Mật khẩu</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>

                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="form-outline">
                                            <input type="password" id="confirm-password" class="form-control" />
                                            <label class="form-label" for="confirm-password">Xác nhận mật khẩu</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>

                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="form-outline">
                                            <input type="email" id="fullname" class="form-control"
                                                   placeholder="" />
                                            <label class="form-label" for="fullname">Họ và tên</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>

                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="form-outline">
                                            <input type="email" id="address" class="form-control"
                                                   placeholder="" />
                                            <label class="form-label" for="address">Địa chỉ</label>
                                        </div>
                                        <span class="text-white ms-1">*</span>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">
                                            Đăng ký
                                        </button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Đã có tài khoản?</p>
                                        <a type="button" class="btn btn-outline-danger" href="login.php">Đăng nhập</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Chúng tôi sẽ đem đến cho bạn những điều độc đáo</h4>
                                <p class="small mb-0">
                                    Khi gia nhập VLNH Shop, bạn sẽ có được cơ hội trải nghiệm những mẫu thiết kế mới nhất,
                                    thanh thoát và hợp với gu thời trang của bạn. Những sản phẩm mà chúng tôi đem lại sẽ giúp
                                    bạn trở nên tự tin hơn và sành điệu hơn
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>