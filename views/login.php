<?php
	//session_start(); 
	include 'header.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
		$password = trim($_POST["pass"]);
		$password = sha1($password);
		$mobile = trim(filter_input(INPUT_POST, "mobile",FILTER_SANITIZE_STRING));
		$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
		$user = $conn->query($sql); 
		$user = mysqli_fetch_all ($user, MYSQLI_ASSOC);
		//$email[]
		if (count($user) > 0){
			//var_dump($user);
			$_SESSION['name'] = $user[0]['name'];
			echo'<script> window.location="index.php"; </script> ';
		}
		else {
			$error = "Failed to login";
			
		}
	
	}

	//session_unset(); 

// destroy the session 
//session_destroy();
 ?>
 <div class="loginmodal-container"> <!-- container class inside modal -->
	<h1>Login to Your Account</h1><br>
	<?php
			if (isset($error)) {
				echo "<p class='message'>" . $error . "</p>";
			}
			// else {
			// 	echo "<p>If you've any suggestion please fill up this form</p>";
			// }
	?>
	<form action="login.php" method="post"> <!-- login form begin -->
	  <input type="email" name="email" placeholder="Email" required>
	  <input type="password" name="pass" placeholder="Password" required>
	  <input type="submit" name="login" class="login loginmodal-submit" value="Login">
	</form> <!-- end of login form -->

	<div class="login-help"> <!-- login footer text -->
	  <a href="signup.php">Register</a>
	 </div>
</div>
