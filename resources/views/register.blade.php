<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - Quick Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid vh-100 d-flex align-items-center">
    <div class="col-md-6 d-none d-md-block px-5">
        <h1 class="fw-bold">Join Quick Ride</h1>
        <p class="text-muted">
            Create your account to start booking rides or become a driver and earn.
        </p>
        <img src="{{ asset('Taxi/assets/img/login bgimg.png') }}" class="img-fluid mt-4" alt="">
    </div>

    <div class="col-md-6">
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 450px;">
            <h3 class="mb-3 text-center">Create Account</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Email" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Phone">
                    </div>
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                        <input type="password" name="password" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Password" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="input-group bg-light mb-3 rounded-pill px-2 py-2">
                        <input type="password" name="password_confirmation" class="form-control border-0 bg-transparent shadow-none" placeholder="Confirm Password" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Register As</label>
                    <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                        <div class="input-group bg-light rounded-pill px-2 py-2">
                            <select name="role" class="form-control border-0 bg-transparent shadow-none" required>
                                <option value="passenger" @selected(old('role') === 'passenger')>Passenger</option>
                                <option value="driver" @selected(old('role') === 'driver')>Driver</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary w-100" name="signup">Sign Up</button>

                <p class="text-center mt-3">
                    Already have an account?
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
