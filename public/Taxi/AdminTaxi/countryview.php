<?php include('./partials/header.php') ?>
<div class="container-fluid py-4 bg-light">

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4">

            <!-- Header -->
            <h2 class="fw-bold text-dark mb-4">
                Map View
            </h2>

            <!-- Map Container -->
            <div class="position-relative rounded-4 overflow-hidden border"
                 style="height: 700px;">

                <!-- Google Map -->
                <div id="gmaps-basic" class="w-100 h-100"></div>

                <!-- Note Box -->
                <div class="position-absolute bottom-0 end-0 m-4 bg-dark rounded-4 shadow-sm p-4"
                     style="min-width: 260px; z-index: 10;">

                    <h5 class="fw-bold mb-3 text-light">
                        Note:
                    </h5>

                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="rounded-circle d-inline-block"
                              style="width:14px; height:14px; background-color:#2bb673;"></span>
                        <span class="text-secondary">Available Provider</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <span class="rounded-circle d-inline-block"
                              style="width:14px; height:14px; background-color:#c155f2;"></span>
                        <span class="text-secondary">Offline Driver</span>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>
<?php include('./partials/footer.php') ?>