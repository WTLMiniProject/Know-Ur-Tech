<!-- COMPARE PAGE ROUTE -->
<?php
	include 'header.php';
	if (isset($_GET['subcategory'])) {
		$sc = $_GET['subcategory'];
		$sql = "SELECT id,cid FROM sub_category WHERE id=".$sc;
		$scat = $conn->query($sql);  
		$scat = mysqli_fetch_all ($scat, MYSQLI_ASSOC);
		$scat = $scat[0];
		// var_dump($scat);
		echo'<script> window.location="category.php?category='.$scat['cid'].'&subcategory='.$scat['id'].'"; </script> ';
	}
	if (isset($_GET['productid'])) {
		$prid = $_GET['productid'];
		echo'<script> window.location="product.php?pro='.$prid.'"; </script> ';
	}
?>