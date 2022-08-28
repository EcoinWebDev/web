<?php


$products = [
    ["id" => 1, "name" => "laptop", "photo" => "img/p001.webp", "price" => 45.36],
    ["id" => 2, "name" => "laptop", "photo" => "img/p002.webp", "price" => 45.36],
    ["id" => 3, "name" => "laptop", "photo" => "img/p003.webp", "price" => 45.36],
    ["id" => 4, "name" => "laptop", "photo" => "img/p004.webp", "price" => 45.36]
];
//print_r (product(4));

function product($id)
{
    global $products;
    foreach ($products as $product) {
         if($product['id']==$id){
            return $product;
          }
    }
}
