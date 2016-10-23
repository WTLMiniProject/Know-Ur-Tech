<?php

	include 'header.php'; 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$c_password = trim($_POST["c_password"]);
		$mobile = trim(filter_input(INPUT_POST, "mobile",FILTER_SANITIZE_STRING));
		$sql = "SELECT email FROM users WHERE email = '$email'";
		$email_1 = $conn->query($sql); 
		$email_1 = mysqli_fetch_all ($email_1, MYSQLI_ASSOC);
		// var_dump($email_1);
		if ($name == "" || $email == "" || $password == "" || $mobile == "") {
			$error_message = "important fields have been left blank";
		}			
		elseif ($password != $c_password) {
			$error_message = "password doesn't match";
		}
		elseif (count($email_1) > 0){
			$error_message = "email already exists";
		}
		else {
			$password = sha1($password);
			$sql = "INSERT INTO users(name,email,password,mobile) VALUES ('$name','$email','$password','$mobile')";
			$conn->query($sql);
			echo'<script> window.location="index.php"; </script> ';
		}
	}
 ?>

<div class="container">
	<div class="row">
		<h1>Fill signup form</h1>
		<?php
			if (isset($error_message)) {
				echo "<p class='message'>" . $error_message . "</p>";
			}
			// else {
			// 	echo "<p>If you've any suggestion please fill up this form</p>";
			// }
		?>
		<form method="post" action="signup.php">
			<table>
				<tr>
					<th>
						<label for="name">Name(required)</label>
					</th>
					<td>
						<input type="text" name="name" id="name" value="<?php if (isset($name)) {
							echo $name;
						} ?>">
					</td>
				</tr>
				<tr>
					<th>
						<label for="email">Email(required)</label>
					</th>
					<td>
						<input type="email" name="email" id="email" value="<?php if (isset($email)) {
							echo $email;
						} ?>">
					</td>
				</tr>
				<tr>
					<th>
						<label for="password">Password(required)</label>
					</th>
					<td>
						<input type="password" name="password" id="password" value="">
					</td>
				</tr>
				<tr>
					<th>
						<label for="c_password">Confirm Password(required)</label>
					</th>
					<td>
						<input type="password" name="c_password" id="c_password" value="">
					</td>
				</tr>
				<tr>
					<th>
						<label for="mobile">Mobile(required)</label>
					</th>
					<td>
						<input type="text" name="mobile" id="mobile" value="<?php if (isset($mobile)) {
							echo $mobile;
						} ?>">
					</td>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Submit"></th>
				</tr>
			</table>
		</form>
		
	</div>
</div>

<?php include("footer.php"); ?>