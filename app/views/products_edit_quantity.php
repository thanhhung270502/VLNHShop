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
  <link rel="stylesheet" href="../assets/css/general.css">  
  <link rel="stylesheet" href="../assets/css/products_new.css">
  <link rel="stylesheet" href="../assets/css/products_show.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <?php
    include('header.php');
    include('../../controllers/products/products_edit_quantity.php');
  ?>

  <div class="form-container">
    <div class="col-lg-8 form-inner"> 
      <div class="form__title">
        Chỉnh Sửa Số Lượng
      </div>
      <div class="form__content">
        <div class="row">
          <div class="col-12">
            <label class="mb-3 form-label">Size</label>
          </div>
          <?php
            $product_id = 0;
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $product_id = $row["product_id"];
                echo '
                  <div class="mb-3">
                  <form action="../../controllers/products/products_update_quantity.php" action="GET">
                    <div class="row">
                      <div class="col-10 mb-3">
                        <div class="input-group flex-nowrap">
                          <span class="input-group-text" id="addon-wrapping">'.$row["name"].'</span>
                          <input type="text" class="form-control" value="'.$row["quantity_remain"].'" name="quantity">
                        </div>
                      </div>  
                      <div class="col-2">
                        <input type="text" name="product_id" value="'.$product_id.'" style="display: none;">
                        <input type="hidden" name="product_sizes_id" value="'.$row["product_size_id"].'" style="display: none;"/>
                        <input type="submit" class="btn btn-primary w-100">
                      </div>
                    </div>
                  </form>
                  </div>
                ';
              }
            }
            echo '<a href="./products_show.php?id='.$product_id.'" class="btn btn-secondary">Quay lại</a>';
          ?>
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