<?php
	include 'header.php';
	if (isset($_GET['category'])) {
		$cid = $_GET['category'];
	}
	else {
		$cid = '';
	}
	$sql = "SELECT id, title FROM sub_category WHERE cid = ".$cid;
	$subcategory = $conn->query($sql);  
	$subcategory = mysqli_fetch_all ($subcategory, MYSQLI_ASSOC);
	$scat = [];
	foreach ($subcategory as $c_key => $c_value) {
		$scat[$c_value['id']] = $c_value['title'];
	}
	$subcategory = $scat;
	// var_dump($subcategory);
	$sql = "SELECT id, title, cid, scid, description, img, price, quantity, rating FROM products WHERE cid = $cid ORDER BY title";
	$products = $conn->query($sql);  
	$products = mysqli_fetch_all ($products, MYSQLI_ASSOC);
	// var_dump($products);

	$data = [];
	$temp = [];
	foreach ($products as $key => $product) 
	{
		$temp = $product;
		$temp['subcategory'] = $subcategory[$product['scid']];
		$data[$product['scid']][] = $temp;
		//$data
	}
	// var_dump($data);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$product_id_1 = $_POST['compare1'];
		$product_id_2 = $_POST['compare2'];
		if ($product_id_1 == "" || $product_id_2 =="" ) {
			$error = "Please select both Products";
		}
	}
