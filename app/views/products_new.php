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
    include('../../controllers/products/products_new.php');
  ?>

  <div class="form-container">
    <div class="col-lg-8 form-inner"> 
      <div class="form__title">
        Add New Product
      </div>
      <form enctype="multipart/form-data" action="../../controllers/products/products_create.php" action="GET">
      <div class="form__content">
        <div class="row">
          <div class="col-12">
            <label for="inputName" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control mb-3" name="name">
          </div>

          <div class="col-6">
            <label for="inputPrice" class="form-label">Giá</label>
            <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
            </div>
          </div>

          <div class="col-6">
            <label for="inputColor" class="form-label">Màu</label>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Lựa chọn</label>
              <select class="form-select" id="inputGroupSelect01" name="color">
                <option value="None" selected>Choose...</option>
                <option value="black">Đen</option>
                <option value="white">Trắng</option>
                <option value="red">Đỏ</option>
                <option value="orange">Cam</option>
                <option value="yellow">Vàng</option>
                <option value="green">Xanh lá</option>
                <option value="blue">Xanh dương</option>
                <option value="purple">Tím</option>
                <option value="pink">Hồng</option>
                <option value="beige">Be</option>
                <option value="brown">Nâu</option>
              </select>
            </div>
          </div>

          <label for="inputImage" class="form-label">Hình ảnh</label>
          <div class="col-12">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Upload</span>
              <input type="text" class="form-control" placeholder="Hình ảnh 1" name="images[]">
            </div>
          </div>

          <div class="col-12">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Upload</span>
              <input type="text" class="form-control" placeholder="Hình ảnh 2" name="images[]">
            </div>
          </div>

          <div class="col-12">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Upload</span>
              <input type="text" class="form-control" placeholder="Hình ảnh 3" name="images[]">
            </div>
          </div>

          <div class="col-12">
            <label for="inputDescription" class="form-label">Sizes</label>
            <div class="">
              <div class="input-group">
                <?php
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo '
                        <label class="me-2">
                          <div class="input-group mb-3">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" type="checkbox" value='.$row["id"].' name="size[]" aria-label="Checkbox for following text input">
                            </div>
                            <label class="form-control">'.$row["name"].'</label>
                          </div>
                        </label>
                      ';
                    }
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-12 mb-3">
            <label for="inputDescription" class="form-label">Mô tả chi tiết</label>
            <input type="text" class="form-control" name="description" rows="3"></input>
          </div>
          <div class="col-12">
            <input type="submit" class="btn btn-primary w-100">
          </div>
        </div>
      </div>
      </form>
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