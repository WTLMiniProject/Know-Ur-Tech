<?php 
$user_name = "root";
  $password = "";
  $database = "electronics";
  $host_name = "localhost"; 
  $conn = new mysqli($host_name, $user_name, $password, $database);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
//include 'header.php';
//echo $_GET['prod_id'];
if (isset($_GET['prod_id'])) {
	$pid = $_GET['prod_id'];	
}
$sql = "SELECT id, title, img, price FROM products WHERE id = ".$_GET['prod_id'];
$cart_prod = $conn->query($sql);  
$cart_prod = mysqli_fetch_all ($cart_prod, MYSQLI_ASSOC);
$cart_prod = $cart_prod[0];
$cookie = [];

if (isset($_COOKIE['cart'])) {
	$cookie = json_decode($_COOKIE['cart'], true);
}

$temp = [];
$temp['pid'] = $_GET['prod_id']; 
$temp['title'] = $cart_prod['title'];
$temp['img'] = $cart_prod['img'];
$temp['price'] = $cart_prod['price'];
// var_dump($temp);
$temp['count'] = 1;
	// if (!isset($temp['count'])) {
	// 	$temp['count'] = 1;
	// }
if (count($cookie)<10) {
	$cookie[$temp['pid']] = $temp;
}

 
setcookie('cart', json_encode($cookie));
//$_COOKIE['cart'] = json_encode($cookie);
if (isset($_GET['is_pro']) && $_GET['is_pro'] == 1) {
	echo'<script> window.location="'.$_GET['page'].'?pro='.$pid.'"; </script> ';
}
echo'<script> window.location="'.$_GET['page'].'"; </script> ';
?>