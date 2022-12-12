<?php
require_once __DIR__ . '/../../../controllers/user.php';

CheckAdminUser($_COOKIE['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>

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
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black p-5">
                        <div class="text-center">
                            <h4 class="mt-1 mb-5 pb-1">Trang quản trị viên</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="manage_user.php" class="mx-2">
                                <button type="button" class="btn btn-primary btn-rounded">Quản lý thành viên</button>
                            </a>
                            <a href="../products_index.php" class="mx-2">
                                <button type="button" class="btn btn-success btn-rounded">Quản lý sản phẩm</button>
                            </a>
                        </div>
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