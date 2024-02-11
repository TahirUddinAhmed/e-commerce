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
            <div class="col-md-6 col-lg-5 rounded shadow-lg p-4 bg-light">
                <h2 class="text-center mb-4">Welcome to ShopNest</h2>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Email address or username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your email or username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
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
