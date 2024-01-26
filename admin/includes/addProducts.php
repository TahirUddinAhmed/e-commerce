<h2>Add Products</h2>
<hr>

<div class="row">
    <form action="" method="post">
        <div class="col-lg-7" style="border: 1.5px solid #ddd; margin-left: 20px; padding: 14px;">
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
                <option value="">Choose Category</option>
                <option value="">Choose Category</option>
                <option value="">Choose Category</option>
                <option value="">Choose Category</option>
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
                <label for="Visibility">Product Status</label>
                <select name="visibility" class="form-control">
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