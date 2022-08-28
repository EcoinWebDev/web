<?php
include_once "header.php";

require_once "data.php";
?>

<h3>Product List</h3>
<?php
foreach($products as $product){

?>
<div class="card">
    <img class="card-img-top w-50" src="<?php echo  $product['photo'] ?>"  alt="">
    <div class="card-body">
        <h4 class="card-title  text-primary"><?php echo  $product['name'] ?></h4>

        <p class="card-title text-danger"><?php echo  $product['price'] ?></p>
        <a href="detailProduct.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Detail</a>
    </div>
</div>

<?php
}

?>
<?php
include_once "footer.php";
?>
