<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Quick Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid vh-100 d-flex align-items-center">
        <div class="col-md-6 d-none d-md-block px-5">
            <h1 class="fw-bold">Welcome Back</h1>
            <p class="text-muted">
                Login to continue your journey with Quick Ride. Book rides, track drivers, and travel safely.
            </p>
            <img src="<?php echo e(asset('Taxi/assets/img/login bgimg.png')); ?>" class="img-fluid mt-4" alt="">
        </div>

        <div class="col-md-6">
            <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
                <h3 class="mb-3 text-center">Login</h3>

                <?php if ($errors->any()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($errors->first()); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('login')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                        <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Email" required autofocus>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                        <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                            <input type="password" name="password" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Password" required>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100" name="login">Login</button>

                    <p class="text-center mt-3">
                        Don't have an account?
                        <a href="<?php echo e(route('register')); ?>">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
