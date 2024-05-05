<?php 

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'my_website');

$sql="SELECT * FROM products WHERE feature=1";
$feature = $con->query($sql);
?>

<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Products detail:</h2>
            <?php 
            
                while($products=mysqli_fetch_assoc($feature)):
            ?>
            <div class="col-md-5">
                <h4><?= $products['title'];?></h4>
                <image src= "<?= $products['image'];?>" alt="<?= $products['title'];?>"/>
                <p class ="1price"><b>Rs <?=$products['price']?></b></p>
                <p class ="desc">Rs <?=$products['description']?></p>
                <p class ="bname">Rs <?=$products['brandname']?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>