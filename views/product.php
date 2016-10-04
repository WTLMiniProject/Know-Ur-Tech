<?php
	include 'header.php';
	if (isset($_GET['category'])) {
		$cid = $_GET['category'];
	}
	else {
		$cid = '';
	}
	if (isset($_GET['subcategory'])) {
		$scid = $_GET['subcategory'];
	}
	else {
		$scid = '';
	}
	if (isset($_GET['productid'])) {
		$productid = $_GET['productid'];
	}
	else {
		$productid = '';
	}
	$sql = "SELECT id, title, description, img, price, rating  FROM products WHERE id =".$productid ;
	$products = $conn->query($sql);  
	$products = mysqli_fetch_all ($products, MYSQLI_ASSOC);
	echo $products['id'];
?>