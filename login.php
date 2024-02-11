<!-- include db -->
<?php
 require_once './config/database.php';
 require_once './functions.php';
?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $passsword = $_POST['password'];

    $error = array(); 
    if(empty($email)) {
        $error['emptyEmail'] = "Email is required!";
    } 
    if(empty($passsword)) {
        $error['emptyPass'] = "Password is required!";
    }

    // check if email is exits or not 
    if(emailExitst($conn, $email) !== true) {
        $error['errEmail'] = 'Email is not exist. Please create an account';
    }

    if(empty($error)) {
        // match the password 
        $sql = "SELECT * FROM users WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
            die("SOMETHING WENT WORNG" . mysqli_error($conn));
        } 

        while($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $db_pass = $row['password'];
        }

        $checkPwd = password_verify($passsword, $db_pass);

        if($checkPwd == true) {
            // redirect to the home page and store details in sessions
            $_SESSION['uid'] = $id;

            header("Location: ./index.php");
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to ShopNest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container py-5">
        
        <div class="row d-flex align-items-center justify-content-center">
        <?php
            if(isset($_GET['created'])) {
        ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Your account has been created successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            }
        ?>
            <div class="col-md-6 col-lg-5 rounded shadow-lg p-4 bg-light">
                <h2 class="text-center mb-4">Welcome to ShopNest</h2>
                <form class="needs-validation" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email or username" value="<?= $email ?? null ?>">
                        <span class="text-danger"><?= $error['emptyEmail'] ?? null ?></span>
                        <span class="text-danger"><?= $error['errEmail'] ?? null ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="<?= $password ?? null ?>">
                        <span class="text-danger"><?= $error['emptyPass'] ?? null ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    <p class="text-center mt-3">
                        
                        New to ShopNest? <a href="registration.php">Create an account</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="custom.js"></script>
</body>
</html>
