<?php
if (isset($_COOKIE['mobcompare'])) {
		$mobcookie = json_decode($_COOKIE['mobcompare'], true);
	}
if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "";
	}
	$cat=$_GET['category'];
	if (count($mobcookie)==1) {
		unset($mobcookie);
		setcookie('mobcompare', json_encode($mobcookie));
	
		echo'<script> window.location="index.php"</script> ';
	}
	else {
		if (isset($_GET['remove'])) {
		unset($mobcookie[$id]);
		//$cookie[$id]['count'] = 0;
		//setcookie('cart', json_encode($cookie));
		setcookie('mobcompare', json_encode($mobcookie));
	 //var_dump($cookie);
	echo'<script> window.location="compare.php?category='.$cat.'"; </script> ';
	}
	
	}
	
?>