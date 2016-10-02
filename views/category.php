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

	$sql = "SELECT id, title FROM sub_category WHERE cid = ".$cid;
	$subcategory = $conn->query($sql);  
	$subcategory = mysqli_fetch_all ($subcategory, MYSQLI_ASSOC);

	$sub = [];
	foreach ($subcategory as $key => $value) {
		$sub[$value['id']] = $value['title'];
	}

	$sql = "SELECT id, title FROM sub_category WHERE cid = ".$cid;
	$subcategory = $conn->query($sql);  
	$subcategory = mysqli_fetch_all ($subcategory, MYSQLI_ASSOC);
?>
	<div class="container"> <!-- container -->
		<p class="page_result">Brand Selected:<span class="label label-default"><?=$sub[$scid];?></span> </p>
		<div class="product_cards"></div>
		<div class="row"> <!-- row for products -->
			<div class="col-xs-6 col-sm-6 col-md-4"> <!-- grid for products -->
				<div class="thumbnail"> <!-- card -->
					<img src="" alt="">
					<div class="caption"> <!-- text area of card -->
						<h3>Product 1</h3
						<p>Product Description</p>
						<p><a class="btn btn-primary" role=""button href="#">Add to Cart</a></p>
					</div> <!-- end of card text area -->
				</div> <!-- end of card -->
			</div> <!-- end of grid for product -->
		</div> <!-- end of row class for product -->
	</div> <!-- closing container  -->

<?php
	include 'footer.php';
?>