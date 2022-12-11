<?php
require_once __DIR__.'/../../controllers/user.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage User</title>
        <link rel="stylesheet" href="../assets/css/libs.bundle.css" />
        <!-- Main CSS -->
        <link rel="stylesheet" href="../assets/css/theme.bundle.css" />
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
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black p-5">
                        <div class="text-center">
                            <h4 class="mt-1 mb-5 pb-1">Quản lý thành viên</h4>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="search" class="form-control" id="datatable-search-input" onkeyup="searchTable()">
                            <label class="form-label" for="datatable-search-input">Tìm kiếm</label>
                        </div>
                        <div id="datatable">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                <tr>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Vai trò</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody id="user-table">
                                <?php
                                ShowAllUsers();
                                ?>
                                <script>
                                    function searchTable() {
                                        let input, filter, found, table, tr, td, i, j;
                                        input = document.getElementById("datatable-search-input");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("user-table");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td");
                                            for (j = 0; j < td.length; j++) {
                                                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                                    found = true;
                                                }
                                            }
                                            if (found) {
                                                tr[i].style.display = "";
                                                found = false;
                                            } else {
                                                tr[i].style.display = "none";
                                            }
                                        }
                                    }
                                </script>
                                </tbody>
                            </table>
                        </div>
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