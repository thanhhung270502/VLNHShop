<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/VLNHShop/controllers/user.php';

$user = [
    'username' => '',
    'password' => '',
    'confirm' => '',
    'name' => '',
    'phone' => '',
    'address' => ''
];
$error = [
    'username' => '',
    'password' => '',
    'confirm' => '',
    'name' => '',
    'phone' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_name = ['username-signup', 'password-signup', 'confirm-password', 'fullname', 'phone', 'address'];
    $i = 0;
    foreach ($user as $key => &$value) {
        $value = $_POST[$post_name[$i]];
        ++$i;
    }
    RegisterSubmit($user, $error);
}
?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
        <title>Register</title>

    </head>
    <body>
        <div class="h-100 gradient-form">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <h4 class="mt-1 mb-5 pb-1">Chào mừng bạn đến với VLNH Shop</h4>
                                        </div>

                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                            <p>Đăng ký và trở thành một thành viên của VLNH Shop</p>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="text"
                                                               id="username-signup"
                                                               name="username-signup"
                                                               class="form-control"
                                                               value="<?php echo $user['username']?>"/>
                                                        <label class="form-label" for="username-signup">Tên đăng nhập</label>
                                                    </div>
                                                    <span class="text-danger ms-1 d-inline-block">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['username']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="password"
                                                               id="password-signup"
                                                               name="password-signup"
                                                               class="form-control"
                                                               value="<?php echo $user['password']?>"/>
                                                        <label class="form-label" for="password-signup">Mật khẩu</label>
                                                    </div>
                                                    <span class="text-danger ms-1">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['password']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="password"
                                                               id="confirm-password"
                                                               name="confirm-password"
                                                               class="form-control"
                                                               value="<?php echo $user['confirm']?>"/>
                                                        <label class="form-label" for="confirm-password">Xác nhận mật khẩu</label>
                                                    </div>
                                                    <span class="text-danger ms-1">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['confirm']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="text"
                                                               id="fullname"
                                                               name="fullname"
                                                               class="form-control"
                                                               value="<?php echo $user['name']?>"/>
                                                        <label class="form-label" for="fullname">Họ và tên</label>
                                                    </div>
                                                    <span class="text-danger ms-1">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['name']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="text"
                                                               id="phone"
                                                               name="phone"
                                                               class="form-control"
                                                               value="<?php echo $user['phone']?>"/>
                                                        <label class="form-label" for="phone">Số điện thoại</label>
                                                    </div>
                                                    <span class="text-white ms-1">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['phone']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="text"
                                                               id="address"
                                                               name="address"
                                                               class="form-control"
                                                               value="<?php echo $user['address']?>"/>
                                                        <label class="form-label" for="address">Địa chỉ</label>
                                                    </div>
                                                    <span class="text-white ms-1">*</span>
                                                </div>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1 d-flex align-items-center">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">
                                                    Đăng ký
                                                </button>
                                                <span class="text-white ms-1">*</span>
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
        </div>
    </body>
</html>