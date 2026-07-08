<?php include('./partials/header.php') ?>
<div class="container-fluid my-3">

    <!-- TOP BUTTONS -->
    <div class="d-flex flex-wrap gap-2 mb-3">

        <button class="active btn btn-outline-primary rounded-pill">
            🚕 Active Jobs (0)
        </button>

        <button class="btn btn-outline-primary rounded-pill">
            🔍 Searching Jobs (0)
        </button>

        <button class="btn btn-outline-primary rounded-pill">
            📅 Scheduled Jobs (0)
        </button>

        <button class="btn btn-outline-primary   rounded-pill">
            🗂 Assigned_scheduled_jobs (0)
        </button>

        <button class="btn btn-outline-primary rounded-pill">
            ❌ Cancelled Jobs (0)
        </button>

        <button class="btn btn-outline-primary rounded-pill">
            ⚙️ Settings
        </button>

    </div>

    <!-- FILTERS -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

        <!-- LEFT SIDE -->
        <div class="d-flex gap-2 flex-wrap">

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    Select Admin
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Admin 1</a></li>
                    <li><a class="dropdown-item" href="#">Admin 2</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    All Data
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All</a></li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    Today
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Last Day</a></li>
                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                    <li><a class="dropdown-item" href="#">All Time</a></li>
                    <li><a class="dropdown-item" href="#">Custom Date</a></li>
                </ul>
            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                All Services
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">All Services</a></li>
                <li><a class="dropdown-item" href="#">Economy</a></li>
                <li><a class="dropdown-item" href="#">Taxi 1-4</a></li>
                <li><a class="dropdown-item" href="#">Rikshaw</a></li>
                <li><a class="dropdown-item" href="#">Sharing Ride</a></li>
                <li><a class="dropdown-item" href="#">Battery Jump Start </a></li>
                <li><a class="dropdown-item" href="#">Class1-light-duty</a></li>
            </ul>
        </div>

    </div>

    <!-- ACTION BUTTONS -->
    <div class="d-flex gap-2">

        <button class="btn btn-primary">
            Add +
        </button>

        <button class="btn btn-success">
            Reload Data 🔄
        </button>

    </div>

</div>






<div class="card">
    <div class="card-body">
        <div class="row">
    <div class="col-lg-4">
        <h3>JOBS</h3>
        <span><input  type="text" class="form-control mb-4" placeholder="Search location..."></span>
         <div class="auth-logo">
        <div class='logo-light'>
            <img src="assets/images/nojob-dark.png" height="300px" width="" alt="">

        </div>
         <div class='logo-dark'>
            <img src="assets/images/nojob-light.jpeg" height="300px" width="" alt="">

        </div>
        </div>

    </div>
    
    <div class="card-body col-lg-8" style="height: 850px;">
        
        <input id="searchInput" type="text" class="form-control mb-4" placeholder="Search location...">
        <div id="gmaps-basic" class="gmaps" style="position: relative; overflow: hidden;">
            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                
                    
                    <div class="gm-err-content " >
                        <div class="gm-err-icon"><a href="https://www.google.com/maps" target="_blank"></a></div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<?php include('./partials/footer.php') ?>