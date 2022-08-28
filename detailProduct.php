<?php
include_once "header.php";
require_once "data.php";

$myId = $_GET['id'];
$data = product($myId);

?>
<div class="card" style="width: 18rem;">
  <img src="<?=$data['photo']  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$data['name']  ?></h5>
    <h5 class="card-title"><?=$data['price']  ?></h5>
    <a href="#" class="btn btn-primary" id="cart">Add to Cart</a>
  </div>
</div>

<button type="button" class="btn btn-primary position-relative">
<span class="material-symbols-outlined">
shopping_cart
</span>
  <span id="shop" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    0
    <span class="visually-hidden">unread messages</span>
  </span>
</button>



<?php


include_once "footer.php";

?>