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
?>
<h2 class="text-center">Edit Product</h2>
<hr>
<div class="row">
    <form action="products.php?source=add" method="post" enctype="multipart/form-data">
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
                    <input type="file" name="product-image" class="form-control">
                </div>

                <div class="img-preview">
                    <p>Image Preview</p>
                    <img src="../assets/products/<?= $productImage ?>" class="img-thumbnail" style="margin-bottom: 20px;" alt="">
                </div>

                <!-- <input type="submit" value="Add Product" class="btn btn-primary btn-lg btn-block"> -->
            </div>

            <div class="" style="border: 1.5px solid #ddd; margin-left: 20px; margin-top: 20px; padding: 14px;">
                <div class="form-group">
                    <label for="product-status">Product Status</label>
                    <select name="product-status" class="form-control">
                        <option value="">Select</option>
                        <option value="draft">draft</option>
                        <option value="public">Public</option>
                    </select>
                </div>


                <input type="submit" value="Save Changes" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>
    </form>
</div>