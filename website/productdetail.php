<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Item details</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">
</head>

<body>
  <!-- Page Content -->
<?php
$sid = $_GET['id'];
include('navigation.html') 
require_once("productclass.php");
$emp = new Product();
$empArray = $emp->GetSingleRecord($id);
?>
 <div class="col-lg-9">

<div class="card mt-4">
  <img class="card-img-top img-fluid" src="<?php echo $empArray->image ?> ">
  <div class="card-body">
    <h3 class="card-title"><?php echo $empArray->name ?></h3>
    <h4><?php echo $empArray->price ?></h4>
    <p class="card-text"><?php echo $empArray->description ?></p>
    <span class="text-warning"><?php echo $empArray->rating ?></span>
    <?php echo $empArray->rating ?>
  </div>
</div>
</div>
<!-- /.col-lg-9 -->

</div>

</div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
