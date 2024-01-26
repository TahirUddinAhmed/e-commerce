<?php include('includes/admin-header.php') ?>
<?php
// ADD category form 
$catErr = "";
if (isset($_POST['addCat'])) {
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

// Delete category item 
if(isset($_GET['id'])) {
  $cat_id = $_GET['id'];

  // query to delete a category 
  $del_query = "DELETE FROM category WHERE id = $cat_id";
  $del_result = mysqli_query($conn, $del_query);

  if(!$del_result) {
    die("QUERY FAILED" . mysqli_error($conn));
  } else {
    header("location: categories.php?del=success");
  }
}

// edit category 
if(isset($_POST['editCategory'])) {
    // grab the name 
    $cat_id = $_POST['cat_id'];
    $cat_name = mysqli_real_escape_string($conn, $_POST['categoryName']);

    // validate 
    if(empty($cat_name)) {
        $editCatErr = "Category Name is required!";
    } else {
        // update query 
        $update_query = "UPDATE `category` SET `name` = '$cat_name' WHERE `category`.`id` = $cat_id;";
        $update_result = mysqli_query($conn, $update_query);

        if(!$update_result) {
            die("Update QUERY FAILED: " . mysqli_error($conn));
        } else {
            header("location: categories.php?edited");
        }
    }
}

// query to retrieve all categories 
$query = "SELECT * FROM category ORDER BY `category`.`id` DESC";
$cat_result = mysqli_query($conn, $query);

if (!$cat_result) {
    die("QUERY FAILED: " . mysqli_error($conn));
}
$no_of_cat = mysqli_num_rows($cat_result);

?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
    <?php 
        if(isset($_GET['del'])) {
            if($_GET['del'] == 'success') {
        ?>
            <div class="alert alert-danger" role="alert">
            Category deleted!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php
            }
        }
    ?>
    <!-- edit success alert -->
    <?php 
        if(isset($_GET['edited'])) {
           
        ?>
            <div class="alert alert-success" role="alert">
            Category Edited Successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php
            
        }
    ?>
    
        <h1 class="page-header">
            Category
            <!-- <small></small> -->
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <div style="width: 80%; margin: 0 auto; padding: 0.5rem 2rem; margin: 10px 0; border: 1.7px solid #dbdbdb;">
                    <h4>Add Category</h4>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="mb-3">
                            <label for="categoryname">Category Name</label>
                            <input type="text" name="categoryName" class="form-control">
                            <span class="text-danger"><?= $catErr ?? null ?></span>
                        </div>
                        <div style="margin-top: 5px;">
                            <input type="submit" name="addCat" value="Add Category" class="btn btn-primary mt-2">
                        </div>
                    </form>
                </div>
            </div>
            <?php
                if(isset($_GET['eid'])) {
                    // edit category item 

                    $the_id = $_GET['eid'];

                    // query to retrieve the category info 
                    $query = "SELECT * FROM category WHERE id = $the_id";
                    $result = mysqli_query($conn, $query);

                    if(!$result) {
                        die("QUERY FAILED" . mysqli_error($conn));
                    }

                    while($data=mysqli_fetch_assoc($result)) {
                        $name = $data['name'];
                    }

            ?>

                <div class="col-lg-6">
                    <div style="width: 80%; margin: 0 auto; padding: 0.5rem 2rem; margin: 10px 0; border: 1.7px solid #dbdbdb;">
                        <h4>Edit Category</h4>
                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="hidden" name="cat_id" value="<?= $the_id ?>">
                                <label for="categoryname">Category Name</label>
                                <input type="text" name="categoryName" value="<?= $name ?? null ?>" class="form-control">
                                <span class="text-danger"><?= $editCatErr ?? null ?></span>
                            </div>
                            <div style="margin-top: 5px;">
                                <input type="submit" name="editCategory" value="Edit Category" class="btn btn-success mt-2">
                            </div>
                        </form>
                    </div>
                </div>

            <?php
                }

            ?>
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
                    <?php
                        if($no_of_cat > 0) {
                            $sno = 1;
                            while($data = mysqli_fetch_assoc($cat_result)) {
                                $catID = $data['id'];
                                $catName = $data['name'];
                    ?>
                    <tr>
                        <th scope="row"><?= $sno ?></th>
                        <td><?= $catName ?></td>
                        <td>0</td>
                        <td>
                            <!-- delete and edit category -->
                            <a href="?id=<?= $catID ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this category?');"><i class="fa-solid fa-trash"></i></a>
                            <a href="?eid=<?= $catID ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
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

    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php include('includes/admin-footer.php'); ?>