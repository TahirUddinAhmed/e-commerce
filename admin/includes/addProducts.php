<?php
//  add product 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grab all the input fields
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

    // validate the form 
    if (empty($productName) || empty($sellingPrice) || empty($originalPrice) || empty($productCategory) || empty($productDesc) || empty($productStatus) || empty($productQuantity)) {
        $formErr = "All fields are required";
    } else {

        $image_ext = explode('.', $product_image);
        $image_ext = strtolower(end($image_ext));

        if (in_array($image_ext, $allowed_ext)) {
            if ($image_size <= 5000000) {
                // image upload
                move_uploaded_file($product_image_temp, $target_dir);

                $query = "INSERT INTO `products` (`category_id`, `Name`, `Description`, `Price`, `original-price`, `StockQuantity`, `product-img`, `status` , `added_on`) VALUES ('$productCategory', '$productName', '$productDesc', '$sellingPrice', '$originalPrice', '$productQuantity', '$product_image', '$productStatus' , current_timestamp());";
                $result = mysqli_query($conn, $query);

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
    }
}


// query to retrieve all categories 
$query = "SELECT * FROM category";
$category_result = mysqli_query($conn, $query);

if (!$category_result) {
    die("QUERY FAILED" . mysqli_error($conn));
}


?>
<?php
 if(isset($success)) {
?>
    <div class="alert alert-success" role="alert">
     <?= $success ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
 }
?>
<h2>Add Products</h2>
<hr>

<div class="row">
    <form action="products.php?source=add" method="post" enctype="multipart/form-data">
        <div class="col-lg-7" style="border: 1.5px solid #ddd; margin-left: 20px; padding: 14px;">
            <span class="text-danger"><?= $formErr ?? null ?></span>
            <div class="form-group">
                <label for="product-name">Product Name</label>
                <input type="text" name="product-name" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-price">Selling price</label>
                <input type="number" name="product-price" class="form-control">
            </div>
            <div class="form-group">
                <label for="original-price">Original price</label>
                <input type="number" name="original-price" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-category">Product Category</label>
                <select name="product-category" class="form-control">
                    <option value="">Choose Category</option>

                    <?php
                    if (mysqli_num_rows($category_result) > 0) {
                        while ($data = mysqli_fetch_assoc($category_result)) {
                            $cat_id = $data['id'];
                            $cat_name = $data['name'];
                    ?>
                            <option value="<?= $cat_id ?>"><?= $cat_name ?></option>

                    <?php
                        }
                    }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="original-quatity">Product Quantity</label>
                <input type="number" name="original-quantity" class="form-control">
            </div>

            <div class="form-group">
                <label for="product-img">Product Image</label>
                <input type="file" name="product-image" class="form-control">
                <span class="text-danger"><?= $imgErr ?? null ?></span>
            </div>

            <div class="form-group">
                <label for="Description">
                    Description
                </label>
                <textarea name="product-desc" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

        </div>
        <div class="col-lg-4" style="border: 1.5px solid #ddd; margin-left: 20px; padding: 14px;">
            <div class="">
                <div class="form-group">
                    <label for="product-status">Product Status</label>
                    <select name="product-status" class="form-control">
                        <option value="">Select</option>
                        <option value="draft">draft</option>
                        <option value="public">Public</option>
                    </select>
                </div>

                <!-- <div class="img-preview">
                    <p>Image Preview</p>
                    <img src="../assets/products/<?  ?>" class="img-thumbnail" style="margin-bottom: 20px;" alt="">
                </div> -->

                <input type="submit" value="Add Product" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>
    </form>
</div>