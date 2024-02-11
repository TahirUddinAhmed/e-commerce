<?php require_once 'includes/header.php' ?>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(empty($_POST['category'])) {
    $catErr = "Plese select a category";
    header("Location: shop.php");
  } else {
    $categoryId = $_POST['category'];

    $products = cat_products($conn, $categoryId);
    
  }
 }
?>
<section id="special-price">
        <div class="container shop mt-5">
          <div class="back-btn">
            <a href="shop.php" class="nav-link border rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
            </svg>
            Back
            </a>
          </div>
          <h4 class="font-rubik font-20">
            <?php
              if(isset($categoryId)) {
                $cat = get_category($conn, $categoryId);
                
                if($cat !== null) {
                   foreach ($cat as $catList) {
                      echo $catList['name'];
                   }
                }
              } else {
                header("Location: shop.php");
              }
            ?>
          </h4>
          <div class="filter-cat text-end font-balo font-18">
            <form action="shopCat.php" method="post">
              <div>
                <select name="category" class="form-control" id="">
                    <option value="">Filter by category</option>
                    <?php
                        $categories = get_category($conn);

                        foreach($categories as $category) {
                    ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <span class="text-danger font-balo"><?= $catErr ?? null ?></span>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
          </div>

          <div class="grid">
          
            <?php
              if(isset($categoryId)) {
                

                if($products !== null) {

                foreach($products as $product) {
            ?>
            <div class="grid-item Keyboard border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <div class="img">
                    <a href=""><img src="./assets/products/<?= $product['product-img'] ?>" alt="product 1" class="img-fluid"></a>

                  </div>
                  <div class="text-center">
                    <a href="product.php?p_id=<?= $product['ProductID'] ?>">
                    <?= $product['Name'] ?>
                    </a>
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span><?= $product['Price'] ?></span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>
            <?php
              }
            
              }else {
                ?>
                    <p class="text-center mt-5 font-rale font-20">There are currently no items/products available for this category. </p>
                <?php
                }
            } 
              ?>

              
            

            <!-- <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <div class="img">
                    <a href=""><img src="./assets/products/12.png" alt="product 1" class="img-fluid"></a>

                  </div>
                  <div class="text-center">
                    Samsung
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>2054</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Keyboard border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <div class="img">
                    <a href=""><img src="./assets/products/keyboard2.jpeg" alt="product 1" class="img-fluid"></a>

                  </div>
                  <div class="text-center">
                    Small Keyboard
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>11000</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Watch border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <div class="img">
                    <a href=""><img src="./assets/products/watch05.webp" alt="product 1" class="img-fluid"></a>

                  </div>
                  <div class="text-center">
                    Watch
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>599</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/1.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Samsung Galaxy S6
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>14599</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Redmi
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>18599</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/12.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Samsung Galaxy S7
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>21499</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/14.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Apple 7
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>38299</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/8.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Redmi
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>29789</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/2.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Samsung Galaxy
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>8499</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/4.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Redmi
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>15899</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px;">

                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/10.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    Redmi
                    <div class="rating text-warning font-12">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>14599</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>

              </div>
            </div> -->

          </div>

        </div>
      </section>

<?php require_once 'includes/footer.php' ?>