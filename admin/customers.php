<?php include('includes/admin-header.php') ?>
<?php
    $customers = get_customers($conn);

    // delete user 
    if(isset($_GET['uid'])) {
        $uid = $_GET['uid'];

        // delete query 
        $delete = "DELETE FROM users WHERE `id` = $uid";
        $result = mysqli_query($conn, $delete);

        if(!$result) {
            die("QUERY FAILED" . mysqli_error($conn));
        } else {
            // refresh the page 
            header("Location: customers.php");
        }
    }
?>
<!-- Page Heading -->
<div class="row">
    <h2>Customer Managements</h2>
    <hr>

    <div class="container-fluid">
    <table id="myTable" class="table table-hover">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th scope="col">SNO</th>
                <th scope="col">Details</th>
                <th scope="col">Address</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
          $sno = 1;
            foreach ($customers as $customer) {
        ?>
            <tr>
                <td><?= $sno ?></td>
                <td>
                    <p>
                        <strong><?= $customer['first_name'] . " " . $customer['last_name'] ?></strong>
                        <p><strong class="text-muted">Email</strong>: <a href="mailto: <?= $customer['email'] ?>"><?= $customer['email'] ?></a></p>
                        <p><strong class="text-muted">Phone</strong>: <a href="tel: <?= $customer['phone'] ?>"><?= $customer['phone'] ?></a></p>
                    </p>
                </td>
                <td>

                
                    <p>
                        <p><strong>Address</strong>: <?= $customer['address'] ?></p>
                        <p><strong>Pincode</strong>: <?= $customer['pincode'] ?></p>
                    </p>
                </td>

                <td>

                
                    <p>
                        <?= date("d m Y h:i: A", strtotime($customer['created_at']));
; ?>
                    </p>
                </td>

                <td>
                    <p>
                        <a href="?uid=<?= $customer['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this user?')">delete</a>
                        <!-- <a href="del">edit</a> -->
                    </p>
                </td>
            </tr>

        <?php
          $sno++;
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php include('includes/admin-footer.php'); ?>
