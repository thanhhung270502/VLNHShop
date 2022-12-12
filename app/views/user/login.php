<?php
require_once __DIR__ . '/../../../controllers/user.php';

setcookie("user_id", "", time() - 3600, "/");

$user = [
    'username' => '',
    'password' => '',
];
$error = [
    'username' => '',
    'password' => '',
    'not_exist' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_name = ['username-login', 'password-login'];
    $i = 0;
    foreach ($user as $key => &$value) {
        $value = $_POST[$post_name[$i]];
        ++$i;
    }
    LoginSubmit($user,$error);
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
                href="../../assets/css/style.css"
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
        <div class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
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
                                            <p>Đăng nhập vào tài khoản của bạn</p>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="text"
                                                               id="username-login"
                                                               name="username-login"
                                                               class="form-control"
                                                               value="<?php echo $user['username']?>"/>
                                                        <label class="form-label" for="username-login">Tên đăng nhập</label>
                                                    </div>
                                                    <span class="text-danger ms-1 d-inline-block">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['username']?></p>
                                            </div>

                                            <div class="mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-outline">
                                                        <input type="password"
                                                               id="password-login"
                                                               name="password-login"
                                                               class="form-control"
                                                               value="<?php echo $user['password']?>"/>
                                                        <label class="form-label" for="password-login">Mật khẩu</label>
                                                    </div>
                                                    <span class="text-danger ms-1">*</span>
                                                </div>
                                                <p class="text-danger mt-1"><?php echo $error['password']?></p>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">
                                                    Đăng nhập
                                                </button>
                                                <p class="text-danger mt-1"><?php echo $error['not_exist']?></p>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Chưa có tài khoản?</p>
                                                <a type="button" class="btn btn-outline-danger" href="register.php">Đăng ký</a>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Đến và trải nghiệm</h4>
                                        <p class="small mb-0">
                                            Điều bất ngờ đang chờ đợi bạn...
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