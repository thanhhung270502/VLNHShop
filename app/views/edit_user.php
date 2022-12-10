<?php
require_once __DIR__.'/../../controllers/user.php';

CheckAdminUser($_COOKIE['user-id']);

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    header('Location: admin_dashboard.php');
}

$user = [
    'id' => '',
    'cur-username' => '',
    'username' => '',
    'password' => '',
    'name' => '',
    'phone' => '',
    'address' => ''
];

$error = [
    'username' => '',
    'password' => '',
    'name' => '',
    'phone' => '',
    'address' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        GetUserData($user, $_GET['id']);
    } else {
        header('Location: admin_dashboard.php');
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_name = ['id', 'cur-username', 'username-edit', 'password-edit', 'fullname', 'phone', 'address'];
    $i = 0;
    foreach ($user as $key => &$value) {
        $value = $_POST[$post_name[$i]];
        ++$i;
    }
    EditUserData($user, $error);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage User</title>

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
    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <div class="h-100 gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-5">
                        <div class="card rounded-3 text-black p-5">
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Chỉnh sửa thành viên</h4>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                                <div class="m-0">
                                    <input type="text"
                                           id="cur-username"
                                           name="cur-username"
                                           class="form-control"
                                           value="<?php echo $user['username']?>" hidden/>
                                </div>

                                <div class="m-0">
                                    <input type="text"
                                           id="id"
                                           name="id"
                                           class="form-control"
                                           value="<?php echo $user['id']?>" hidden/>
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="username-edit"
                                                   name="username-edit"
                                                   class="form-control"
                                                   value="<?php echo $user['username']?>"/>
                                            <label class="form-label" for="username-edit">Tên đăng nhập</label>
                                        </div>
                                        <span class="text-danger ms-1 d-inline-block">*</span>
                                    </div>
                                    <p class="text-danger mt-1"><?php echo $error['username']?></p>
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="password-edit"
                                                   name="password-edit"
                                                   class="form-control"
                                                   value="<?php echo $user['password']?>"/>
                                            <label class="form-label" for="password-edit">Mật khẩu</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>
                                    <p class="text-danger mt-1"><?php echo $error['password']?></p>
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
                                    <p class="text-danger mt-1"><?php echo $error['address']?></p>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1 d-flex align-items-center justify-content-center">
                                    <a href="./manage_user.php">
                                        <button class="btn btn-primary fa-lg mx-3" type="button">
                                            Quay lại
                                        </button>
                                    </a>
                                    <button class="btn btn-success fa-lg mx-3" type="submit">
                                        Lưu thay đổi
                                    </button>
                                    <span class="text-white ms-1">*</span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>

        <script src="../assets/js/vendor.bundle.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.bundle.js"></script>
    </body>
</html>