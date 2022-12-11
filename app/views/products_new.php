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

          <!-- Button trigger modal -->
          <div class="col-12">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Xem trước
            </button>
  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="max-width: none;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sản phẩm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-lg-1">
                            <div class="product_sub_images p-0">
                              <div class="product_sub_image">
                                <img src="../assets/images/more_products/1-2-2-1.jpg" class="img-fluid image__small"></img>
                              </div>
                              <div class="product_sub_image">
                                <img src="../assets/images/more_products/1-2-2-2.jpg" class="img-fluid image__small"></img>
                              </div>
                              <div class="product_sub_image">
                                <img src="../assets/images/more_products/1-2-2-3.jpg" class="img-fluid image__small"></img>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <div class="product_image image__large image-large__active">
                                <img src="../assets/images/more_products/1-2-2-1.jpg" class="img-fluid"></img>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="d-flex">
                                <div class="col-6">
                                    <div class="product_collection_name">VLNH Shop</div>
                                </div>
                                <div class="col-6 text-end">
                                    <FontAwesomeIcon icon={faStar} />
                                    <FontAwesomeIcon icon={faStar} />
                                    <FontAwesomeIcon icon={faStar} />
                                    <FontAwesomeIcon icon={faStar} />
                                    <FontAwesomeIcon icon={faStar} />
                                    (50)
                                </div>
                            </div>
                            <div class="product__content">
                              <div class="product__name">-- Tên sản phẩm --</div>
                              <div class="product__price border-bottom">
                                <div class="product__price_new">$xx.xx</div>
                              </div>
                              <div class="py-3">
                                <div class="product__colors pb-2">Màu:</div>
                                <div class="btn__color">Nâu</div>
                              </div>
                              <div class="pb-3">
                                <div class="product__sizes">
                                  <div class="product__sizes_title pb-3">Size:</div>
                                  <select class="form-select form__select" aria-label="Default select example">
                                    <option selected>Chọn size:</option>
                                    <option value="1">M</option>
                                    <option value="2">L</option>
                                    <option value="3">XL</option>
                                    <option value="4">XXL</option>
                                  </select>
                                </div>
                              </div>
                              <div class='pb-3'>
                                <div class="pb-3">Số lượng</div>
                                <div class='d-flex'>
                                  <input type="button" value="-" class="btn_quantity"></input>
                                  <input type="text" value="1" class="btn_quantity"></input>
                                  <input type="button" value="+" class="btn_quantity"></input>
                                </div>
                              </div>
                              <div class="d-flex pb-3">
                                <div class="btn__add_to_cart me-3">
                                  Thêm vào giỏ hàng
                                </div>
                                <div class="btn__buy_now">
                                  Mua ngay
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
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
            <textarea type="text" class="form-control" name="description" rows="3"></textarea>
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