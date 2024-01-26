<?php
//  add product 
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grab all the input fields
    $productName = mysqli_real_escape_string($conn, $_POST['product-name']);
    $sellingPrice = mysqli_real_escape_string($conn, $_POST['product-price']);
    $originalPrice = mysqli_real_escape_string($conn, $_POST['original-price']);
    $productCategory = mysqli_real_escape_string($conn, $_POST['product-category']);
    $productDesc = mysqli_real_escape_string($conn, $_POST['product-desc']);
    $productStatus = mysqli_real_escape_string($conn, $_POST['product-status']);
    
    // validate the form 
    if(empty($productName) || empty($sellingPrice) || empty($originalPrice) || empty($productCategory) || empty($productDesc) || empty($productStatus)) {
        $formErr = "All fields are required";
    }
    
 }


 // query to retrieve all categories 
 $query = "SELECT * FROM category";
 $category_result = mysqli_query($conn, $query);

 if(!$category_result) {
    die("QUERY FAILED" . mysqli_error($conn));
 }


?>
<h2>Add Products</h2>
<hr>

<div class="row">
    <form action="products.php?source=add" method="post">
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
                if(mysqli_num_rows($category_result) > 0) {
                    while($data = mysqli_fetch_assoc($category_result)) {
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
            <label for="product-img">Product Image</label>
            <input type="file" name="product-image" class="form-control">
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

            <div class="img-preview"> 
                <p>Image Preview</p>
                <img src="../assets/products/2.png" class="img-thumbnail" style="margin-bottom: 20px;" alt="">
            </div>

            <input type="submit" value="Add Product" class="btn btn-primary btn-lg btn-block">
         </div>
        </div>
    </form>
</div>