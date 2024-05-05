<?php 

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'my_website');

$sql="SELECT * FROM products WHERE feature=1";
$feature = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">NYADHI'S ACCESSORIES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="products-laptops">Laptops</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Desktops</a></i>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Phones</a></li>
        </ul>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Top products</h2> <br> <br>
            <?php 
            
                while($products=mysqli_fetch_assoc($feature)):
            ?>
            <div class="col-md-5">
                <h4><?= $products['title'];?></h4>
                <image src= "<?= $products['image'];?>" alt="<?= $products['title'];?>"/>
                <p class ="1price">Rs <?=$products['price']?></p>
                <a href="detail.php">
                  <button type="button" class="btn btn-success" data-toggle="modal" data target="#details-1">More</button>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>