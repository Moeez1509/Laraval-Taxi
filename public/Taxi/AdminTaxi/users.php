<?php include('./partials/header.php') ?>
<?php include('./config/connect.php') ?>
<div class="container-fluid my-3">

    <!-- TOP BUTTONS -->
    <div class="d-flex flex-wrap gap-2 mb-3">

        <button class="btn btn-primary rounded-pill">
            
            All Users
        </button>

        <button class="btn btn-outline-primary rounded-pill">
        <i class="fa-solid fa-circle-check"></i>    
        Active Users
        </button>

        <button class="btn btn-outline-primary rounded-pill">
        <i class="fa-solid fa-circle-xmark"></i>    
        Disable Users
        </button>


    </div>
    
    <!-- FILTERS -->
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
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>DOB</th>
                                                    <th>Created At</th>
                                                    <th>role</th>
                                                    <th>Action</th>
                                                    <th>Image</th>
                                                </tr>
                                                <?php
                                                $sql = "SELECT * FROM users WHERE LOWER(role) = 'passenger' OR LOWER(role) = 'driver'";
                                                $result = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($data = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $data['id'] . "</td>";
                                                        echo "<td>" . $data['name'] . "</td>";
                                                        echo "<td>" . $data['email'] . "</td>";
                                                        echo "<td>" . $data['phone'] . "</td>";
                                                        echo "<td>" . $data['address'] . "</td>";
                                                        echo "<td>" . $data['DOB'] . "</td>";
                                                        echo "<td>" . $data['created_at'] . "</td>";
                                                       echo "<td>" . $data['role'] . "</td>";
                                                        echo "<td><a href='blockuser.php?id=" . $data['id'] . "' class='btn btn-sm btn-primary'>Block</a></td>";
                                                        echo "<td><img src='" . $data['profile_image'] . "' alt='User Image' width='50'></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='10'>No users found.</td></tr>";
                                                }
                                                ?>
                                            </div>
                                            </thead>

                                            
                                                </table>

                                                
                        </div>


    <?php include('./partials/footer.php') ?>
