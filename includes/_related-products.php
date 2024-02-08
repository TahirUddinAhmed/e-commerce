<?php
//  query to grab all the products 
$query = "SELECT * FROM `products` WHERE `category_id` ='$categoryID'";
$result = mysqli_query($conn, $query);

if(!$result) {
  die("QUERY FAILED" . mysqli_error($conn));
} 


?>
<section id="related-product">
        <div class="container py-4">
          <h4 class="font-20 font-rubik">Related Products</h4>
          <hr>

          <!-- // owl carousel -->
          <div class="owl-carousel owl-theme bg-light">

          <?php
            if(mysqli_num_rows($result) > 0) {
              while($data=mysqli_fetch_assoc($result)) {
                $productID = $data['ProductID'];
                $categoryID = $data['category_id'];
                $productName = $data['Name'];
                $price = $data['Price'];
                $originalPrice = $data['original-price'];
                $quantity = $data['StockQuantity'];
                $productImg = $data['product-img'];
                $status = $data['status'];

                if($status == 'public') {
            ?>
            <div class="item">
              <div class="product font-rale py-2">
                <a href=""><img src="./assets/products/<?= $productImg ?>" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <a href="product.php?p_id=<?= $productID ?>">
                    <?= $productName ?>
                  </a>
                  <div class="rating text-warning font-12">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                  </div>
                  <div class="price py-2">
                    <span><?= $price ?></span>
                  </div>
                  <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                </div>
              </div>
            </div>

            <?php
                }
              }
            }
          ?>


          </div>
        </div>
      </section>