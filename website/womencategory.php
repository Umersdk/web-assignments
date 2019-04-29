<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>women cloths</title>
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

  
    <!--/. product data -->
    <?php
    $i=0;
      foreach($empArray as $obj){
          if($obj->category=="women"){
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
          }
    $i++;  
    }
    ?>

    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->


</body>

</html>