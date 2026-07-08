<?php
session_start();
include('./config/connect.php');

$error = null;

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM `users` WHERE email = '$email'  AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        session_regenerate_id(true);
        $_SESSION['uid'] = $data['id'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['name'] = $data['name']; // Store name in session for greeting

        header('Location: index.php');
        exit;
    }

    $error = 'Invalid email or password!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Quick Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid vh-100 d-flex align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-md-6 d-none d-md-block px-5">
            <h1 class="fw-bold">Welcome Back 👋</h1>
            <p class="text-muted">
                Login to continue your journey with Quick Ride. Book rides, track drivers, and travel safely.
            </p>
            <img src="assets/img/login bgimg.png" class="img-fluid mt-4" alt="">
        </div>

        <!-- RIGHT SIDE (FORM) -->
        <div class="col-md-6">
            <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
                <h3 class="mb-3 text-center">Login</h3>

                <?php if ($error): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <form action="login.php" method="post">

                     <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
             
              <input type="email" name="email" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Email">
            </div>
          </div>
             <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
             
              <input type="password" name="password" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Password">
            </div>
          </div>
                    
                    <button class="btn btn-primary w-100" name="login">Login</button>

                    <p class="text-center mt-3">
                        Don’t have an account?
                        <a href="signup.php">Sign Up</a>
                    </p>

                </form>
            </div>
        </div>

    </div>

</body>

</html>
