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
      <form action="../../controllers/products/products_new.php" action="GET"></form>
      <div class="form__content">
        <div class="row">
          <div class="col-12">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control mb-3" name="name">
          </div>

          <div class="col-6">
            <label for="inputPrice" class="form-label">Price</label>
            <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
            </div>
          </div>

          <div class="col-6">
            <label for="inputImage" class="form-label">Image</label>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Upload</label>
              <input type="file" multiple="true" class="form-control" name="product_images[src][]">
            </div>
          </div>

          <div class="col-6">
            <label for="inputColor" class="form-label">Color</label>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Options</label>
              <select class="form-select" id="inputGroupSelect01" name="color">
                <option value="None" selected>Choose...</option>
                <option value="Black">Black</option>
                <option value="White">White</option>
                <option value="Red">Red</option>
                <option value="Orange">Orange</option>
                <option value="Yellow">Yellow</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
                <option value="Purple">Purple</option>
                <option value="Pink">Pink</option>
                <option value="Beige">Beige</option>
                <option value="Brown">Brown</option>
              </select>
            </div>
          </div>

          <div class="col-6">
            <div class="mb-1">
              Sizes
            </div>
            <div class="mb-3">
              <div class="input-group">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <?php
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                          echo '
                            <option value="'.$row["name"].'">'.$row["name"].'</option>
                          ';
                        }
                      }
                    ?>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 mb-3">
            <label for="inputDescription" class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
          </div>
          <div class="col-12">
            <input type="submit" class="btn btn-primary w-100">
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