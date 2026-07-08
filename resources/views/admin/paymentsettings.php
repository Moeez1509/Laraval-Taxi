<?php include __DIR__ . '/partials/header.php'; ?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['mode', 'setting']) ? $_GET['tab'] : 'mode';
?>

<div class="border rounded-4  shadow-sm ">

    <div class=" rounded-pill shadow-sm p-1 d-inline-flex gap-1">
        <div class=" rounded-pill shadow-sm p-1 d-inline-flex gap-1">
            <a href="?tab=mode"
                class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'mode' ? 'text-white' : 'text-dark'; ?>"
                style="background-color: <?php echo $currentTab === 'mode' ? '#435ee6' : 'transparent'; ?>;">
                Users
            </a>
        </div>
    </div>
    <div class=" rounded-pill shadow-sm p-1 d-inline-flex gap-1">
        <div class=" rounded-pill shadow-sm p-1 d-inline-flex gap-1">
            <a href="?tab=setting"
                class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'setting' ? 'text-white' : 'text-dark'; ?>"
                style="background-color: <?php echo $currentTab === 'setting' ? '#435ee6' : 'transparent'; ?>;">
                Providers
            </a>
        </div>
    </div>
</div>


<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>ARAKA</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
                <!-- Child -->
                <div class="child-options">
                    <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Araka Email
                        </label>
                        <input type="email" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="mbeddy1954@gmail.com">

                    </div>
                     <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Araka Password
                        </label>
                        <input type="password" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="Araka Password">

                    </div>
                     <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Araka Payment Page ID
                        </label>
                        <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="95CC3E13-DF1B-4CC3-B39C-10966565894A">

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Cash Payments</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>ePayco</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
                
                <!-- Child -->
                <div class="child-options">
                    <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            ePayco Public Key
                        </label>
                        <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="ePayco Public Key">

                    </div>
                     <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            ePayco Private Key
                        </label>
                        <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="ePayco Private Key">

                    </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>PayPal Payments</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
                <div class="child-options">
                <!-- Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            PayPal Client ID
                        </label>
                        <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0" value="abz@gmail.com ">

                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Fathoorah</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div
                >
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fields -->
<div class="p-3 border-top">
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-between align-items-center rounded-pill bg-light py-3 px-4 mb-3">
                    <span>Disable Provider Login</span>
                    <div class="form-check form-switch mb-0">
                        <input type="checkbox" class="form-check-input main-toggle m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/partials/footer.php'; ?>