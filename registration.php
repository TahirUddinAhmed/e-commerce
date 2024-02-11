<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join ShopNest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 col-lg-5 rounded shadow-lg p-4 bg-light">
                <h2 class="text-center mb-4">Create your account</h2>
                <form class="needs-validation" action="./includes/reg.in.php" method="POST">
                 <?php
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == 'emptyinput') {
                ?>
                        <span class="mt-2 mb-2 text-danger">All Fields are required!*</span>
                <?php
                        }
                        
                        if($_GET['error'] == 'pwdnotmatch') {
                ?>
                        <span class="mt-2 mb-2 text-danger">Password doesn't match!</span>
                <?php
                        }

                        if($_GET['error'] == 'emailExits') {
                ?>
                        <span class="mt-2 mb-2 text-danger">You have already created an account. Your email id is already exits go and login</span>
                <?php
                        }
                    }
                 ?>
                    
                <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm password</label>
                        <input type="password" name="con_password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Create account</button>
                    <p class="text-center mt-3">Already have an account? <a href="login.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="custom.js"></script>
</body>
</html>
