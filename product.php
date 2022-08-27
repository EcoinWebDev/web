<?php
include_once "header.php";

$products = [
    ["id"=>1,"name"=>"laptop","photo"=>"img/p001.webp","price"=>45.36],
    ["id"=>2,"name"=>"laptop","photo"=>"img/p002.webp","price"=>45.36],
    ["id"=>3,"name"=>"laptop","photo"=>"img/p003.webp","price"=>45.36],
    ["id"=>4,"name"=>"laptop","photo"=>"img/p004.webp","price"=>45.36]
];
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
