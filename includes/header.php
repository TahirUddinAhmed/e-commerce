<!-- database connection file -->
<?php require_once 'config/database.php' ?>
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
              <a class="navbar-brand" href="index.html">ShopNest</a>
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
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
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
    <main id="main-site">