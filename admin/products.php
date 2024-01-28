<?php include('includes/admin-header.php') ?>

<!-- Page Heading -->
<div class="row">
    <?php
        if(isset($_GET['source'])) {
            $source = $_GET['source'];
        } else {
            $source = '';
        }

        switch($source) {
            case 'add': 
                include('includes/addProducts.php');
                break;
            case 'edit':
                include('includes/editProduct.php');
                break;
            default: 
                include('includes/viewProducts.php');
        }
    ?>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php include('includes/admin-footer.php'); ?>
