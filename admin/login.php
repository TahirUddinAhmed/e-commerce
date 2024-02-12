<?php
 require_once './init.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['username'];
    $password = $_POST['password'];

    // validate the form 
    $errors = array();

    if(empty($email)) {
        $errors['emptyEmail'] = "Please enter your email";
    } else if(emailExists($conn, $email) !== true) {
      $errors['userErr'] = "Email id is not registered.";
    }

    if(empty($password)) {
        $errors['Emptypass'] = "Please enter password";
    }

    

    if(empty($errors)) {
        // check password 
        $sql = "SELECT * FROM users WHERE `email` = '$email' AND `role` = 'admin'";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
            die("SOMETHING WENT WORNG" . mysqli_error($conn));
        } 

        while($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['first_name'];
            $db_pass = $row['password'];
        }

        $checkPwd = password_verify($password, $db_pass);

        if($checkPwd == true) {
          // login 
          $_SESSION['admin-id'] = $id;
          $_SESSION['first_name'] = $name;
          
          header("Location: ./index.php");
        } else {
          $passErr = "Password is incorrect";
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShopNest Admin Dashboard | Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white">
        <h3>ShopNest Admin Login</h3>
      </div>
      <div class="card-body">
        <form id="login-form" action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
              </div>
              <input type="email" class="form-control" id="username" name="username" value="<?= $email ?? null ?>">
            </div>
            <span class="text-danger"><?= $errors['emptyEmail'] ?? null ?></span>
            <span class="text-danger"><?= $errors['userErr'] ?? null ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-file-lock"></i>
              </div>
              <input type="password" class="form-control" id="password" name="password" value="<?= $password ?? null ?>">
            </div>
            <span class="text-danger"><?= $errors['Emptypass'] ?? null ?></span>
            <span class="text-danger"><?= $passErr ?? null ?></span>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember-me">
            <label for="remember-me" class="form-check-label">Remember Me</label>
          </div>
          <button type="submit" class="btn btn-primary mt-2">Login</button>
          <a href="#" class="btn btn-link mt-2">Forgot Password?</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="path/to/shopnest.js"></script>
</body>
</html>
