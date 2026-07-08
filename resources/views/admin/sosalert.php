<?php include __DIR__ . '/partials/header.php'; ?>
<div class="container-fluid my-3">

    <!-- TOP BUTTONS -->
    <div class="d-flex flex-wrap gap-2 mb-3">

        <button class="btn btn-primary rounded-pill">
            <i class="fa-solid fa-calendar-plus"></i>
            New Bookings
        </button>

        <button class="btn btn-outline-primary rounded-pill">
        <i class="fa-solid fa-circle-check"></i>    
        Confirmed Bookings
        </button>

    </div>
    
    <!-- FILTERS -->
    <!-- ACTION BUTTONS -->
   <div class="d-flex gap-2">

       <button class="btn btn-primary">
           Add +
       </button>

       <button class="btn btn-success">
           Reload Data 🔄
       </button>

   </div>
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        
        <!-- LEFT SIDE -->
        <div class="d-flex gap-2 flex-wrap">
            
            <!-- LIMIT -->
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    10
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">10</a></li>
                    <li><a class="dropdown-item" href="#">25</a></li>
                    <li><a class="dropdown-item" href="#">50</a></li>
                    <li><a class="dropdown-item" href="#">100</a></li>
                </ul>
            </div>

            <!-- DATE -->
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

        <!-- RIGHT SIDE (SEARCH) -->
        <div style="min-width: 250px;">
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search by date, name, email">
            </div>
        </div>

    </div>

</div>


<div class="table-responsive">
                                          <div class="card p-3 ">
                                        <table class="table table-centered table-striped table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Service Type</th>
                                                    <th>Pickup Address</th>
                                                    <th>DropOff Address</th>
                                                    <th>Schedule Pickup Time</th>
                                                    <th>Booking Created At</th>
                                                    <th>Total Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </div>
                                            </thead>

                                            
                                                </table>

                                                
                        </div>


    <?php include __DIR__ . '/partials/footer.php'; ?>