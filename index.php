<?php require 'helpers.php' ?>
<?php basePath('functions.php'); ?>
<?php require 'includes/header.php' ?>
<?php

// <!-- Banner section -->
loadView('_banner-section');
// <!-- !Banner section -->

// <!-- New product -->
require_once 'includes/_new-product.php';
// <!-- !New product -->


// <!-- Special-price -->
loadView('_spacial-offer');
// <!-- !Special-price -->
// <!-- Banner ads -->
loadView('_banner-ads');
// <!-- !Banner ads -->


// <!-- start #top section -->
require 'includes/_top-sale.php';
// <!-- !start #top section -->

// <!-- Blog Section -->
loadView('_blog-section');
// <!-- !Blog Section -->
?>

<?php loadView('footer') ?>