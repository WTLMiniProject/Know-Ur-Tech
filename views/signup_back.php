<?php
  include ('header.php');  
?>
<div class="container">
    <!-- container for signup -->
            <h2>Signup</h2>
            <form> <!-- start of signup form -->
              <label for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Your Fullname">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password">
              <label for="c_password">Confirm Password</label>
              <input type="password" name="c_password" id="c_password" placeholder="Confirm Password">
              <label for="mobile">Mobile</label>
              <input type="text" name="mobile" id="mobile" placeholder="Enter mobile number">
              <input type="submit" name="signup" class="login" value="signup">
            </form> <!-- end of signup form -->
</div>
<?php
  include 'footer.php';
?>