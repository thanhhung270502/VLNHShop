<?php
require_once __DIR__ . '/../../../controllers/user.php';

CheckAdminUser($_COOKIE['user_id']);

$user = [
    'id' => '',
    'username' => '',
    'password' => '',
    'name' => '',
    'phone' => '',
    'address' => ''
];

$error = [
    'name' => '',
    'phone' => '',
    'address' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        GetUserData($user, $_GET['id']);
    } else {
        header('Location: admin-dashboard.php');
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = ['id', 'password', 'name', 'phone', 'address'];
    foreach ($fields as $field) {
        $user[$field] = $_POST[$field];
    }
    EditUserData($user, $error, $_SERVER['REQUEST_URI']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit User</title>

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
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
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
    </head>
    <body>
        <?php
        include('header_admin.php');
        ?>
        <div class="h-100 gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-5">
                        <div class="card rounded-3 text-black p-5">
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Chỉnh sửa người dùng</h4>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

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
                                                   id="username"
                                                   name="username"
                                                   class="form-control"
                                                   value="<?php echo $user['username']?>" disabled/>
                                            <label class="form-label" for="username">Tên đăng nhập</label>
                                        </div>
                                        <span class="text-white ms-1">*</span>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="password"
                                                   name="password"
                                                   class="form-control"
                                                   value="<?php echo $user['password']?>"/>
                                            <label class="form-label" for="password">Mật khẩu</label>
                                        </div>
                                        <span class="text-danger ms-1">*</span>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="name"
                                                   name="name"
                                                   class="form-control"
                                                   value="<?php echo $user['name']?>"/>
                                            <label class="form-label" for="name">Họ và tên</label>
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
                                    <a href="manage_user.php">
                                        <button class="btn btn-primary btn-rounded fa-lg mx-3" type="button">
                                            Quay lại
                                        </button>
                                    </a>
                                    <button class="btn btn-success btn-rounded fa-lg mx-3" type="submit">
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
        include('../footer.php');
        ?>

        <script src="../../assets/js/vendor.bundle.js"></script>

        <!-- Theme JS -->
        <script src="../../assets/js/theme.bundle.js"></script>
    </body>
</html>