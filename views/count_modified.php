<?php
	//include 'header.php';
	//var_dump($cookie);
	if (isset($_COOKIE['cart'])) {
		$cookie = json_decode($_COOKIE['cart'], true);
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "";
	}

	if (isset($_GET['remove'])) {
		unset($cookie[$id]);
		if (count($cookie)==0) {
			unset($cookie);
			setcookie('cart', json_encode($cookie));
			echo'<script> window.location="index.php"; </script> ';
		}
		//$cookie[$id]['count'] = 0;
		//setcookie('cart', json_encode($cookie));
		//echo'<script> window.location="cart.php"; </script> ';
	}

	if (isset($_GET['clear'])) {
		unset($cookie);
		echo'<script> window.location="index.php"; </script> ';
	}
	
	

	
	if (isset($_GET['flag'])) {
		$flag = $_GET['flag'];
	}
	else {
		$flag = "";
	}
	//var_dump($id);
	// var_dump($flag);
	if ($flag==1) {
		$cookie[$id]['count']=$cookie[$id]['count']+1;
	}
	elseif ($flag==0 && ($cookie[$id]['count']!=0) ) {
		$cookie[$id]['count'] = $cookie[$id]['count']-1;	
	}

	if ($cookie[$id]['count'] == 0) {
		//unset($cookie[$id]);
	}
	// $mcookie = [];
	// $mcookie = $cookie;
	 setcookie('cart', json_encode($cookie));
	 //var_dump($cookie);
	 echo'<script> window.location="cart.php"; </script> ';

?>