<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNest</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Owl Carousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font awesome ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- start #header -->
    <header>
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-12 text-black-50 m-0">Morigaon, Assam, 782105</p>
            <div class="font-rale font-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a id="list" href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
            </div>
        </div>

        <!-- Start #Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ShopNest</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Comming Soon</a>
                  </li>
                </ul>

                <form action="#" class="font-rale font-14">
                    <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-16 px-2 text-white"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <span class="px-3 py-2 font-16 text-dark bg-light rounded-pill">0</span>
                    </a>
                </form>

              </div>
            </div>
          </nav>
        <!-- !Start #Navbar -->
    </header>
    <!-- !start #header -->

    <!-- start #main -->
    <div id="main-site">
        <!-- product -->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="./assets/products/1.png" alt="product" class="img-fluid">
                        <div class="row pt-4 font-16 font-balo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Buy Now</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to cart</button>

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 py-3">
                        <h5 class="font-balo font-20">Samsung Galaxy 10</h5>
                        <small>by samsung</small>

                        <div class="d-flex">
                            <div class="rating text-warning font-12">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half" aria-hidden="true"></i></span>
                                <a href="" class="font-14 font-rale">1548 ratings | 999+ answered question </a>
                                
                            </div>
                        </div>
                        <hr class="m-0">

                        <!-- product price -->
                        <div class="product-price font-rale mt-3">
                            <div class="product-item d-flex">
                                <p class="w-25">M.R.P</p>
                                <P><strike>15499</strike></P>
                            </div>
                            <div class="product-item d-flex">
                                <p class="w-25">Deal Price</p>
                                <P class=""><span class="font-20 text-danger font-rale">12799</span> <small>include of all taxes</small></P>
                            </div>
                            <div class="product-item d-flex">
                                <p class="w-25">You Save</p>
                                <P class=""><span class="font-20 text-danger font-rale">2700</span></P>
                            </div>
                        </div>
                        <!-- !product price -->

                        <!-- policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center me-5">
                                    <div class="font-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="" class="font-rale font-12">10 Days <br>Replacement</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="" class="font-rale font-12">Daily Tuition<br>Deliver</a>
                                </div>
                                <div class="return text-center">
                                    <div class="font-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="" class="font-rale font-12">1 year <br>Warrenty</a>
                                </div>
                            </div>
                        </div>
                        <!-- !policy -->
                        <hr>

                        <!-- order detail -->
                        <div id="order-detail" class="font-rale d-flex flex-column text-dark">
                          <small>Delivery By: Nov 21 - Nov - 26</small>
                          <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 19,752 ratings)</small>
                          <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 782105</small>
                        </div>
                        <!-- !order detail -->

                        <div class="row">
                          <div class="col-6">
                              <!-- product qty section -->
                              <div class="qty d-flex">
                                  <h6 class="font-baloo">Qty</h6>
                                  <div class="px-4 d-flex w-100 font-rale">
                                      <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                      <input type="number" data-id="pro1" class="qty_input border px-2 w-75 bg-light" placeholder="1">
                                      <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                  </div>
                              </div>
                              <!-- !product qty section -->
                          </div>
                      </div>

                      <!-- size -->
                      <div class="size my-3">
                        <div class="font-balo">Size: </div>

                        <div class="d-flex justify-content-betweent w-100">
                          <div class="font-rubik border p-2">
                            <button class="btn p-0 font-14">4GB RAM</button>
                          </div>
                          <div class="font-rubik border p-2">
                            <button class="btn p-0 font-14">6GB RAM</button>
                          </div>
                          <div class="font-rubik border p-2">
                            <button class="btn p-0 font-14">8GB RAM</button>
                          </div>
                          <div class="font-rubik border p-2">
                            <button class="btn p-0 font-14">6GB RAM</button>
                          </div>
                        </div>
                      </div>
                      <!-- !size -->


                    </div>

                    <div class="col-12 mt-2">
                      <h6 class="font-rubik">Product Description</h6>
                      <hr>
                      <p class="font-rale font-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci itaque obcaecati dignissimos provident animi et?</p>
                      <p class="font-rale font-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci itaque obcaecati dignissimos provident animi et?</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- !product -->

        <!-- new phone section -->
        <section id="new-product">
          <div class="container py-4">
            <h4 class="font-20 font-rubik">New Product</h4>
            <hr>
  
            <!-- // owl carousel -->
            <div class="owl-carousel owl-theme bg-light">
  
              <div class="item">
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
  
              <div class="item">
                <div class="product font-rale py-2">
                  <a href=""><img src="./assets/products/2.png" alt="product 1" class="img-fluid"></a>
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
                      <span>24599</span>
                    </div>
                    <button class="btn btn-warning font-12 text-white">Add to Cart</button>
                  </div>
                </div>
              </div>
  
  
            </div>
          </div>
        </section>
        <!-- !new phone section -->

    </div>
    <!-- !start #main -->

    <!-- start #footer -->
    <footer class="bg-dark text-white py-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4 class="font-rubik font-20">ShopNest</h4>
            <p class="font-rale text-white-50 py-2">“ShopeNest” is a e-commerce website developed to provide users with a seamless online shopping experience. This project report offers a comprehensive overview of the development, features, and potential of ShopNest as a platform that enhance the online shopping process.</p>
          </div>
          
          <div class="col-lg-5 col-12">
            <h4 class="font-rubik font-20">Newsletters</h4>
            <form action="" class="row">
              <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email *">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
          </div>

          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-20">Information</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="" class="text-white-50 font-rale font-14">About Us</a>
              <a href="" class="text-white-50 font-rale font-14">Delivery Information</a>
              <a href="" class="text-white-50 font-rale font-14">Privacy Policy</a>
              <a href="" class="text-white-50 font-rale font-14">Terms & Conditions</a>
            </div>
          </div>

          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-20">Account</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="" class="text-white-50 font-rale font-14">My Account</a>
              <a href="" class="text-white-50 font-rale font-14">Order History</a>
              <a href="" class="text-white-50 font-rale font-14">Whishlist</a>
              <a href="" class="text-white-50 font-rale font-14">Contact Us</a>
            </div>
          </div>

        </div>
      </div>
      
      
    </footer>
    <!-- !start #footer -->
    <div class="bg-dark text-white text-center py-2">
      <p>&copy; Copyright 2023 | Developed By <a href="#" class="color-second font-rale">Asif & Kunja</a> </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    
    
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js" integrity="sha512-4GsgvzFFry8SXj8c/VcCjjEZ+du9RZp/627AEQRVLatx6d60AUnUYXg0lGn538p44cgRs5E2GXq+8IOetJ+6ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- isotop jquery plugin cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Custom Javascript file -->
    <script src="index.js"></script>
</body>
</html>