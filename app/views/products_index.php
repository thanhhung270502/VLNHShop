<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/theme.bundle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/general.css">
  <link rel="stylesheet" href="../assets/css/products_index.css">
  <link rel="stylesheet" href="../assets/css/homepage.css">
</head>
<body>
  <?php 
    include('header.php');
    include('../../controllers/products/products_index.php');
  ?>

  <div class="products_index">
    <div class="products_index_header">
        <div class="products_index_inner_header">
            <div class="container">
                <div class="products_index_breadcumb mb-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./index.php">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="#">Sản phẩm</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <h2>Mẫu mới</h2>
                <div class="content">
                    <p> 
                      VLNH luôn nghiên cứu, phát triển mỗi ngày để mang đến những sản phẩm đa dạng về chất liệu, nhiều tính năng, đa dạng giá thành... mang lại nhiều sự lựa chọn hơn cho khách hàng.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="products_index_main pb-5">
      <div class="container pb-4 border-bottom">
        <div class="d-flex pb-3">
            <div class="col-6">
                <div class="products_index_main_title">Sản phẩm mới</div>
            </div>
            <?php
              if (isset($_COOKIE["user_id"])) {
                $user_id = $_COOKIE["user_id"];
                $sql = "SELECT * FROM user WHERE id = $user_id";
                $result_user = $conn->query($sql);
                $user = $result_user->fetch_assoc();
                if ($user && $user["role"] == 0) {
                  echo '
                    <div class="col-6 text-end">
                        <a class="btn btn-secondary" href="./products_new.php">Add new product</a>
                    </div>
                  ';
                }
              }
            ?>
        </div>
        <div class="row">
          <?php
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                if ($row["src"][0] == 'h' && $row["src"][1] == 't' && $row["src"][2] == 't' && $row["src"][3] == 'p') {
                  echo '
                    <div class="col-lg-3 col-md-4" style="height: 540px;  ">
                      <div style="background-color: var(--white);">
                        <form action="./products_show.php" method="get">
                          <input type="text" value="' . $row["product_id"] . '" name="id" style="display: none;">   
                          <div class="products_index_main_image text-center" style="height: 70%;">
                            <img src="'.$row["src"].'" alt="" class="img-fluid" style="height: 400px;"/>
                          </div>
                          <div class="px-3 pb-3" style="height: 30%;">
                            <div class="text-center">
                              <div class="products_index_main_name">'.$row["name"].'</div>
                              <div class="products_index_main_price">$'.$row["price"].'</div>
                            </div>
                            <div class="text-center mt-3"><input type="submit" value="Xem ngay" name="submit" class="btn__add_to_cart"/></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  ';
                }
                else {
                  echo '
                    <div class="col-lg-3 col-md-4 mb-3">
                      <div style="background-color: var(--white);">
                        <form action="./products_show.php" method="get">
                          <input type="text" value="' . $row["product_id"] . '" name="id" style="display: none;">   
                          <div class="products_index_main_image">
                            <img src="../../'.$row["src"].'" alt="" class="img-fluid"/>
                          </div>
                          <div class="px-3 pb-3 ">
                            <div class="text-center">
                              <div class="products_index_main_name">'.$row["name"].'</div>
                              <div class="products_index_main_price">$'.$row["price"].'</div>
                            </div>
                            <div class="text-center mt-3"><input type="submit" value="Xem ngay" name="submit" class="btn__add_to_cart"/></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  ';
                }
              }
            }
          ?>
            
        </div>
      </div>
    </div>
    <div class="container">
        <div class="products_index_categories">
            <div class="title">Related Categories</div>
            <div class="field_categories">
                <div class="category">Hiking Shoes</div>
                <div class="category">Waterproof Trousers</div>
                <div class="category">Hiking Shirt</div>
                <div class="category">Jacket</div>
            </div>
        </div>
    </div>
  </div>
  <?php
    include('./footer.php')
  ?>
  <script src="../assets/js/vendor.bundle.js"></script>
  
  <!-- Theme JS -->
  <script src="../assets/js/theme.bundle.js"></script>
</body>
</html>