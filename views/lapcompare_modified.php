<?php
if (isset($_COOKIE['lapcompare'])) {
		$lapcookie = json_decode($_COOKIE['lapcompare'], true);
	}
if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "";
	}
	$cat=$_GET['category'];
	if (count($lapcookie)==1) {
		unset($lapcookie);
		setcookie('lapcompare', json_encode($lapcookie));
		echo'<script> window.location="index.php"</script> ';
	}
	else {
		if (isset($_GET['remove'])) {
		unset($lapcookie[$id]);
		//$cookie[$id]['count'] = 0;
		//setcookie('cart', json_encode($cookie));
		setcookie('lapcompare', json_encode($lapcookie));
		 //var_dump($cookie);
		echo'<script> window.location="compare.php?category='.$cat.'"; </script> ';
	}
	
	}
	
?>