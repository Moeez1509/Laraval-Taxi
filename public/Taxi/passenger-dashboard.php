<?php
require_once __DIR__ . '/config/constant.php';
require_once __DIR__ . '/partials/header.php';

$errors = $_SESSION['pdash_errors'] ?? [];
$successMessage = $_SESSION['pdash_success'] ?? null;
$formData = $_SESSION['pdash_data'] ?? [];

unset($_SESSION['pdash_errors'], $_SESSION['pdash_success'], $_SESSION['pdash_data']);

function old(string $key, string $default = ''): string
{
    global $formData;
    return htmlspecialchars((string)($formData[$key] ?? $default), ENT_QUOTES, 'UTF-8');
}

function errorText(array $errors, string $key): string
{
    return isset($errors[$key])
        ? '<div class="text-danger small mt-2">' . htmlspecialchars($errors[$key], ENT_QUOTES, 'UTF-8') . '</div>'
        : '';
}

$requestType = strtolower((string)($formData['request_type'] ?? 'ride'));
$requestType = in_array($requestType, ['ride', 'delivery'], true) ? $requestType : 'ride';

$userName = htmlspecialchars((string)($_SESSION['name'] ?? 'Guest'), ENT_QUOTES, 'UTF-8');
$hour = (int) date('G');
$greeting = $hour < 12 ? 'Good Morning' : ($hour < 17 ? 'Good Afternoon' : 'Good Evening');
?>

<div class="container py-5" style="margin-top:90px;">
    <div class="row g-4 align-items-stretch">

        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4 p-lg-5">

                    <div class="mb-4">
                        <h3 class="fw-bold mb-1"><?= $greeting ?>, <?= $userName ?></h3>
                        <p class="text-muted mb-0">Book your ride quickly and safely.</p>
                    </div>

                    <?php if ($successMessage): ?>
                        <div class="alert alert-success rounded-4 shadow-sm">
                            <?= htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8') ?>
                        </div>
                    <?php endif; ?>

                    <form id="pdashForm" action="passenger-dashboard-logic.php" method="POST">

                        <div class="d-flex gap-2 mb-4">
                            <input type="radio" class="btn-check" name="request_type" id="ride"
                                   value="ride" <?= $requestType === 'ride' ? 'checked' : '' ?>>
                            <label for="ride" class="btn btn-outline-primary rounded-pill px-4">
                                Transportation
                            </label>

                            <input type="radio" class="btn-check" name="request_type" id="delivery"
                                   value="delivery" <?= $requestType === 'delivery' ? 'checked' : '' ?>>
                            <label for="delivery" class="btn btn-outline-primary rounded-pill px-4">
                                Delivery
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pickup Location</label>
                            <div class="input-group bg-light rounded-pill px-3 py-2">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <input type="hidden" name="pickup_lat" id="pickup_lat" value="<?= old('pickup_lat') ?>">
                                <input type="hidden" name="pickup_lng" id="pickup_lng" value="<?= old('pickup_lng') ?>">
                                <input type="text" name="pickup_address" id="pickup"
                                       value="<?= old('pickup_address') ?>"
                                       class="form-control border-0 bg-transparent shadow-none"
                                       placeholder="Enter pickup location">
                                <button type="button" class="btn border-0" onclick="openMap('pickup')">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </button>
                            </div>
                            <?= errorText($errors, 'pickup_address') ?>
                        </div>

                        <div id="deliveryFields" class="row g-3 mb-3" style="<?= $requestType === 'delivery' ? '' : 'display:none;' ?>">
                            <div class="col-md-6">
                                <div class="input-group bg-light rounded-pill px-3 py-2">
                                    <span class="input-group-text border-0 bg-transparent"><i class="fa fa-user"></i></span>
                                    <input type="text" name="dropoff_name" class="form-control border-0 bg-transparent shadow-none"
                                           value="<?= old('dropoff_name') ?>" placeholder="Receiver Name">
                                </div>
                                <?= errorText($errors, 'dropoff_name') ?>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group bg-light rounded-pill px-3 py-2">
                                    <span class="input-group-text border-0 bg-transparent"><i class="fa-solid fa-phone"></i></span>
                                    <input type="text" name="dropoff_phone" class="form-control border-0 bg-transparent shadow-none"
                                           value="<?= old('dropoff_phone') ?>" placeholder="Receiver Phone">
                                </div>
                                <?= errorText($errors, 'dropoff_phone') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Dropoff Location</label>
                            <div class="input-group bg-light rounded-pill px-3 py-2">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="fa-solid fa-flag-checkered"></i>
                                </span>
                                <input type="hidden" name="dropoff_lat" id="dropoff_lat" value="<?= old('dropoff_lat') ?>">
                                <input type="hidden" name="dropoff_lng" id="dropoff_lng" value="<?= old('dropoff_lng') ?>">
                                <input type="text" name="dropoff_address" id="dropoff"
                                       value="<?= old('dropoff_address') ?>"
                                       class="form-control border-0 bg-transparent shadow-none"
                                       placeholder="Enter destination">
                                <button type="button" class="btn border-0" onclick="openMap('dropoff')">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </button>
                            </div>
                            <?= errorText($errors, 'dropoff_address') ?>
                        </div>
                        <div class="mb-4">
   



      <!-- Service Type -->
