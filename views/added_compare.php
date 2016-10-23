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
if (isset($_GET['prod_cid'])) {
  $cid = $_GET['prod_cid'];  
}
$sql = "SELECT id, title, img, rating, price FROM products WHERE id = $pid";
$device = $conn->query($sql);  
$device = mysqli_fetch_all ($device, MYSQLI_ASSOC);
$device = $device[0];
// var_dump($device);
if($cid==1) {
  $sql = "SELECT id, p_id, os, processor, speed, graphic_card, ram, hd, battery FROM specs_lap WHERE p_id = $pid";
  $laptop = $conn->query($sql);  
  $laptop = mysqli_fetch_all ($laptop, MYSQLI_ASSOC);
  $laptop = $laptop[0];

  $lapcookie = [];
  if (isset($_COOKIE['lapcompare'])) {
    $lapcookie = json_decode($_COOKIE['lapcompare'], true);
  }

  $temp = [];
  $temp['pid'] = $_GET['prod_id']; 
  $temp['title'] = $device['title'];
  $temp['img'] = $device['img'];
  $temp['price'] = $device['price'];
  $temp['rating'] = $device['rating'];
  $temp['os'] = $laptop['os'];
  $temp['processor'] = $laptop['processor'];
  $temp['speed'] = $laptop['speed'];
  $temp['graphic_card'] = $laptop['graphic_card'];
  $temp['ram'] = $laptop['ram'];
  $temp['hd'] = $laptop['hd'];
  $temp['battery'] = $laptop['battery'];
  if (count($lapcookie)<4) {
    $lapcookie[$temp['pid']] = $temp;
  }
  
  setcookie('lapcompare',json_encode($lapcookie));
}

elseif ($cid == 2) {
$sql = "SELECT id, p_id, internal_memory, ram, primary_cam, secondary_cam, battery, screen, cores FROM specs_mob WHERE p_id=".$pid;
$mobile = $conn->query($sql);  
$mobile = mysqli_fetch_all ($mobile, MYSQLI_ASSOC);
$mobile = $mobile[0];

$mobcookie = [];
if (isset($_COOKIE['mobcompare'])) {
  $mobcookie = json_decode($_COOKIE['mobcompare'], true);
}

$temp = [];
$temp['pid'] = $_GET['prod_id']; 
$temp['title'] = $device['title'];
$temp['img'] = $device['img'];
$temp['price'] = $device['price'];
$temp['rating'] = $device ['rating'];
$temp['internal_memory'] = $mobile['internal_memory'];
$temp['ram'] = $mobile['ram'];
$temp['primary_cam'] = $mobile['primary_cam'];
$temp['secondary_cam'] = $mobile['secondary_cam'];
$temp['battery'] = $mobile['battery'];
$temp['screen'] = $mobile['screen'];
$temp['cores'] = $mobile['cores'];
if (count($mobcookie)<4) {
  $mobcookie[$temp['pid']] = $temp;
}

setcookie('mobcompare',json_encode($mobcookie));
}

// $cmpcookie = [];

// if (isset($_COOKIE['compare'])) {
// 	$cookie = json_decode($_COOKIE['compare'], true);
// }

// $temp = [];
// $temp['pid'] = $_GET['prod_id']; 
// $temp['title'] = $cart_prod['title'];
// $temp['img'] = $cart_prod['img'];
// $temp['price'] = $cart_prod['price'];
// // var_dump($temp);
// $temp['count'] = 1;
// 	// if (!isset($temp['count'])) {
// 	// 	$temp['count'] = 1;
// 	// }

// $cookie[$temp['pid']] = $temp; 
// setcookie('cart', json_encode($cookie));
//$_COOKIE['cart'] = json_encode($cookie);

echo'<script> window.location="'.$_GET['page'].'"; </script> ';
?>