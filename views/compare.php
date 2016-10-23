<?php
	include 'header.php';
	if (isset($_GET['category'])) {
		$cid = $_GET['category'];
	}
	else {
		$cid = '';
	}

	if ($cid==1) {
		if (!isset($lapcookie)) {
			echo'<script> window.location="compare_backup.php?category=1"; </script>';
		}
?>
<table>
	<tr>
		<th>Product</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['title']?><a href="lapcompare_modified.php?remove=1&id=<?=$value['pid']?>&category=1"><span class="glyphicon glyphicon-log-out"></span></a>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Rating</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['rating']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Image</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<img src="<?=$value['img']?>" style="max-width: 10vw;">
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Operating System</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['os']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Processor</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['processor']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Speed</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['speed']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Graphic Card</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['graphic_card']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Ram</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['ram']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Hard Disk</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['hd']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Battery</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<td>
			<?=$value['battery']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Price</th>
		<?php
		foreach ($lapcookie as $key => $value) {
		?>
		<th>
			<?=$value['price']?>
		</th>
		<?php
		}
		?>
	</tr>
</table>
<?php
	}





if ($cid==2) {
		if (!isset($mobcookie)) {
			echo'<script> window.location="compare_backup.php?category=2"; </script> ';
		}
?>
<table>
	<tr>
		<th>Product</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['title']?><a href="mobcompare_modified.php?remove=1&id=<?=$value['pid']?>&category=2"><span class="glyphicon glyphicon-log-out"></span></a>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Rating</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['rating']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Image</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<img src="<?=$value['img']?>" style="max-width: 10vw;">
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Internal Memory</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['internal_memory']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Ram</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['ram']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Primary Camera</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['primary_cam']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Secondary Camera</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['secondary_cam']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Battery</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['battery']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Screen</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['screen']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Cores</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<td>
			<?=$value['cores']?>
		</td>
		<?php
		}
		?>
	</tr>
	<tr>
		<th>Price</th>
		<?php
		foreach ($mobcookie as $key => $value) {
		?>
		<th>
			<?=$value['price']?>
		</th>
		<?php
		}
		?>
	</tr>
</table>
<?php
	}
	// var_dump($lapcookie);
?>