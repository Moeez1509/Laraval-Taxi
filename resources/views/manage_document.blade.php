@extends('maindesign')
@section('manage_document')
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['document', 'hondacivic','biker']) ? $_GET['tab'] : 'document';
?>
<br>
<br>
<br>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="d-flex justify-content-right mb-4">
                <div class="bg-white rounded-pill shadow-sm p-1 d-inline-flex gap-1">
                    <a href="?tab=document"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'document' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'document' ? '#435ee6' : 'transparent'; ?>;">
                        Providers Documents
                    </a>
                    <a href="?tab=hondacivic"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'hondacivic' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'hondacivic' ? '#435ee6' : 'transparent'; ?>;">
                        ABC 9900- HONDA Civic
                    </a>
                   <a href="?tab=biker"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'biker' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'biker' ? '#435ee6' : 'transparent'; ?>;">
                        3223-Biker
                    </a>
                </div>
            </div>
            <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">

                <form action="save-card.php" method="POST">
                <?php if ($currentTab === 'document'): ?>
<div class="container py-5">
    <div class="row ">
        <div class="col-md-5 col-lg-4">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <!-- Image -->
                <img src="<?= asset('Taxi/assets/img/portfolio/app-1.jpg') ?>"
                     class="card-img-top img-fluid"
                     alt="Driver Front Pic"
                     style="height: 220px; object-fit: cover;">

                <!-- Content -->
                <div class="card-body text-center py-4">

                    <!-- Title -->
                    <h5 class="fw-semibold text-secondary mb-4">
                        driver front pic
                    </h5>

                    <!-- Status -->
                    <span class="badge rounded-pill px-4 py-3 fs-6 fw-medium mb-4"
                          style="background-color: #0a55c5b7;">
                        APPROVED
                    </span>

                    <!-- Expiry -->
                    <p class="text-secondary mb-0 fs-6">
                        EXPIRY DATE: 02-03-2031 1787 DAYS LEFT
                    </p>

                </div>
            </div>

        </div>
        <div class="col-md-5 col-lg-4">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <!-- Image -->
                <img src="<?= asset('Taxi/assets/img/portfolio/app-1.jpg') ?>"
                     class="card-img-top img-fluid"
                     alt="Driver Front Pic"
                     style="height: 220px; object-fit: cover;">

                <!-- Content -->
                <div class="card-body text-center py-4">

                    <!-- Title -->
                    <h5 class="fw-semibold text-secondary mb-4">
                       mart
                    </h5>

                    <!-- Status -->
                    <span class="badge rounded-pill px-4 py-3 fs-6 fw-medium mb-4"
                          style="background-color: #0a55c5b7;">
                        APPROVED
                    </span>

                    <!-- Expiry -->
                    <p class="text-secondary mb-0 fs-6">
                       Expiry Date: 04-09-2027 1512 days LEFT
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>


                <?php elseif ($currentTab === 'hondacivic'): ?>



<div class="container py-5">
    <div class="row ">
        <div class="col-md-5 col-lg-4">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <!-- Image -->
                <img src="<?= asset('Taxi/assets/img/portfolio/app-1.jpg') ?>"
                     class="card-img-top img-fluid"
                     alt="Vehicle Inspection Sheet Front"
                     style="height: 220px; object-fit: cover;">

                <!-- Content -->
                <div class="card-body text-center py-4">

                    <!-- Title -->
                    <h5 class="fw-semibold text-secondary mb-4">
                        Vehicle Inspection Sheet Front
                    </h5>

                    <!-- Status -->
                    <span class="badge rounded-pill px-4 py-3 fs-6 fw-medium mb-4"
                          style="background-color: #0a55c5b7;">
                        APPROVED
                    </span>

                    <!-- Expiry -->
                    <p class="text-secondary mb-0 fs-6">
                        Expiry Date: 04-09-2028 878 days left
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>
<?php else: ?>
<div class="container py-5">
    <div class="row ">
        <div class="col-md-5 col-lg-4">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <!-- Image -->
                <img src="<?= asset('Taxi/assets/img/portfolio/app-1.jpg') ?>"
                     class="card-img-top img-fluid"
                     alt="Vehicle Inspection Sheet Front"
                     style="height: 220px; object-fit: cover;">

                <!-- Content -->
                <div class="card-body text-center py-4">

                    <!-- Title -->
                    <h5 class="fw-semibold text-secondary mb-4">
                        Biker License
                    </h5>

                    <!-- Status -->
                    <span class="badge rounded-pill px-4 py-3 fs-6 fw-medium mb-4"
                          style="background-color: #0a55c5b7;">
                        APPROVED
                    </span>

                    <!-- Expiry -->
                    <p class="text-secondary mb-0 fs-6">
                        Expiry Date: 04-09-2028 878 days left
                    </p>

                </div>
            </div>

        </div>
    </div>

<?php endif; ?>
</form>


            </div>
        </div>
    </div>
</div>
@endsection('manage_document')
