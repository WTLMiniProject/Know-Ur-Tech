<?php 
	include 'header.php';
	if (!isset($cookie)) {
?>
	<div class="well">
		<h2>Your shopping cart is empty!</h2>
	</div>
<?php
	}
	else {
	$products = [];
	$products = $cookie;
	// var_dump($products);
?>
<div class="container">
	<div class="row">
	<?php
	foreach ($products as $p_key => $p_value) {
	?>
		<div class="col-sm-12 product" style="margin: 1vw 0;">
			<div class="col-sm-2 product_image"><img src="<?=$p_value['img']?>" style="max-width: 3vw;"></div>
			<div class="col-sm-4 product_title"><?=$p_value['title']?></div>
			<div class="col-sm-6">
				<div class="col-sm-4 rate"><?=$p_value['price']?></div>
				<div class="col-sm-4 quantity">
					<div class="input-group">
      					<span class="input-group-btn">
        					<a href="count_modified.php?id=<?=$p_value['pid']?>&flag=0" type="button" class="btn btn-default" type="button"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
      					</span>
      					<span class="label label-default"><?=$p_value['count']?></span>
      					<span class="input-group-btn">
        					<a href="count_modified.php?id=<?=$p_value['pid']?>&flag=1" class="btn btn-default" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
      					</span>
    				</div>
				</div>
				<div class="col-sm-4 remove" align="center"><a href="count_modified.php?remove=1&id=<?=$p_value['pid']?>&flag=2" type="button" role="button" class="btn btn-primary">Remove</a></div>
			</div>
		</div>
	<?php
	}
	// var_dump($sum);
	?>		
	</div>
</div>
<?php
	$sum = 0;
	foreach ($products as $p_key => $p_value) {
		$sum += $p_value['price']*$p_value['count'];
	}
	?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 total" style="margin: 1vw 0;">
			<div class="col-sm-2"><b>Total</b></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-6">
				<div class="col-sm-4 rate"><b><?=$sum;?></b></div>
				<div class="col-sm-4 quantity" align="center">
					<a href="count_modified.php?clear=1" type="button" role="button" class="btn btn-danger">Clear Cart</a>	
				</div>
				<?php
					if($sum!=0) {
				?>
				<div class="col-sm-4"><a href="checkout.php" type="button" role="button" class="btn btn-warning" align="center">Checkout Rs.<?=$sum?>/-</a></div>
				<?php
					}
					else {
				?>
				<div class="col-sm-4"><a href="checkout.php" type="button" role="button" class="btn btn-warning disabled" align="center">Checkout Rs.<?=$sum?>/-</a></div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
		
<?php
	include 'footer.php';
}
?>