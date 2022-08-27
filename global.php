<?php
include_once "header.php";
?>
<ul>
    <li><a href="global.php">Home</a></li>
    <li><a href="global.php?page=product">Product</a></li>
    <li><a href="global.php?page=about">About Us</a></li>
    <li><a href="global.php?page=contact">Contact Us</a></li>
</ul>
<?php
$page = (isset($_GET['page']))?$_GET['page']:NULL;

switch ($page){
    case "product":
        include 'product.php';
        break;
    case "about":
        include 'about.php';
        break;
    case "contact":
        include 'contact.php';
        break; 
    default:
    break;      

                
}

?>
<?php
include_once "footer.php";
?>
