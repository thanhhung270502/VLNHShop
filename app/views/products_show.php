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
  <link rel="stylesheet" href="../assets/css/products_show.css">
  <link rel="stylesheet" href="../assets/css/general.css">
  <link rel="stylesheet" href="../assets/css/homepage.css">
</head>
<body>
  <?php 
    include('../../controllers/products/products_show.php');
    include('header.php');
  ?>

  <div style="background-color: #f5f5f5;">
    <div class="container pb-3">
      <div class="pt-5 pb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
              <a href="./products_index.php">Các sản phẩm</a>
            </li>
            <?php
              echo '<li class="breadcrumb-item active" aria-current="page">'.$product["name"].'</li>'
            ?>
  
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-1">
          <div class="product_sub_images p-0">
            <?php
              $array = array();
              if ($images->num_rows > 0) {
                while($row = $images->fetch_assoc()) {
                  array_push($array, $row["src"]);
                  if ($row["src"][0] == 'h' && $row["src"][1] == 't' && $row["src"][2] == 't' && $row["src"][3] == 'p') {
                    echo '
                      <div class="product_sub_image">
                          <img src="'. $row["src"] .'" class="img-fluid image__small"></img>
                      </div>
                    ';
                  } else {
                    echo '
                      <div class="product_sub_image">
                          <img src="../../'. $row["src"] .'" class="img-fluid image__small"></img>
                      </div>
                    ';
                  }
                }
              }
            ?>
          </div>
        </div>
        <div class="col-lg-5">
          <?php
            for ($i = 0; $i < 3; $i++) {
              if ($array[$i][0] == 'h' && $array[$i][1] == 't' && $array[$i][2] == 't' && $array[$i][3] == 'p') {
                echo '
                  <div class="product_image image__large">
                    <img src="'. $array[$i] .'" class="img-fluid"></img>
                  </div>
                ';
              } else {
                echo '
                  <div class="product_image image__large">
                      <img src="../../'. $array[$i] .'" class="img-fluid"></img>
                  </div>
                ';
              }
            }
          ?>
        </div>
        <div class="col-lg-6">
          <div class="d-flex align-items-center justify-content-between">
            <div class="product_collection_name">NVLH</div>
            <?php
              if (isset($_COOKIE["user_id"])) {
                $user_id = $_COOKIE["user_id"];
                $sql = "SELECT * FROM user WHERE id = $user_id";
                $result_user = $conn->query($sql);
                $user = $result_user->fetch_assoc();
                if ($user && $user["role"] == 0) {
                  echo '
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 10px;">
                        Edit
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a href="./products_edit.php?id='.$id.'" class="dropdown-item">Edit product</a>
                        </li>
                        <li>
                          <a href="./products_edit_quantity.php?id='.$id.'" class="dropdown-item">Edit quantity</a>
                        </li>
                      </ul>
                    </div>
                  ';
                }
              }
            ?>
          </div>
          <form action="../../controllers/cart/cart_item_create.php" method="GET">
            <?php
              echo '<input type="text" value="' . $id . '" name="id" style="display: none;">';
            ?>
            <div class="product__content">
              <?php
                echo '
                  <div class="product__name">'.$product["name"].'</div>
                  <div class="product__price border-bottom">
                    <div class="product__price_new">$'.$product["price"].'</div>
                  </div>
                  <div class="py-3">
                    <div class="product__colors pb-2">Màu sắc:</div>
                    ';
                    
                if ($product["color"] == "white") {
                  echo '<div class="btn__color" style="background-color: var(--'.$product["color"].'); color: black; border: 1px solid var(--black);">'.$product["color"].'</div>';
                }
                else {
                  echo '<div class="btn__color" style="background-color: var(--'.$product["color"].'); color: white; border: 1px solid var(--'.$product["color"].');">'.$product["color"].'</div>';
                }
                echo '
                  </div>
                ';
              ?>
              <div class="pb-3">
                <div class="product__sizes">
                  <div class="product__sizes_title pb-3" style="font-weight: bold;">Size:</div>
                  <select class="form-select form__select" aria-label="Default select example" name="size">
                    <!-- <option value="None" selected>Choose size...</option> -->
                    <?php
                      if ($sizes->num_rows > 0) {
                        while($size = $sizes->fetch_assoc()) {
                          echo '
                            <option value="'.$size["name" ].'">'.$size["name" ].'</option>
                          ';
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class='pb-3'>
                <div class="pb-3" style="font-weight: bold;">Số lượng</div>
                <div class='d-flex'>
                  <input type="text" value="-" class="btn_quantity" style="cursor: pointer;"></input>
                  <input type="text" value="1" class="btn_quantity" name="quantity"></input>
                  <input type="text" value="+" class="btn_quantity" style="cursor: pointer;"></input>
                </div>
              </div>
              <div class="d-flex pb-3">
                <input type="submit" value="Thêm vào giỏ hàng" class="btn__add_to_cart me-3">
                <!-- <input type="submit" value="Mua ngay" class="btn__buy_now"> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="py-5 border-top">
      <div class="container">
        <div class="product__footer">
          <div class="d-flex align-items-center product__footer_navbar justify-content-center">
            <div class="product__footer__nav_item">Mô Tả Chi Tiết</div>
            <div class="product__footer__nav_item">Vận chuyển</div>
            <div class="product__footer__nav_item">Hoàn trả</div>
          </div>
          <div class="product__footer_content pt-4">
            <div class="d-flex justify-content-center">
              <div class="col-lg-8 product__footer_item">
                1Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptatum modi quia numquam facere aliquam quaerat laboriosam repellat dolorum enim, quis, laborum fugiat. Nobis asperiores rem ab voluptate nihil culpa.
                1Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptatum modi quia numquam facere aliquam quaerat laboriosam repellat dolorum enim, quis, laborum fugiat. Nobis asperiores rem ab voluptate nihil culpa.
                1Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptatum modi quia numquam facere aliquam quaerat laboriosam repellat dolorum enim, quis, laborum fugiat. Nobis asperiores rem ab voluptate nihil culpa.
              </div>
              <div class="col-lg-8 product__footer_item">
                <div class="title pb-4">
                  Chúng tôi tin rằng bạn sẽ hoàn toàn hài lòng với món đồ của mình, tuy nhiên nếu bạn không hài lòng thì cũng không cần phải lo lắng. Chúng tôi đã liệt kê bên dưới những cách bạn có thể trả lại mặt hàng của mình cho chúng tôi.
                </div>
                <div class="optional">
                  <div class="py-3 border-top">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="name">
                          Nhận tại cửa hàng của chúng tôi
                        </div>
                        <div class="content">
                          Nhận tại cửa hàng của chúng tôi
                        </div>
                      </div>
                      <div class="price">
                        FREE
                      </div>
                    </div>
                  </div>
                  <div class="py-3 border-top">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="name">
                          Vận chuyển siêu tốc 
                        </div>
                        <div class="content">
                          Vận chuyển hàng trong 24 giờ
                        </div>
                      </div>
                      <div class="price">
                        $19.99
                      </div>
                    </div>
                  </div>
                  <div class="py-3 border-top">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="name">
                          Vận chuyển hàng trong 24 giờ
                        </div>
                        <div class="content">
                          Vận chuyển trong 36 - 48 giờ
                        </div>
                      </div>
                      <div class="price">
                        $9.99
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 product__footer_item">
                <div class="title pb-4">
                  Chúng tôi hiện đang cung cấp dịch vụ giao hàng không tiếp xúc để bạn vẫn có thể nhận bưu kiện của mình một cách an toàn mà không cần chữ ký. Vui lòng xem bên dưới để biết các phương thức, chi phí và thời gian giao hàng có sẵn.
                </div>
                <div class="optional">
                  <div class="py-3 border-top">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="name">
                          Trả lại qua đường bưu điện
                        </div>
                        <div class="content">
                          Để trả lại các mặt hàng của bạn miễn phí thông qua hệ thống bưu chính, vui lòng điền vào biểu mẫu trả lại đi kèm với đơn đặt hàng của bạn. Bạn sẽ tìm thấy một nhãn ở cuối biểu mẫu. Đơn giản chỉ cần bóc nhãn và đi đến bưu điện gần nhất của bạn.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-3 border-top">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="name">
                          Return in person
                        </div>
                        <div class="content">
                          To return your items for free in person, simply stop into any one of our locations and speak to a member of our in-store team.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

  <script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    // Click hide/show product_image
    const image__large = $$('.image__large');

    const image__small = $$('.image__small');

    image__small[0].classList.add('image__active');
    image__large[0].classList.add('image-large__active');

    image__small.forEach((value, index) => {
        value.onclick = () => {
            image__small.forEach((v, i) => {
                image__small[i].classList.remove('image__active');
                image__large[i].classList.remove('image-large__active')
            })

            image__small[index].classList.add('image__active');
            image__large[index].classList.add('image-large__active')
        }
    })

    var btn_quantity = $$('.btn_quantity');
    var minus1 = btn_quantity[0];
    var data1 = btn_quantity[1];
    var add1 = btn_quantity[2];

    // Decrease/Increase quantity
    minus1.onclick = () => {
        if (data1.value > 0) {
            data1.value--;
        }
    }

    add1.onclick = () => {
        // if (parseInt(data1.value) < parseInt(product__remain.textContent)) {
            data1.value++;
        // }
    }

    const product__nav_item = $$('.product__footer__nav_item');
    const product_field__item = $$('.product__footer_item'); 

    product__nav_item[0].classList.add('product__footer__nav_item_active');
    product_field__item[0].classList.add('product__footer_item_active');

    product__nav_item.forEach((value, index) => {
      value.onclick = () => {
        product__nav_item.forEach((v, i) => {
            product__nav_item[i].classList.remove('product__footer__nav_item_active');
            product_field__item[i].classList.remove('product__footer_item_active')
        })

        product__nav_item[index].classList.add('product__footer__nav_item_active');
        product_field__item[index].classList.add('product__footer_item_active')
      }
    })
  </script>
</body>
</html>