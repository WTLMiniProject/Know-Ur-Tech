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

	$sub = [];
	foreach ($subcategory as $s_key => $s_value) {
		$sub[$s_value['id']] = $s_value['title'];
	}
?>

	<div class="container">
		<div class="header">
			<p>Compare and Know Ur Tech</p>
		</div>
	</div>
	<div class="compare_select">
		<?php
		foreach ($sub as $key => $value) {
		?>
		<select>
			<optgroup label="<?=$sub['title']?>"></optgroup>
		</select>
		<?php
		?>
		<select>
			<optgroup label="<?=?>"></optgroup>
		</select>
	</div>
	
<?
	include 'footer.php';
?>