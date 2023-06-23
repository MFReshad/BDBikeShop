<?php
session_start();
$con=mysqli_connect("localhost","root","","cse3100");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/BDBikeShop/');
define('SITE_PATH','http://localhost/cse3100/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>