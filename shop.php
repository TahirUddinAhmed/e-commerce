<?php require_once 'includes/header.php' ?>
<section id="special-price">
        <div class="container shop mt-5">
          <h4 class="font-rubik font-20">All Product</h4>
          <div class="filter-cat text-end font-balo font-18">
            <form action="shopCat.php" method="post">
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
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>

          <div class="grid">
            <?php
              $products = get_products($conn);

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
            ?>

          </div>

        </div>
      </section>

<?php require_once 'includes/footer.php' ?>