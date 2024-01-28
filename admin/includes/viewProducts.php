<?php
 // query to retrieve all product 
 $query = "SELECT * FROM products ORDER BY `ProductID` DESC";
 $result = mysqli_query($conn, $query);

 if(!$result) {
    die("QUERY FAILED" . mysqli_error($conn));
 }

 // delete product 
 if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // delete query 
    $delete = "DELETE FROM products WHERE ProductID = $product_id";
    $delete_result = mysqli_query($conn, $delete);

    if(!$delete_result) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        header("Location: products.php?source=view&deleted");
    }
 }

?>
<?php 
        if(isset($_GET['deleted'])) {
           
        ?>
            <div class="alert alert-danger" role="alert">
            Product is deleted successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php
            
        }
    ?>
<h2>View Products</h2>
<hr>
<div class="container-fluid" style="border: 1.7px solid #ddd; padding: 1.4rem;">
    <table id="myTable" class="table table-hover">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th scope="col">SNO</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Details</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(mysqli_num_rows($result) > 0) {
                $sno = 1;
                while($data=mysqli_fetch_assoc($result)) {
                    $productID = $data['ProductID'];
                    $productImage = $data['product-img'];
                    $productName = $data['Name'];
                    $sellingPrice = $data['Price'];
                    $originalPrice = $data['original-price'];
                    $cat_id = $data['category_id'];
                    $productQuantity = $data['StockQuantity'];
                    $status = $data['status'];
                    $added_on = $data['added_on'];
    
                    // query to get the name of category 
                    $cat_query = "SELECT * FROM category WHERE id = $cat_id";
                    $cat_result = mysqli_query($conn, $cat_query);
    
                    while($data=mysqli_fetch_assoc($cat_result)) {
                        $categoryName = $data['name'];
                    }
            ?>
    
                    <tr>
                        <td><?= $sno ?></td>
                        <td>
                            <img src="../assets/products/<?= $productImage ?>" width="100" alt="">
                        </td>
                        <td>
                            <!-- details include - name, sale price, original price, Stock Quantity -->
                            <p><strong><?= $productName ?></strong></p>
                            <p>Selling Price: <?= $sellingPrice ?></p>
                            <p>Original Price: <?= $originalPrice ?></p>
                            <p>Stock Quanity: <?= $productQuantity ?></p>
                        </td>
                        <td>
                            <?= $categoryName ?>
                        </td>
                        <td>
                            <?= $status ?>
                        </td>
                        <td>
                            <a href="?source=edit&eid=<?= $productID ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="?source=view&id=<?= $productID ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this product?')"><i class="fa-solid fa-xmark"></i></a>
                        </td>
                    </tr>
    
            <?php
                $sno++;
                }
            }
        ?>
        </tbody>
    </table>

</div>