<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
    <label class="form-label fw-semibold mb-2">Select Service</label>

    <div class="input-group bg-light rounded-pill px-2 py-2">
        <span class="input-group-text bg-transparent border-0">
            <i class="fa-solid fa-car text-secondary"></i>
        </span>

        <select
            class="form-select border-0 bg-transparent shadow-none<?= isset($errors['service_type']) ? ' is-invalid' : '' ?>"
            name="service_type"
            required>

            <option value="">Choose Service</option>

            <option value="economy"
                <?= (isset($_SESSION['pdash_data']['service_type']) && $_SESSION['pdash_data']['service_type'] === 'economy') ? 'selected' : '' ?>>
                Economy
            </option>

            <option value="sharing_ride"
                <?= (isset($_SESSION['pdash_data']['service_type']) && $_SESSION['pdash_data']['service_type'] === 'sharing_ride') ? 'selected' : '' ?>>
                Sharing Ride
            </option>

            <option value="rickshaw"
                <?= (isset($_SESSION['pdash_data']['service_type']) && $_SESSION['pdash_data']['service_type'] === 'rickshaw') ? 'selected' : '' ?>>
                Rickshaw
            </option>

            <option value="taxi_1_4"
                <?= (isset($_SESSION['pdash_data']['service_type']) && $_SESSION['pdash_data']['service_type'] === 'taxi_1_4') ? 'selected' : '' ?>>
                Taxi 1–4
            </option>

        </select>
    </div>

    <?php if (isset($errors['service_type'])): ?>
        <div class="text-danger small mt-2">
            <?= htmlspecialchars($errors['service_type'], ENT_QUOTES, 'UTF-8') ?>
        </div>
    <?php endif; ?>
</div>
    </div>


                        <div class="mb-3">
                            <label class="form-label fw-semibold">Schedule Pickup</label>
                            <div class="input-group bg-light rounded-pill px-3 py-2">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="fa-solid fa-calendar"></i>
                                </span>
                                <input type="datetime-local" name="schedule_pickup_time"
                                       value="<?= old('schedule_pickup_time') ?>"
                                       class="form-control border-0 bg-transparent shadow-none">
                            </div>
                            <?= errorText($errors, 'schedule_pickup_time') ?>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms" value="1"
                                   <?= old('terms') === '1' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="terms">
                                I agree to the reservation terms and privacy policy.
                            </label>
                            <?= errorText($errors, 'terms') ?>
                        </div>

                        <?php if (isset($errors['db'])): ?>
                            <div class="alert alert-danger rounded-4">
                                <?= htmlspecialchars($errors['db'], ENT_QUOTES, 'UTF-8') ?>
                            </div>
                        <?php endif; ?>

                        <button type="submit" name="continue_booking"
                                class="btn btn-primary w-100 rounded-pill py-3 fw-semibold shadow-sm">
                            Continue Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <input id="searchInput" type="text" class="form-control rounded-pill mb-4 py-3"
                           placeholder="Search location...">
                    <div id="gmaps-basic" class="rounded-4 overflow-hidden bg-light" style="height:720px;"></div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="mapModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header border-0">
                <input id="mapSearch" type="text" class="form-control rounded-pill py-2"
                       placeholder="Search location...">
                <button type="button" class="btn-close ms-3" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="map" class="rounded-4" style="height:450px;"></div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-primary rounded-pill px-4" onclick="confirmLocation()">
                    Confirm Location
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('input[name="request_type"]').forEach(input => {
        input.addEventListener('change', function () {
            document.getElementById('deliveryFields').style.display =
                this.value === 'delivery' ? 'flex' : 'none';
        });
    });
</script>

<?php include('./partials/footer.php'); ?>