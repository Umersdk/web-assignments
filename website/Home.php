<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Home</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body>
  <?php
include("navigation.html");

require_once("productclass.php");
$emp = new Product();
$empArray = $emp->GetAllRecords();
?>
  <!-- Page Content -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="images/a.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="images/b.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!--/. product data -->
    <?php
    $i=0;
      foreach($empArray as $obj){
    ?>
    <div class="column">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="productdetail.php">
          <img class="card-img-top img-fluid" src="<?php echo $obj->image ?>">
            </a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="productdetail.php?id=<?= $obj->id ?>"><?php echo $obj->name; ?></a>
            </h4>
            <p class="card-text"><?php echo $obj->description; ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?php echo $obj->rating; ?></small>
          </div>
        </div>
      </div>
    </div>
    <?php
    $i++;  
    }
    ?>

    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->


</body>

</html>