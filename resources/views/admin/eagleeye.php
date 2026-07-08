<?php include __DIR__ . '/partials/header.php'; ?>

<div class="container-fluid my-4">
    <div class="card p-3">
        
        <h4 class="mb-4">Job Heatmap</h4>

        <div class="row">

            <!-- LEFT SIDE (MAP PLACEHOLDER) -->
         




    <div class="card border-0 col-lg-8 shadow-sm rounded-4 overflow-hidden">
    

            <!-- Map -->
            <div id="jobHeatmap"
                 class="rounded-4 border"
                 style="height: 650px; width: 100%;">
            </div>

        
    </div>

            <!-- RIGHT SIDE (PROVIDERS RATING) -->
            <div class="col-lg-4">
                <h5 class="mb-3">Providers Rating</h5>

                <!-- ITEM -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Asch Koul</span>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width:100%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Eva Noah</span>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:100%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Grace Frank</span>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:100%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Javier Eduardo</span>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width:100%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Leo David</span>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width:100%"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

    <?php include __DIR__ . '/partials/footer.php'; ?>