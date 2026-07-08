<?php include('./config/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - Quick Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid vh-100 d-flex align-items-center" >
    
    <!-- LEFT SIDE -->
    <div class="col-md-6 d-none d-md-block px-5">
        <h1 class="fw-bold">Join Quick Ride 🚀</h1>
        <p class="text-muted">
            Create your account to start booking rides or become a driver and earn.
        </p>
        <img src="assets/img/login bgimg.png" class="img-fluid mt-4" alt="">
    </div>
    
    <!-- RIGHT SIDE (FORM) -->
    
    <div class="col-md-6"  >
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 450px;">
            <h3 class="mb-3 text-center ">Create Account</h3>

            <form action="signup.php" method="post">

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
             
              <input type="text" name="name" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Name">
            </div>
          </div>
             <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
              
              <input type="email" name="email" class="form-control  border-0 bg-transparent shadow-none" placeholder="Enter Email">
            </div>
          </div>
                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
              
              <input type="text" name="phone" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Phone">
            </div>
          </div>

                 <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
              
              <input type="password" name="password" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Password">
            </div>
          </div>

                <div class="mb-3">
                    <label>Register As</label>
                     <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-address-book"></i>
              </span>
              
              <select name="role" class="form-control border-0 bg-transparent shadow-none" required>
                  <option value="passenger">Passenger</option>
                  <option value="driver">Driver</option>
              </select>
            </div>
          </div>
                </div>

                <button class="btn btn-primary w-100" name="signup">Sign Up</button>

                <p class="text-center mt-3">
                    Already have an account? 
                    <a href="login.php">Login</a>
                </p>

            </form>
        </div>
    </div>

</div>

</body>
</html>

<?php
if(isset($_POST['signup'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $sql = "INSERT INTO users (name, email, phone, password, role) VALUES ('$name', '$email', '$phone', '$password', '$role')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Signup successful! Please login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
}   
?>