<?php
  include ('header.php');  
?>
    <!-- DIVISION FOR CAROUSEL -->
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <?php
          for ($i=1; $i <=5 ; $i++) { 
        ?>
          <li class="orbit-slide">
          <img class="img-responsive" src="../uploads/carousel/image-<?=$i;?>.jpg" style="width: 1349px; height: 506px ;">
          </li>
        <?php
           } 
        ?>
      </ul>
    </div>

    <div class="row column text-center">
      <h2>Our Top Products</h2>
      <hr>
    </div>

    <!-- DIVISION FOR TOP PRODUCTS -->
    <div class="row small-up-2 large-up-4 top_products">
      <?php 
        $sql = "SELECT id, title, cid, scid, description, img, price, quantity, created  FROM products WHERE cid=1 ORDER BY rating DESC LIMIT 4";
        $product = $conn->query($sql);
        $product = mysqli_fetch_all ($product, MYSQLI_ASSOC);
        foreach ($product as $pid => $p_item) {
      ?>
      <div class="column">
        <?php 
          if ($p_item['cid']==1) {
        ?>
            <img class="thumbnail" src="<?=$p_item['img']?>">
        <?php    
          }
          else {
        ?>
              <img class="thumbnail mobile_img" src="<?=$p_item['img']?>" style="height: 178px; width: 360px; padding: 11px 92px;">
        <?php  
          }
        ?>
        <a href="product.php?pro=<?=$p_item['id']?>"><h5><?=$p_item['title']?></h5></a>
        <p></p>
        <?php 
            if (!check_cart($p_item['id'])) {
              if ($cart_count < 10) {
            ?>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button expanded">Add to Cart</a>
            <?php 
              }
              else {
            ?>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button expanded btn-info disabled">Add to Cart</a>
            
            <?php
              }
            }
            else{
            ?>
            <div>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button expanded btn-success disabled">Added to Cart</a>  
            </div>
            <?php
          }
            ?>
        
      </div>
      <?php  
         } 
      ?>
    </div>

    <hr>
    <!-- DIVISION FOR RUNNING OFFERS -->
    <div class="row column">
      <div class="callout primary">
        <h3>Hi5....FILL YOUR CART WITH 5 PRODUCTS AND GET 5% DISCOUNT</h3>
      </div>
    </div>

    <hr>
    <!-- DIVISION FOR NEW PRODUCTS -->
    <div class="row column text-center">
      <h2>Latest Products</h2>
      <hr>
    </div>
    <?php
    $sql = "SELECT id, title, cid, scid, description, img, price, quantity, created  FROM products ORDER BY created DESC LIMIT 6";
        $product = $conn->query($sql);
        $product = mysqli_fetch_all ($product, MYSQLI_ASSOC);
    ?>
    <div class="row small-up-2 medium-up-3 large-up-6  new_products">
      <?php 
        foreach ($product as $pid => $p_item) {
      ?>
        <div class="column">
        <?php 
          if ($p_item['cid']==1) {
        ?>
            <img class="thumbnail" src="<?=$p_item['img']?>">
        <?php    
          }
          else {
        ?>
              <img class="thumbnail mobile_img" src="<?=$p_item['img']?>" style="padding: 5px 3vw;">
        <?php  
          }
        ?>
        <a href="product.php?pro=<?=$p_item['id']?>"><h5><?=$p_item['title']?></h5></a>
        <p><?=$p_item['price']?></p>
        <?php 
            if (!check_cart($p_item['id'])) {
              if ($cart_count < 10) {
            ?>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button small expanded hollow">Add to Cart</a>
            <?php 
              }
              else {
            ?>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button small expanded hollow btn-info disabled">Add to Cart</a>
            
            <?php
              }
            }
            else{
            ?>
            <div>
              <a href="added_cart.php?page=<?=$_SERVER['PHP_SELF']?>&prod_id=<?=$p_item['id']?>" class="button small expanded hollow btn-default disabled">Added to Cart</a>  
            </div>
            <?php
          }
            ?>
        </div>
      <?php  
         } 
      ?>
    </div>

    <hr>
    <!-- <div class="row">
      <div class="medium-4 columns">
        <h4>Top Products</h4>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <h4>Top Products</h4>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <h4>Top Products</h4>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/100x100">
          </div>
          <div class="media-object-section">
            <h5>Nunc Eu Ullamcorper Orci</h5>
            <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
          </div>
        </div>
      </div>
    </div> -->
    <?php
      include 'footer.php';
    ?>
    