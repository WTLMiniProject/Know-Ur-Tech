<?php
  include ('header.php');  
?>
    <!-- DIVISION FOR CAROUSEL -->
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <?php
          for ($i=1; $i <=2 ; $i++) { 
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
    <div class="row small-up-2 large-up-4">
      <?php 
        $sql = "SELECT id, title, cid, scid, description, img, price, quantity, created  FROM products ORDER BY rating DESC LIMIT 4";
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
        <a href="category.php?category=<?=$c_item['id']?>&subcategory=<?=$sc_item['id']?>&product=<?=$p_item['id']?>" class="button expanded">Add to Cart</a>
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

    <div class="row small-up-2 medium-up-3 large-up-6">
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
              <img class="thumbnail mobile_img" src="<?=$p_item['img']?>" style="height: 115px; width: 360px; padding: 5px 40px;">
        <?php  
          }
        ?>
        <a href="product.php?pro=<?=$p_item['id']?>"><h5><?=$p_item['title']?></h5></a>
        <p><?=$p_item['price']?></p>
        <a href="#" class="button small expanded hollow">Add to Cart</a>
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
    