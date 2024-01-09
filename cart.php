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
      <section id="new-product">
        <div class="container py-5">
          <h4 class="font-20 font-rubik">New Phones</h4>
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
      <!-- !New product -->
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