<?php
//  query to grab all the products 
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

if(!$result) {
  die("QUERY FAILED" . mysqli_error($conn));
}


?>
<section id="top-sale">
        <div class="container py-5">
          <h4 class="font-rubik font-20">Top Sale</h4>
          <hr>

          <!-- owl-carousel -->
          <div class="owl-carousel owl-theme">
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
                <div class="text-center mt-5">
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
          <!-- // items -->
            

            <!-- <div class="item">
              <div class="product font-rale py-2">
                <a href=""><img src="./assets/products/keyboard2.jpeg" alt="product 2" class="img-fluid"></a>
                <div class="text-center mt-5">
                  Keyboard 2
                  <div class="rating text-warning font-12">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>27999</span>
                  </div>
                  <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                </div>
              </div>
            </div> -->

            <!-- <div class="item">
              <div class="product font-rale py-2">
                <a href=""><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  Redmi Series
                  <div class="rating text-warning font-12">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>11459</span>
                  </div>
                  <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                </div>
              </div>
            </div> -->

            <!-- <div class="item">
              <div class="product font-rale py-2">
                <a href=""><img src="./assets/products/5.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  Redmi M7
                  <div class="rating text-warning font-12">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>

                    <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>7899</span>
                  </div>
                  <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                </div>
              </div>
            </div> -->

            <!-- <div class="item">
              <div class="product font-rale py-2">
                <a href=""><img src="./assets/products/14.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  iPhone 7
                  <div class="rating text-warning font-12">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>32499</span>
                  </div>
                  <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                </div>
              </div>
            </div> -->



          </div>
          <!-- !owl-carousel -->
        </div>
      </section>