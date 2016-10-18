<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Ur Tech | Welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="../library/materialize/css/materialize.min.css"> -->
    <link rel="stylesheet" href="../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap-theme.min.css">
    <script src="../library/foundations/js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="../library/foundation/css/foundation.min.css">
    <script src="../library/foundation/js/vendor/foundations.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- <script type="text/javascript" src="../library/materialize/js/materialize.min.js"></script> -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../library/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php
  $user_name = "root";
  $password = "";
  $database = "electronics";
  $host_name = "localhost"; 
  $conn = new mysqli($host_name, $user_name, $password, $database);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT id, title FROM category";
  $category = $conn->query($sql);

  
  $category = mysqli_fetch_all ($category, MYSQLI_ASSOC);
  
  


  // var_dump($category);

 /* if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  }*/
  //$conn->close();

  ?> 
    <!-- Start Top Bar -->
    <nav class="top-bar navbar" role="navigation">
      
      <div class="navbar-header"> <!-- navbar header -->
        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#exp_navbar" aria-expanded="false">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        
        <a class="navbar-brand logo_div" href="index.php"><img class="logo" src="../uploads/images/prjtlogo1.png"></a>
      
      </div> <!-- end navbar header -->

      <div class="collapse navbar-collapse" id="exp_navbar"> <!-- navbar-expand -->
        
        <div> <!-- division for left navbar -->
          <ul class="menu nav navbar-nav navbar-left"> <!-- left navbar -->
            <li class="dropdown"> <!-- products option -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
              <ul class="dropdown-menu"> <!-- dropdown for products -->

                <?php
                  foreach ($category as $cid => $c_item) 
                  {  

                ?>
                <li class="dropdown-submenu"> <!-- mobiles -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$c_item['title'];?></span></a>
                  <ul class="dropdown-menu"> <!-- dropdown for mobiles -->
                  <?php
                    $sql = "SELECT id, title FROM sub_category WHERE cid = ".$c_item['id'];
                    $subcategory = $conn->query($sql);  
                    $subcategory = mysqli_fetch_all ($subcategory, MYSQLI_ASSOC);
                   
                    foreach ($subcategory as $key => $sc_item) {
                  ?>
                         <li style="float: none;"><a href="category.php?category=<?=$c_item['id'];?>&subcategory=<?=$sc_item['id'];?>"> <?=$sc_item['title'];?></a></li>
                  <?php
                    }
                  ?>
                  </ul> <!-- end of mobile dropdown -->
                </li> <!-- mobiles list close -->
                <?php
                    
                  }
                ?>
                
              </ul> <!-- end of products dropdown -->
            </li> <!-- close product option -->
            <li class="dropdown"> <!-- compare option -->
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compare<span class="caret"></span></a>
              <ul class="dropdown-menu"> <!-- dropdown for comparison -->
                <?php
                  foreach ($category as $cid => $c_item) {
                ?>
                  <li><a href="compare.php?category=<?=$c_item['id']?>"><?=$c_item['title']?></a></li>
                <?php
                  }
                ?>
              </ul> <!-- end of comparison dropdown -->
            </li> <!-- end of compare option -->
          </ul> <!-- end of left navbar -->
        </div> <!-- closing division under left-navber -->
        
        <div> <!-- division for right navbar -->          
          <ul class="menu nav navbar-nav navbar-right"> <!-- right navbar -->
            <li><a href="#">Cart</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a type="button" data-toggle="modal" data-target="#login-modal">Login</a></li>
            <li><a href="#" data-toggle="modal" data-target="#signup-modal">Signup</a></li>
          </ul> <!-- closing right navbar -->
        </div> <!-- closing division for right navbar -->
      
      </div> <!-- closing expand navbar -->
    </nav> <!-- end of nav element -->
    
    <div class="login_space"> <!-- class for login space -->
      
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"> <!-- class for login modal -->
        <div class="modal-dialog"> <!-- class for modal dialog -->
          <div class="loginmodal-container"> <!-- container class inside modal -->
            <h1>Login to Your Account</h1><br>
            <form> <!-- login form begin -->
              <input type="text" name="user" placeholder="Username">
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form> <!-- end of login form -->
            
            <div class="login-help"> <!-- login footer text -->
              <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div> <!-- closing login footer text -->
          </div> <!-- closing container class inside modal -->
        </div> <!-- closing modal dialog -->
      </div> <!-- closing login modal -->
    </div> <!-- end of login space -->

    <div class="signup_space"> <!-- signup space -->
      <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none"> <!-- signup modal -->
        <div class="modal-dialog"> <!-- signup dialog -->
          <div class="loginmodal-container"> <!-- container for signup -->
            <h1>Signup</h1>
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
            </form> <!-- end of signup form -->
          </div> <!-- closing signup container -->
        </div> <!-- closing signup dialog -->
      </div> <!-- closing signup modal -->
    </div> <!-- closing signup space -->

    <!-- TODO
      ADMIN PANEL 
      PRODUCT DETAILS PAGE 
      COMPARE
      SPECS TABLE
      CAROUSEL IMAGES TO  BE ADDED 
      EXPAND DB
      ABOUT US DESIGN
       -->