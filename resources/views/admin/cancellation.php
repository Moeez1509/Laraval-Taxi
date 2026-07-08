<?php include __DIR__ . '/partials/header.php'; ?>
<div class="container-fluid py-4 bg-light">

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <!-- Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

                <h2 class="fw-bold text-dark mb-0">
                    Cancelled
                </h2>

                <div class="d-flex flex-wrap gap-3">

                    <!-- Entries -->
                    <select class="form-select rounded-pill border-0 bg-light shadow-sm px-4"
                            style="width:120px;">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>

                    <!-- Search -->
                    <div class="input-group rounded-pill shadow-sm overflow-hidden"
                         style="width:320px;">
                        <span class="input-group-text border-0 bg-light px-4">
                            <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                        </span>
                        <input type="text"
                               class="form-control border-0 bg-light shadow-none"
                               placeholder="Search reviews">
                    </div>

                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead>
                        <tr class="table-light">
                            <th class="py-3 px-4 rounded-start-4">ID</th>
                            <th class="py-3">Request ID</th>
                            <th class="py-3">User Name</th>
                            <th class="py-3">Provider Name</th>
                            <th class="py-3">Service Name</th>
                            <th class="py-3">Payment Mode</th>
                            <th class="py-3">Status</th>
                            <th class="py-3 ">Cancelled By</th>
                            <th class="py-3 rounded-end-4">Cancelled Date & Time</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4">1</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>

                        <tr>
                            <td class="px-4">2</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4">3</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4">4</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4">5</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4">6</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4">7</td>
                            <td>1419</td>
                            <td>misses Rose</td>
                            <td>Leo</td>
                            <td>Economy</td>
                            <td>CASH</td>
                            <td>Cancellled-I Have an emergency</td>
                            <td>User</td>
                            <td>Wed, 8 Apr, 2026 12:34 PM</td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <!-- Footer -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4">

                <div class="text-muted">
                    Showing 1 to 10 of 371 Records
                </div>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination pagination-sm mb-0">

                        <li class="page-item disabled">
                            <a class="page-link rounded-pill border-0 bg-light text-secondary px-3"
                               href="#">
                                Previous
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link rounded-pill border-0 text-white px-3 mx-1"
                               href="#"
                               style="background-color:#efc56a;">
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-pill border-0 bg-light text-dark px-3 mx-1"
                               href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-pill border-0 bg-light text-dark px-3 mx-1"
                               href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-pill border-0 bg-light text-dark px-3 mx-1"
                               href="#">
                                Next
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>
    </div>

</div>
<?php include __DIR__ . '/partials/footer.php'; ?>