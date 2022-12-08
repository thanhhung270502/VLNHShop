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
  <link rel="stylesheet" href="../assets/css/products_show.css">
</head>
<body>
  <?php 
    include('../../models/connection.php');
    include('header.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM product_images p WHERE p.product_id = $id";
    $images = $conn->query($sql);
    $num = 0
  ?>

  <div class="container">
    <div class="pt-3 pb-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Library</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Data
          </li>
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
                echo '
                  <div class="product_sub_image">
                      <img src="../../'. $row["src"] .'" class="img-fluid image__small"></img>
                  </div>
                ';
              }
            }
          ?>
        </div>
      </div>
      <div class="col-lg-5">
        <?php
          for ($i = 0; $i < 3; $i++) {
            echo '
              <div class="product_image image__large">
                  <img src="../../'. $array[$i] .'" class="img-fluid"></img>
              </div>
            ';
          }
        ?>
      </div>
      <div class="col-lg-6">
        <div class="d-flex">
            <div class="col-6">
                <div class="product_collection_name">BILLABONG</div>
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
          <div class="product__name">Coastline Plus Waterproof Stormbreaker</div>
          <div class="product__price border-bottom">
            <div class="product__price_new">$21.6</div>
          </div>
          <!-- <div class="py-3 border-bottom">
            <div class="product__description_title">
              Description:
            </div>
            <div class="product__description">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, exercitationem voluptas distinctio eaque temporibus libero eligendi accusamus inventore reprehenderit facilis ratione nobis? Inventore placeat iusto numquam harum. Necessitatibus, ducimus consequuntur.
            </div>
          </div> -->
          <div class="py-3">
            <div class="product__colors pb-2">COLOR:</div>
            <div class="btn__color">Brown</div>
          </div>
          <div class="pb-3">
            <div class="product__sizes">
              <div class="product__sizes_title pb-3">Size:</div>
              <select class="form-select form__select" aria-label="Default select example">
                <option selected>Choose size...</option>
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
              Add To Cart
            </div>
            <div class="btn__buy_now">
              Buy Now
            </div>
          </div>
        </div>
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
              We believe you will completely happy with your item, however if you aren't, there's no need to worry. We've listed below the ways you can return your item to us.
              </div>
              <div class="optional">
                <div class="py-3 border-top">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <div class="name">
                        Standard Delivery
                      </div>
                      <div class="content">
                        Delivery within 5 days of placing your order.
                      </div>
                    </div>
                    <div class="price">
                      $2.99
                    </div>
                  </div>
                </div>
                <div class="py-3 border-top">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <div class="name">
                        Priority Delivery
                      </div>
                      <div class="content">
                        Delivery within 2 days of placing your order.
                      </div>
                    </div>
                    <div class="price">
                      $3.99
                    </div>
                  </div>
                </div>
                <div class="py-3 border-top">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <div class="name">
                        Next Day Delivery
                      </div>
                      <div class="content">
                        Delivery within 24 hours of placing your order.
                      </div>
                    </div>
                    <div class="price">
                      $6.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 product__footer_item">
            <div class="title pb-4">
                We are now offering contact-free delivery so that you can still receive your parcels safely without requiring a signature. Please see below for the available delivery methods, costs and timescales.
              </div>
              <div class="optional">
                <div class="py-3 border-top">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <div class="name">
                        Return via post
                      </div>
                      <div class="content">
                        To return your items for free through the postal system, please complete the returns form that comes with your order. You'll find a label at the bottom of the form. Simply peel the label and head to your nearest post office.
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