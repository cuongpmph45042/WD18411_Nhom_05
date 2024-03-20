<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sneaker Passion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>

  <div class="container">
    <nav>
    <?php require "./view/menu.php" ?>
    </nav>
    <?php if ($SLIDE==true) {
      require "./view/carousel.php";
    } ?>
    <br>
    <div class="row">
      <?php require $BLOCK ?>
    </div>
    <hr>
    <footer class="bg-secondary">
      <div style="color: #ffffff;" class="d-flex justify-content-between align-items-center m-2">
        <p>Bản quyền &copy; 2024 by cuongpm</p>
        <p><b>Email: cskh@sneakerpassion.com</b></p>
        <p><b>Mua hàng: 089.887.5522</b></p>
      </div>
    </footer>
  </div>

</body>
</html>