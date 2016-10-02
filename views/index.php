<?php
  include ('header.php');

  
?>
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

    <div class="row small-up-2 large-up-4">
      <?php 
        $sql = "SELECT id, title, cid, scid, description, img, price, quantity, created  FROM products ORDER BY rating DESC LIMIT 4";
        $product = $conn->query($sql);
        $product = mysqli_fetch_all ($product, MYSQLI_ASSOC);
        foreach ($product as $pid => $p_item) {
      ?>
      <div class="column">
        <img class="thumbnail" src="<?=$p_item['img']?>">
        <h5><?=$p_item['title']?></h5>
        <p></p>
        <a href="category.php?category=<?=$c_item['id']?>&subcategory=<?=$sc_item['id']?>&product=<?=$p_item['id']?>" class="button expanded">Add to Cart</a>
      </div>
      <?php  
         } 
      ?>
    </div>

    <hr>

    <div class="row column">
      <div class="callout primary">
        <h3>Really big special this week on items.</h3>
      </div>
    </div>

    <hr>

    <div class="row column text-center">
      <h2>Latest Products</h2>
      <hr>
    </div>

    <div class="row small-up-2 medium-up-3 large-up-6">
      <?php 
        $sql = "SELECT id, title, cid, scid, description, img, price, quantity, created  FROM products ORDER BY created DESC LIMIT 6";
        $product = $conn->query($sql);
        $product = mysqli_fetch_all ($product, MYSQLI_ASSOC);
        foreach ($product as $pid => $p_item) {
      ?>
        <div class="column">
        <img class="thumbnail" src="<?=$p_item['img']?>">
        <h5><?=$p_item['title']?></h5>
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
    