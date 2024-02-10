<?php include('includes/admin-header.php') ?>
<?php
 $query = "SELECT * FROM `contact` ORDER BY `contact`.`id` DESC";
 $result = mysqli_query($conn, $query);

 if(!$result) {
    die("QUERY FAILED");
 }

//  delete contact 
 if(isset($_GET['id'])) {
    $contact_id = $_GET['id'];

    // query 
    $sql = "DELETE FROM contact WHERE id = '$contact_id'";
    $del_result = mysqli_query($conn, $sql);

    if(!$del_result) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        header("Location: contact.php");
    }
 }
?>
<h2>Contact</h2>
<hr>
<div class="container-fluid">
<table id="myTable" class="table table-hover">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th scope="col">SNO</th>
                <th scope="col">Details</th>
                <th scope="col">Message / Query</th>
                <th scope="col">Contact At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
         $sno = 1;
         while($data=mysqli_fetch_assoc($result)) {
            $id = $data['id'];
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $message = $data['Message'];
            $contact_at = $data['contact_at'];
        ?>
           <tr>
            <td><?= $sno ?></td>
            <td>
                <strong><?= $first_name . " " . $last_name ?></strong>
                <p>
                    <a href="mailto: <?= $email ?>"><?= $email ?></a>
                </p>
                <p>
                    <a href="tel: <?= $phone ?>"><?= $phone ?></a>
                </p>
            </td>
            <td>
             <?= $message ?>
            </td>

            <td>
                <?= date("d M Y h:i A") ?>
            </td>
            <td>
                <a href="?id=<?= $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete?')">Delete</a>
            </td>
           </tr>
        <?php
        $sno++;
         }
        ?>
        </tbody>
    </table>
</div>

<?php include('includes/admin-footer.php'); ?>