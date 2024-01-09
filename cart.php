<?php require_once 'includes/header.php' ?>
        <!-- shopping cart section -->
        <section id="cart" class="py-3">
            <div class="container">
                <h5 class="font-baloo font-20">Shopping Cart</h5>

                <!-- shopping cart item -->
                <div class="row">
                    <div class="col-sm-9">
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/watch01.jpg" style="height: 120px;" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-balo font-20">New Stylish Watch</h5>
                                <small>By Apple</small>
                                
                                <!-- product quantity -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="number" data-id="pro1" class="qty_input border px-2 w-100 bg-light" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                                </div>
                                <!-- !product quantity -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-20 text-danger font-baloo">
                                    <span class="product-price">318</span>
                                  </div>
                            </div>
                        </div>


                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/watch01.jpg" style="height: 120px;" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-balo font-20">New Stylish Watch</h5>
                                <small>By Apple</small>
                                
                                <!-- product quantity -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="number" data-id="pro1" class="qty_input border px-2 w-100 bg-light" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                                </div>
                                <!-- !product quantity -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-20 text-danger font-baloo">
                                    <span class="product-price">318</span>
                                  </div>
                            </div>
                        </div>


                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/watch01.jpg" style="height: 120px;" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-balo font-20">New Stylish Watch</h5>
                                <small>By Apple</small>
                                
                                <!-- product quantity -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="number" data-id="pro1" class="qty_input border px-2 w-100 bg-light" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                                </div>
                                <!-- !product quantity -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-20 text-danger font-baloo">
                                    <span class="product-price">318</span>
                                  </div>
                            </div>
                        </div>
                        <!-- !cart item -->


                    </div>
                    <!-- subtotal section -->
                    <div class="col-sm-3">
                       <div class="sub-total text-center mt-2 border">
                          <h6 class="font-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery</h6>
                          <div class="border-top py-4">
                            <h5 class="font-baloo font-20">Subtotatal (3 Item):&nbsp; <span class="text-danger" id="deal-price">1645</span></h5>
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                       </div>
                    </div>
                    <!-- !subtotal section -->
                </div>
                <!-- !shopping cart item -->
            </div>
        </section>
        <!-- !shopping cart section -->

        <!-- New product -->
      <?php require_once 'includes/_new-product.php' ?>
      <!-- !New product -->
<?php require_once 'includes/footer.php' ?>