<?php
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/config/connect.php';

$sql = "SELECT * FROM booking_requests ORDER BY id ASC";
$result = mysqli_query($con, $sql);
?>
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

        <button class="btn btn-outline-primary rounded-pill">
        <i class="fa-solid fa-circle-xmark"></i>    
        Cancelled Bookings
        </button>

        <button class="btn btn-outline-primary rounded-pill">
            &#9881; Settings
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

       
    </div>

</div>


<div class="table-responsive">
    <div class="card p-3">
        <table class="table table-centered table-striped table-nowrap mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Request Type</th>
                    <th>Service Type</th>
                    <th>Pickup Address</th>
                    <th>DropOff Address</th>
                    <th>Schedule Pickup Time</th>
                    <th>Booking Created At</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result === false) {
                    $dbErr = htmlspecialchars((string)mysqli_error($con), ENT_QUOTES, 'UTF-8');
                    echo "<tr><td colspan='11' class='text-center text-danger'>DB error: {$dbErr}</td></tr>";
                } elseif (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = (int)($row['id'] ?? 0);
                        $name = htmlspecialchars((string)($row['name'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $phone = htmlspecialchars((string)($row['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $requestType = htmlspecialchars((string)($row['request_type'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $serviceType = htmlspecialchars((string)($row['service_type'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $pickupAddress = htmlspecialchars((string)($row['pickup_address'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $dropoffAddress = htmlspecialchars((string)($row['dropoff_address'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $schedulePickupTime = htmlspecialchars((string)($row['schedule_pickup_time'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $createdAt = htmlspecialchars((string)($row['created_at'] ?? ''), ENT_QUOTES, 'UTF-8');
                        $finalFare = htmlspecialchars((string)($row['final_fare'] ?? ''), ENT_QUOTES, 'UTF-8');

                        echo "<tr>
                            <td>{$id}</td>
                            <td>{$name}</td>
                            <td>{$phone}</td>
                            <td>{$requestType}</td>
                            <td>{$serviceType}</td>
                            <td class='text-truncate' style='max-width: 150px;' title='{$pickupAddress}'>{$pickupAddress}</td>
                            <td class='text-truncate' style='max-width: 150px;' title='{$dropoffAddress}'>{$dropoffAddress}</td>
                            <td class='text-truncate' style='max-width: 150px;' title='{$schedulePickupTime}'>{$schedulePickupTime}</td>
                            <td>{$createdAt}</td>
                            <td>{$finalFare}</td>
                            <td><a href='booking-request-details.php?id={$id}' class='btn btn-sm btn-primary'>View Details</a></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11' class='text-center'>No booking requests found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
