<?php include('includes/admin-header.php') ?>
<?php
// ADD category form 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grab the input field
    $category = $_POST['categoryName'];

    // validate the form 
    if(empty($category)) {
        $catErr = "Category Name is required!";
    } else {
        $category = mysqli_real_escape_string($conn, $category);

        // insert into the db
        $query = "INSERT INTO `category` (`name`, `added_on`) VALUES ('$category', CURRENT_TIMESTAMP())";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("QUERY FAILED" . mysqli_errno($conn));
        } else {
            // reload the page 
            header("Location: categories.php");
        }
    }

}


// query to retrieve all categories 
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("QUERY FAILED: " . mysqli_error($conn));
}
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Category
            <!-- <small></small> -->
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <div style="width: 80%; padding: 0.5rem 2rem; margin: 10px 0; border: 1.7px solid #dbdbdb;">
                    <h4>Add Category</h4>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="mb-3">
                            <label for="categoryname">Category Name</label>
                            <input type="text" name="categoryName" class="form-control">
                            <span class="text-danger"><?= $catErr ?? null ?></span>
                        </div>
                        <div style="margin-top: 5px;">
                            <input type="submit" value="Add Category" class="btn btn-primary mt-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div style="margin-top: 3rem; border: 1.7px solid #dbdbdb;">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="table-dark">
                        <th scope="col">SNO</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">No. of Products</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php include('includes/admin-footer.php'); ?>