?>	
	<div class="row">
		<div class="col-xs-12"> <!-- dropdown for selecting product 1 and product 2 -->
		<div class="col-xs-12">
			<?php
				if (isset($error)) {
			?>
				<div class="col-sm-12">
					<p class="message"><?=$error?></p>
				</div>
			<?php
				}
			?>
		</div>
			<form method="POST" action="compare.php?category=<?=$cid?>">
				<div class="col-xs-5">
					<div class="col-xs-6">
						<select id="compare" name="compare1">
							<option value="">Select a device</option>
						<?php 
							foreach ($data as $k1 => $v1) {
						?>
								<optgroup label="<?=$subcategory[$k1]?>">
						<?php
								foreach ($v1 as $k2 => $v2) {
						?>

								<?php if (isset($product_id_1) && ($product_id_1 == $v2['id'])) {
								?>

								<option value="<?=$v2['id']?>" selected><?=$v2['title']?></option>
								<?php
								}else{ ?>
								<option value="<?=$v2['id']?>"  ><?=$v2['title']?></option>
								<?php
								} ?>
								<!-- <option value="<?=$v2['id']?>" <?php if (isset($product_id_1) && ($product_id_1 == $v2['id'])) {
										echo " selected";
								} ?> ><?=$v2['title']?></option> -->

								
						<?php
								}
						?>
							</optgroup>
						<?php
							}
						?>	
						</select>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="col-xs-6">
						<select id="compare" name="compare2">
							<option value="">Select a device</option>
							<?php 
								foreach ($data as $k1 => $v1) {
							?>
									<optgroup label="<?=$subcategory[$k1]?>">
							<?php
									foreach ($v1 as $k2 => $v2) {
							?>

									<option value="<?=$v2['id']?>" <?php if (isset($product_id_2) && $product_id_2 == $v2['id']) {
										echo "selected";}?> ><?=$v2['title']?></option>
							<?php
									}
							?>
								</optgroup>
							<?php
								}
							?>	
						</select>
					</div>
				</div>
				<div class="col-xs-2" align="center">
					<input type="submit" name="submit" value="Submit" class="btn btn-default btn-block">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) { //IF OPEN TO CHECK METHOD POST
			
			// RETRIEVED VALUES FROM FORM SUBMIT
			$product_id_1 = $_POST['compare1'];
			$product_id_2 = $_POST['compare2'];
			// GAINED PRODUCT DATA FOR FIRST SELECTED PRODUCT
			$sql = "SELECT id, title, cid, scid, description, img, price, quantity, rating FROM products WHERE id = $product_id_1";
			$product_1 = $conn->query($sql);  
			$product_1 = mysqli_fetch_all ($product_1, MYSQLI_ASSOC);
			$product_1 = $product_1[0];
			
			// GAINED PRODUCT DATA FOR SECOND SELECTED PRODUCT
			$sql = "SELECT id, title, cid, scid, description, img, price, quantity, rating FROM products WHERE id = $product_id_2";
			$product_2 = $conn->query($sql);  
			$product_2 = mysqli_fetch_all ($product_2, MYSQLI_ASSOC);
			$product_2 = $product_2[0];
			

			// IF OPEN TO CHECK PRODUCT LAPTOP
			if ($cid == 1) {
			// RETRIEVED SPECS FOR FIRST PRODUCT
				$sql = "SELECT id, p_id, os, processor, speed, graphic_card, ram, hd, battery FROM specs_lap WHERE p_id = $product_id_1";
				$specs_lap_1 = $conn->query($sql);  
				$specs_lap_1 = mysqli_fetch_all ($specs_lap_1, MYSQLI_ASSOC);
				$specs_lap_1 = $specs_lap_1[0];

			//RETRIEVED SPECS FOR SECOND PRODUCT
				$sql = "SELECT id, p_id, os, processor, speed, graphic_card, ram, hd, battery FROM specs_lap WHERE p_id = $product_id_2";
				$specs_lap_2 = $conn->query($sql);  
				$specs_lap_2 = mysqli_fetch_all ($specs_lap_2, MYSQLI_ASSOC);
				$specs_lap_2 = $specs_lap_2[0];
		?>
			<table class="table table-hover" bgcolor="white">
				<tr class="active">
					<th>Product Name</th>
					<th><?=$product_1['title']?></th>
					<th><?=$product_2['title']?></th>
				</tr>
				<tr>
				</tr>
				<tr>
					<th>Image</th>
					<td><img src="<?=$product_1['img']?>"></td>
					<td><img src="<?=$product_2['img']?>"></td>
				</tr>
				<tr>
					<th>Operating System</th>
					<td><?=$specs_lap_1['os']?></td>
					<td><?=$specs_lap_2['os']?></td>
				</tr>
				<tr>
					<th>Processor</th>
					<td><?=$specs_lap_1['processor']?></td>
					<td><?=$specs_lap_2['processor']?></td>
				</tr>
				<tr>
					<th>Speed</th>
					<td><?=$specs_lap_1['speed']?></td>
					<td><?=$specs_lap_2['speed']?></td>
				</tr>
				<tr>
					<th>Graphic Card</th>
					<td><?=$specs_lap_1['graphic_card']?></td>
					<td><?=$specs_lap_2['graphic_card']?></td>
				</tr>
				<tr>
					<th>RAM</th>
					<td><?=$specs_lap_1['ram']?></td>
					<td><?=$specs_lap_2['ram']?></td>
				</tr>
				<tr>
					<th>Hard Disk</th>
					<td><?=$specs_lap_1['hd']?></td>
					<td><?=$specs_lap_2['hd']?></td>	
				</tr>
				<tr>
					<th>Battery</th>
					<td><?=$specs_lap_1['battery']?></td>
					<td><?=$specs_lap_2['battery']?></td>
				</tr>
			</table>
		<?php
		} //IF CLOSE FOR LAPTOP CHECK

			if ($cid == 2) { //IF OPEN TO CHECK PRODUCT MOBILE
				
				// RETRIVED SPECS FOR MOBILE 1
				$sql = "SELECT id, p_id, internal_memory, ram, primary_cam, secondary_cam, battery, screen, cores FROM specs_mob WHERE p_id=".$product_id_1;
				$specs_mob_1 = $conn->query($sql);  
				$specs_mob_1 = mysqli_fetch_all ($specs_mob_1, MYSQLI_ASSOC);
				$specs_mob_1 = $specs_mob_1[0];

				// RETRIEVE SPECS FOR SECOND MOBILE
				$sql = "SELECT id, p_id, internal_memory, ram, primary_cam, secondary_cam, battery, screen, cores FROM specs_mob WHERE p_id=".$product_id_2;
				$specs_mob_2 = $conn->query($sql);  
				$specs_mob_2 = mysqli_fetch_all ($specs_mob_2, MYSQLI_ASSOC);
				$specs_mob_2 = $specs_mob_2[0];
		?>
			<table class="table table-hover">
				<tr class="active">
					<th>Product Name</th>
					<th><?=$product_1['title']?></th>
					<th><?=$product_2['title']?></th>
				</tr>
				<tr>
					<th>Image</th>
					<td><img src="<?=$product_1['img']?>"></td>
					<td><img src="<?=$product_2['img']?>"></td>
				</tr>
				<tr>
					<th>Internal Memory</th>
					<td><?=$specs_mob_1['internal_memory']?></td>
					<td><?=$specs_mob_2['internal_memory']?></td>	
				</tr>
				<tr>
					<th>RAM</th>
					<td><?=$specs_mob_1['ram']?></td>
					<td><?=$specs_mob_2['ram']?></td>
				</tr>
				<tr>
					<th>Primary Camera</th>
					<td><?=$specs_mob_1['primary_cam']?></td>
					<td><?=$specs_mob_2['primary_cam']?></td>
				</tr>
				<tr>
					<th>Secondary Camera</th>
					<td><?=$specs_mob_1['secondary_cam']?></td>
					<td><?=$specs_mob_2['secondary_cam']?></td>
				</tr>
				<tr>
					<th>Battery</th>
					<td><?=$specs_mob_1['battery']?></td>
					<td><?=$specs_mob_2['battery']?></td>
				</tr>
				<tr>
					<th>Screen</th>
					<td><?=$specs_mob_1['screen']?></td>
					<td><?=$specs_mob_2['screen']?></td>
				</tr>
				<tr>
					<th>Cores</th>
					<td><?=$specs_mob_1['cores']?></td>
					<td><?=$specs_mob_2['cores']?></td>
				</tr>
			</table>
		<?php
			} //IF CLOSE FOR MOBILE CHECK 
		?>
<?php
} //IF CLOSE FOR METHOD POST
?>
	
		</div>
	</div>
<?php  
	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
?>
	<div class="row">
		<div class="empty space" style="height: 18vw;">
			
		</div>
	</div>
<?php
	}
?>				
<?php
	include 'footer.php';
?>