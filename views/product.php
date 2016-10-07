<?php
	include 'header.php';
	if (isset($_GET['pro'])) {
		$pid = $_GET['pro'];
	}
	else {
		$pid = '';
	}
	$sql = "SELECT id, title, cid, scid, description, img, price, quantity, rating FROM products WHERE id=".$pid;
	$products = $conn->query($sql);  
	$products = mysqli_fetch_all ($products, MYSQLI_ASSOC);
	$products = $products[0];

	$sql = "SELECT title FROM sub_category WHERE id=".$products['scid'];
	$sub_category = $conn->query($sql);  
	$sub_category = mysqli_fetch_all ($sub_category, MYSQLI_ASSOC);
	$sub_category = $sub_category[0];
?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            	<ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="index.php">Products</a></li>
                    <li><a href="category.php?category=<?=$products['cid']?>&subcategory=<?=$products['scid']?>">Brand</a></li>
                    <li class="active"><?=$products['title']?></li>
                </ol>
                <h1 class="page-header"><?=$products['title']?>
                    <small><?=$sub_category['title']?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive product_<?=$products['cid']?>" src="<?=$products['img']?>" alt="">
            </div>
            <div class="col-md-6">
                <h2><?=$products['title']?></h2>
                <p><?=$products['description']?></p>
                <h4>Rating: <?=$products['rating']?><i class="fa fa-star-o"></i></h5> 
                <h5>Price: <?=$products['price']?></h5>
                <p><a class="btn btn-primary" role=""button href="#">Add to Cart</a></p>
            </div>
        </div>
        <!-- /.row -->
<?php  
	if ($products['cid']==1) {
		$sql = "SELECT id, p_id, os, processor, speed, graphic_card, ram, hd, battery FROM specs_lap WHERE p_id=".$pid;
		$specs_lap = $conn->query($sql);  
		$specs_lap = mysqli_fetch_all ($specs_lap, MYSQLI_ASSOC);
		$specs_lap = $specs_lap[0];
?>
	<table>
		<tr>
			<th>Product Name</th>
			<td><?=$products['title']?></td>
		</tr>
		<tr>
			<th>Operating System</th>
			<td><?=$specs_lap['os']?></td>
		</tr>
		<tr>
			<th>Processor</th>
			<td><?=$specs_lap['processor']?></td>
		</tr>
		<tr>
			<th>Speed</th>
			<td><?=$specs_lap['speed']?></td>
		</tr>
		<tr>
			<th>Graphic Card</th>
			<td><?=$specs_lap['graphic_card']?></td>
		</tr>
		<tr>
			<th>RAM</th>
			<td><?=$specs_lap['ram']?></td>
		</tr>
		<tr>
			<th>Hard Disk</th>
			<td><?=$specs_lap['hd']?></td>
		</tr>
		<tr>
			<th>Battery</th>
			<td><?=$specs_lap['battery']?></td>
		</tr>
	</table>
<?php
	}
?>

<?php
	if($products['cid']==2) {
		$sql = "SELECT id, p_id, internal_memory, ram, primary_cam, secondary_cam, battery, screen, cores FROM specs_mob WHERE p_id=".$pid;
		$specs_mob = $conn->query($sql);  
		$specs_mob = mysqli_fetch_all ($specs_mob, MYSQLI_ASSOC);
		$specs_mob = $specs_mob[0];
?>
	<table>
		<tr>
			<th>Product Name</th>
			<td><?=$products['title']?></td>
		</tr>
		<tr>
			<th>Internal Memory</th>
			<td><?=$specs_mob['internal_memory']?></td>
		</tr>
		<tr>
			<th>RAM</th>
			<td><?=$specs_mob['ram']?></td>
		</tr>
		<tr>
			<th>Primary Camera</th>
			<td><?=$specs_mob['primary_cam']?></td>
		</tr>
		<tr>
			<th>Secondary Camera</th>
			<td><?=$specs_mob['secondary_cam']?></td>
		</tr>
		<tr>
			<th>Battery</th>
			<td><?=$specs_mob['battery']?></td>
		</tr>
		<tr>
			<th>Screen</th>
			<td><?=$specs_mob['screen']?></td>
		</tr>
		<tr>
			<th>Cores</th>
			<td><?=$specs_mob['cores']?></td>
		</tr>
	</table>
<?php
	}
?>
<?php  
	include 'footer.php';
?>