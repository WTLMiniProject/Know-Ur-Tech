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
                <h1 class="page-header"><?=$products['title']?>
                    <small><?=$sub_category['title']?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="index.php">Products</a></li>
                    <li><a href="category.php?category=<?=$products['cid']?>&subcategory=<?=$products['scid']?>">Brand</a></li>
                    <li class="active"><?=$products['title']?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?=$products['img']?>" alt="">
            </div>
            <div class="col-md-6">
                <h2><?=$products['title']?></h2>
                <p><?=$products['description']?></p>
            </div>
        </div>
        <!-- /.row -->
<?php  
	include 'footer.php';
?>