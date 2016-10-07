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
	foreach ($subcategory as $s_key => $s_value) {
		$sub[$s_value['id']] = $s_value['title'];
	}

	$sql = "SELECT id, title FROM category WHERE id = ".$cid;
	$category = $conn->query($sql);  
	$category = mysqli_fetch_all ($category, MYSQLI_ASSOC);

	$cat = [];
	foreach ($category as $c_key => $c_value) {
		$cat[$c_value['id']] = $c_value['title'];
	}

	$sql = "SELECT id, title, cid, scid, description, img, price, quantity, created, rating FROM products WHERE scid =".$scid ;
	$products = $conn->query($sql);  
	$products = mysqli_fetch_all ($products, MYSQLI_ASSOC);
?>
	<div class="container"> <!-- container -->
		<div class="page_result">
			<ol class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="index.php"><?=$cat[$cid]?></a></li>
			  <li class="active"><?=$sub[$scid]?></li>
			</ol>
		</div>
		<div class="row"> <!-- row for products -->
			<?php
				foreach ($products as $pid => $p_item) {
			?>
			<div class="col-xs-6 col-sm-6 col-md-4"> <!-- grid for products -->
				<div class="thumbnail"> <!-- card -->
					<img src="<?=$p_item['img']?>" alt="<?=$p_item['title']?>" class="card_img">
					<div class="caption"> <!-- text area of card -->
						<h3><a href="product.php?pro=<?=$p_item['id']?>"><?=$p_item['title']?></a></h3>
						<p><?=$p_item['description']?><br>Rs. <?=$p_item['price']?></p>
						<p><a class="btn btn-primary" role=""button href="#">Add to Cart</a></p>
					</div> <!-- end of card text area -->
				</div> <!-- end of card -->
			</div> <!-- end of grid for product -->
			<?php
				}
			?>
			
		</div> <!-- end of row class for product -->
	</div> <!-- closing container  -->

<?php
	include 'footer.php';
?>