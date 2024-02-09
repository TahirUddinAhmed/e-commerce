<?php require_once 'includes/header.php' ?>
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = check_input($_POST['firstName']);
    $last_name = check_input($_POST['lastName']);
    $email = check_input($_POST['email']);
    $phone = check_input($_POST['phone']);
    $query = check_input($_POST['message']);

    // validate the form 
    $errors = []; // initializing an empty array 

    if(empty($first_name)) {
        $errors['emptyFirstName'] = "First Name is required*";
    }

    if(empty($last_name)) {
        $errors['emptyLastName'] = "Last name is required*";
    }

    if(empty($email)) {
        $errors['emptyEmail'] = "Email is required*";
    }

    if(empty($phone)) {
        $errors['emptyPhone'] = "Phone number is required*";
    }

    if(empty($query)) {
        $errors['emptyQuery'] = "Please write your query*";
    }

    if(empty($errors)) {
        // insert the data into db 
        $query = "INSERT INTO `contact` (`first_name`, `last_name`, `email`, `phone`, `Message`, `contact_at`) VALUES ('$first_name', '$last_name', '$email', '$phone', '$query', current_timestamp());";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("something went wrong: " . mysqli_error($conn));
        } else {
            $_SESSION['contactName'] = $first_name;
            header("Location: contact.php?submitted");
        }
    }
 }
?>



<div class="mb-4" style="width: 100%; height: 150px; 
  color: black;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  ">
    <h2>Contact Us</h2>
    <p>We're Here to Help!</p>
</div>

<div class="container mb-5">

<?php
 if(isset($_GET['submitted'])) {
?>
<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
  <strong>Hello <?= $_SESSION['contactName'] ?? null ?></strong>, thank you for submitting you query, we will contact you soon
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
 }
?>


    <div class="row Contact border">
        <div class="col-lg-5 color-secondary-bg text-white p-4">
            <div class="address">
                <h3 class="font-rale m-0">Address</h3>
                <p class="font-rale">We're open for any suggestion or just to have a chat.</p>
                
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-location-dot"></i>
                  <p class="ms-3 mt-3 font-16">Morigaon Assam, Near Morigaon College, 782105</p>
                </div>
                
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-phone"></i>
                  <p class="ms-3 mt-3">Phone: <a href="tel: 9365910717">9365910717</a></p>
                </div>
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-envelope"></i>
                  <p class="ms-3 mt-3">Email: <a href="mailto: 01tahirahmed@gmail.com">01tahirahmed@gmail.com</a></p>
                </div>
                

            </div>
        </div>
        <div class="col-lg-7 contactForm">
        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="text" name="firstName" class="form-control font-rubik" placeholder="Enter FirstName...">
                        <span class="text-danger font-rubik font-14"><?= $errors['emptyFirstName'] ?? null ?></span>
                        
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="text" name="lastName" class="form-control font-rubik" placeholder="Enter LastName...">
                        <span class="text-danger font-rubik font-14"><?= $errors['emptyLastName'] ?? null ?></span>
                    </div>     
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="phone" name="phone" class="form-control font-rubik" placeholder="Enter Phone...">
                        <span class="text-danger font-rubik font-14"><?= $errors['emptyPhone'] ?? null ?></span>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control font-rubik" placeholder="Enter Email...">
                        <span class="text-danger font-rubik font-14"><?= $errors['emptyEmail'] ?? null ?></span>
                    </div>     
                </div>
            </div>
            <mb class="mb-2">
                <textarea name="message" rows="5" class="form-control font-rubik" placeholder="Write your query..."></textarea>
                <span class="text-danger font-rubik font-14"><?= $errors['emptyQuery'] ?? null ?></span>
            </mb>

            <button type="submit" class="contactBtn btn btn-primary mt-3">Contact Us</button>
        </form>
        </div>
    </div>
    
</div>
<?php require_once 'includes/footer.php' ?>