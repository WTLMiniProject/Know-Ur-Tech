<?php  
	include 'header.php';
	if (isset($_SESSION['name'])) {
	?>
	<div class="row">
		<div class="container">
			<div class="well">
				<h1>Payment Successfull</h1>
				<a href="count_modified.php?clear=1" type="button" role="button" class="btn btn-success btn-block" type="button" role="button" class="btn btn-default btn-block">SHOP MORE</a>
			</div>
		</div>
	</div>
	<?php
		include 'footer.php';
	}
	else {	
		echo'<script> window.location="login.php"</script> ';
	}
?>