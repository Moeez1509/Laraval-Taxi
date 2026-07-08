<?php
include __DIR__ . '/partials/header.php';
?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['user', 'provider']) ? $_GET['tab'] : 'user';
?>
<br>

<div class="border rounded-4 shadow-sm ">

            <div class="d-flex justify-content-start mb-1">
                <div class=" rounded-pill shadow-sm p-1 d-inline-flex gap-1">
                    <a href="?tab=user"
                       class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'user' ? 'text-white' : 'text-dark'; ?>"
                       style="background-color: <?php echo $currentTab === 'user' ? '#435ee6' : 'transparent'; ?>;">
                        Users
                    </a>

                    <a href="?tab=provider"
                       class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'provider' ? 'text-white' : 'text-dark'; ?>"
                       style="background-color: <?php echo $currentTab === 'provider' ? '#435ee6' : 'transparent'; ?>;">
                        Providers
                    </a>
                </div>
            </div>
            </div>
            


            <div class=" border rounded-4 shadow-sm p-4 p-md-5">

                <?php if ($currentTab === 'user'): ?>

    <!-- Send Notification Card -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4 p-md-5">

            <h3 class="fw-bold text-dark mb-5">
                Send Push Notification To User Application
            </h3>

            <form>
                <div class="row g-4">

                    <!-- Title -->
                    <div class="col-lg-7">
                        <label class="form-label fw-semibold fs-5 mb-3 fw-bold">
                            Title
                        </label>

                        <input type="text"
                               class="form-control form-control-lg border-0 bg-light rounded-5 px-4 py-4 shadow-sm"
                               placeholder="Enter notification title">
                    </div>

                    <!-- Message -->
                    <div class="col-lg-7">
                        <label class="form-label fw-semibold fs-5 mb-3 fw-bold">
                            Message
                        </label>

                        <textarea rows="5"
                                  class="form-control border-0 bg-light rounded-5 px-4 py-4 shadow-sm"
                                  placeholder="Write notification message..."></textarea>
                    </div>

                </div>

                <!-- Button -->
                <div class="mt-4">
                    <button type="submit"
                            class="btn text-white fw-semibold px-5 py-3 rounded-pill border-0 shadow-sm bg-primary"
                            >
                        <i class="fa-solid fa-paper-plane me-2"></i>
                        Send Notification
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- History Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <!-- Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <h3 class="fw-bold text-dark mb-0">
                    Push Notification History - User
                </h3>

                <div class="d-flex flex-wrap gap-3">

                    <!-- Entries -->
                    <select class="form-select rounded-pill px-4 shadow-sm border-0 bg-light"
                            style="width: 120px;">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>

                    <!-- Search -->
                    <div class="input-group shadow-sm rounded-pill overflow-hidden"
                         style="width: 320px;">
                        <span class="input-group-text bg-light border-0 px-4">
                            <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                        </span>
                        <input type="text"
                               class="form-control bg-light border-0 shadow-none"
                               placeholder="Search notifications">
                    </div>

                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="table-light">
                            <th class="py-3 px-4 rounded-start-4">ID</th>
                            <th class="py-3">Title</th>
                            <th class="py-3 rounded-end-4">Message</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="px-4">1</td>
                            <td>Booking request confirmed</td>
                            <td>Payment received. Your booking is confirmed now.</td>
                        </tr>

                        <tr>
                            <td class="px-4">2</td>
                            <td>Good Morning</td>
                            <td>Enjoy Ride</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

                <?php else: ?>

                 

    <!-- Send Notification Card -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4 p-md-5">

            <h3 class="fw-bold text-dark mb-5">
                Send Push Notification To User Application
            </h3>

            <form>
                <div class="row g-4">

                    <!-- Title -->
                    <div class="col-lg-7">
                        <label class="form-label fw-semibold fs-5 mb-3 fw-bold">
                            Title
                        </label>

                        <input type="text"
                               class="form-control form-control-lg border-0 bg-light rounded-5 px-4 py-4 shadow-sm"
                               placeholder="Enter notification title">
                    </div>

                    <!-- Message -->
                    <div class="col-lg-7">
                        <label class="form-label fw-semibold fs-5 mb-3 fw-bold">
                            Message
                        </label>

                        <textarea rows="5"
                                  class="form-control border-0 bg-light rounded-5 px-4 py-4 shadow-sm"
                                  placeholder="Write notification message..."></textarea>
                    </div>

                </div>

                <!-- Button -->
                <div class="mt-4">
                    <button type="submit"
                            class="btn text-white fw-semibold px-5 py-3 rounded-pill border-0 shadow-sm bg-primary"
                            >
                        <i class="fa-solid fa-paper-plane me-2"></i>
                        Send Notification
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- History Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <!-- Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <h3 class="fw-bold text-dark mb-0">
                    Push Notification History - Provider
                </h3>

                <div class="d-flex flex-wrap gap-3">

                    <!-- Entries -->
                    <select class="form-select rounded-pill px-4 shadow-sm border-0 bg-light"
                            style="width: 120px;">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>

                    <!-- Search -->
                    <div class="input-group shadow-sm rounded-pill overflow-hidden"
                         style="width: 320px;">
                        <span class="input-group-text bg-light border-0 px-4">
                            <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                        </span>
                        <input type="text"
                               class="form-control bg-light border-0 shadow-none"
                               placeholder="Search notifications">
                    </div>

                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="table-light">
                            <th class="py-3 px-4 rounded-start-4">ID</th>
                            <th class="py-3">Title</th>
                            <th class="py-3 rounded-end-4">Message</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="px-4">1</td>
                            <td>Booking request confirmed</td>
                            <td>Payment received. Your booking is confirmed now.</td>
                        </tr>

                        <tr>
                            <td class="px-4">2</td>
                            <td>Good Morning</td>
                            <td>Enjoy Ride</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>