<?php
 if(isset($_GET['eid'])) {
    $productId = $_GET['eid'];
 }

//  query to retrieve the product details using product id 
$query = "SELECT * FROM products WHERE ProductID = $productId";
$result = mysqli_query($conn, $query);

if(!$result) {
    die("QUERY FAILED" . mysqli_error($conn));
}

if(mysqli_num_rows($result) > 0) {
    while($data=mysqli_fetch_assoc($result)) {
        $productImage = $data['product-img'];
        $productName = $data['Name'];
        $sellingPrice = $data['Price'];
        $originalPrice = $data['original-price'];
        $cat_id = $data['category_id'];
        $productQuantity = $data['StockQuantity'];
        $status = $data['status'];
        $productDsc = $data['Description'];
        $added_on = $data['added_on'];
    }

} else {
    // redirect -> view product page
    header("Location: products.php");
}

// retreive all the category item 
$catQ = "SELECT * FROM `category`";
$catRes = mysqli_query($conn, $catQ);

if(!$catRes) {
    die("QUERY FAILED" . mysqli_error($conn));
}



// edit the product form 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = mysqli_real_escape_string($conn, $_POST['product-name']);
    $sellingPrice = mysqli_real_escape_string($conn, $_POST['product-price']);
    $originalPrice = mysqli_real_escape_string($conn, $_POST['original-price']);
    $productCategory = mysqli_real_escape_string($conn, $_POST['product-category']);
    $productDesc = mysqli_real_escape_string($conn, $_POST['product-desc']);
    $productStatus = mysqli_real_escape_string($conn, $_POST['product-status']);
    $productQuantity = mysqli_real_escape_string($conn, $_POST['original-quantity']);

    // support extension
    $allowed_ext = array('png', 'jpg', 'jpeg');

    $product_image = $_FILES['product-image']['name'];
    $product_image_temp = $_FILES['product-image']['tmp_name'];
    $image_size = $_FILES['product-image']['size'];
    $target_dir = "../assets/products/$product_image";

    $image_ext = explode('.', $product_image);
    $image_ext = strtolower(end($image_ext));

    if(!empty($product_image)) {
        if (in_array($image_ext, $allowed_ext)) {
            if ($image_size <= 5000000) {
                // image upload
                move_uploaded_file($product_image_temp, $target_dir);

                if (!$result) {
                    die("QUERY FAILED" . mysqli_error($conn));
                } else {
                    // redirect to the success page
                    $success = "Product has been added successfully";
                }
            } else {
                $imgErr = '<p class="text-danger">Image size is too large, image size should be less than 500KB.</p>';
            }
        } else {
            $imgErr = '<p class="text-danger">Only .png, .jpg, .jpen and .gif allowed</p>';
        }
    } else {
        // grab the product image from DB
        $grabImg = "SELECT * FROM products WHERE `ProductID` = '$productId'";
        $imgRes = mysqli_query($conn, $grabImg);

        while($data=mysqli_fetch_assoc($imgRes)) {
            $product_image = $data['product-img'];
        }
    }


    // update query 
    $updateProduct = "UPDATE `products` SET `category_id` = '$productCategory', `Name` = '$productName', `Description` = '$productDesc', `price` = '$sellingPrice', `original-price` = '$originalPrice', `StockQuantity` = '$productQuantity', `product-img` = '$product_image', `status` = '$productStatus' WHERE `ProductID` = '$productId'";
    $updateRes = mysqli_query($conn, $updateProduct);

    if(!$updateRes) {
        die("query failed" . mysqli_error($conn));
    } else {
        header("Location: products.php?updated=$productId");
    }


}
?>
<h2 class="text-center">Edit Product</h2>
<hr>
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-lg-7" style="border: 1.5px solid #ddd; margin-left: 20px; padding: 14px;">
            <span class="text-danger"><?= $formErr ?? null ?></span>
            <div class="form-group">
                <label for="product-name">Product Name</label>
                <input type="text" name="product-name" value="<?= $productName ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-price">Selling price</label>
                <input type="number" name="product-price" value="<?= $sellingPrice ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="original-price">Original price</label>
                <input type="number" name="original-price" value="<?= $originalPrice ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-category">Product Category</label>
                <select name="product-category" class="form-control">
                    <option value="">Choose Category</option>

                    <?php
                        while($data=mysqli_fetch_assoc($catRes)) {
                            $catID = $data['id'];
                            $catName = $data['name'];
                          if($cat_id == $catID) {
                    ?>
                        <option value="<?= $cat_id ?>" selected><?= $catName ?></option>
                    <?php
                          } else {
                    ?>
                        <option value="<?= $catID ?>"><?= $catName ?></option>
                    <?php
                          }
                        }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="original-quatity">Product Quantity</label>
                <input type="number" name="original-quantity" value="<?= $productQuantity ?>" class="form-control">
            </div>

            

            <div class="form-group">
                <label for="Description">
                    Description
                </label>
                <textarea name="product-desc" id="" cols="30" rows="10" class="form-control"><?= $productDsc ?></textarea>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="" style="border: 1.5px solid #ddd; margin-left: 20px; padding: 14px;">

                <div class="form-group">
                    <label for="product-img">Product Image</label>
                    <input type="file" name="product-image" class="form-control" value="<?= $productImage ?>">
                </div>

                <div class="img-preview">
                    <p>Image Preview</p>
                    <img src="../assets/products/<?= $productImage ?>" class="img-thumbnail" style="margin-bottom: 20px;" alt="">
                </div>

                <!-- <input type="submit" value="Add Product" class="btn btn-primary btn-lg btn-block"> -->
            </div>

            <div class="" style="border: 1.5px solid #ddd; margin-left: 20px; margin-top: 20px; padding: 14px;">
                <div class="form-group">
                    <label for="product-status">Product Status: [<?= $status ?>]</label>
                    <select name="product-status" class="form-control">
                        <option value="<?= $status ?>">Select</option>
                        <option value="draft">draft</option>
                        <option value="public">Public</option>
                    </select>
                </div>


                <input type="submit" value="Save Changes" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>
    </form>
</div>