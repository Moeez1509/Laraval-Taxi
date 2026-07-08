@extends('maindesign')
@section('profile')
<!-- RIGHT SIDE (FORM) -->
 <br><br><br>

 <div class="container my-5 px-4 d-flex justify-content-center">
        <div class="col-md-6" >
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 450px;">
            <h3 class="mb-3 text-center ">Gernal Information</h3>

            <form action="profile_update.php" method="post" enctype="multipart/form-data">
                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-address-book"></i>
              </span>
              <input type="text" name="name" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Name">
            </div>
          </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-envelope"></i>
              </span>
                <input type="email" name="email" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Email">
            </div>
          </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-phone"></i>
                </span>
                <input type="text" name="phone" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Phone">
            </div>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
                <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" name="password" class="form-control border-0 bg-transparent shadow-none" placeholder="Enter Password">
            </div>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
                <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-user"></i>
                </span>
                <input type="file" name="profile_pic" accept="image/*" class="form-control border-0 bg-transparent shadow-none">
            </div>
            </div>


                <button class="btn btn-primary w-100" name="update_profile">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection('profile')
