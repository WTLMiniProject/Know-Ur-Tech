<?php
	
	include 'header.php';
	if (isset($_GET['category'])) {
		$cid = $_GET['category'];
	}
	else {
		$cid = 1;
	}
	if (isset($_GET['subcategory'])) {
		$scid = $_GET['subcategory'];
	}
	else {
		$scid = 1;
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

						<?php 
						if (!check_cart($p_item['id'])) {
						?>
							<div class="col-sm-6">
							<p><a class="btn btn-primary" role="button" href="added_cart.php?page=route.php?subcategory=<?=$p_item['scid']?>&prod_id=<?=$p_item['id']?>">Add to Cart</a></p>	
						</div>
						<?php
						}
						else{
						?>
						<div class="col-sm-6">
							<p><a class="btn btn-primary btn-info btn-success disabled" role="button">Added to Cart</a></p>	
						</div>
						<?php
						}
						?>
						<?php 
						if (!check_lap($p_item['id']) && !check_mob($p_item['id'])) {
						?>
						<div class="col-sm-6">
							<p><a class="btn btn-primary" role="button" href="added_compare.php?page=route.php?subcategory=<?=$p_item['scid']?>&prod_id=<?=$p_item['id']?>&prod_cid=<?=$p_item['cid']?>">Add to Compare</a></p>
						</div>
						<?php
						}
						else{
						?>
						<div class="col-sm-6">
							<p><a class="btn btn-primary btn-info disabled" role="button">Added to Compare</a></p>
						</div>
						<?php
						}
						?>
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