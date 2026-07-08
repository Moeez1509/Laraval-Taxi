<?php
include('./partials/header.php');
?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['list', 'add']) ? $_GET['tab'] : 'list';
?>
<br>
<br>
<br>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="d-flex justify-content-center mb-4">
                <div class="bg-white rounded-pill shadow-sm p-1 d-inline-flex gap-1">
                    <a href="?tab=list"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'list' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'list' ? '#435ee6' : 'transparent'; ?>;">
                        Switch Vehicle
                    </a>

                    <a href="?tab=add"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'add' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'add' ? '#435ee6' : 'transparent'; ?>;">
                        Add Vehicle
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">

                <?php if ($currentTab === 'list'): ?>

                    <div class="d-flex justify-content-end flex-wrap gap-4 mb-4">
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <span class="bg-success rounded-circle d-inline-block" style="width:10px;height:10px;"></span>
                            <span>Approved</span>
                        </div>

                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <span class="bg-danger rounded-circle d-inline-block" style="width:10px;height:10px;"></span>
                            <span>Not Approved</span>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-0">
                            <thead>
                                <tr class="table-light">
                                    <th class="py-3 fw-semibold text-secondary">Enabled Services</th>
                                    <th class="py-3 fw-semibold text-secondary">Disabled Services</th>
                                    <th class="py-3 fw-semibold text-secondary">Service Name</th>
                                    <th class="py-3 fw-semibold text-secondary">Service Number</th>
                                    <th class="py-3 fw-semibold text-secondary">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>N/A</td>
                                    <td>Bike</td>
                                    <td>Biker</td>
                                    <td>3223</td>
                                </tr>

                                <tr>
                                    <td>Economy</td>
                                    <td>N/A</td>
                                    <td>Honda Civic </td>
                                    <td>ABC 9900</td>



                                </tr>
                            </tbody>
                        </table>
                    </div>

                <?php else: ?>

                    <form action="save-card.php" method="POST">
                        <div class="row g-5">

                            
                            <div class="col-md-6 ">
                                <h6 class="fw-bold"> Service Type</h6>
                                <div class="input-group input-group-lg bg-light rounded-pill py-3">
                                    
                                     <select class="form-select border-0 bg-transparent shadow-none"
                name="vehicle_type" >
                <option >Economy</option>
                <option >Premium</option>
                <option >Bike</option>
                <option value="">Rikshaw</option>
              </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6 class="fw-bold">Vehicle Make, Model, Color</h6>
                                <input type="text" name="vehicle_details"
                                    class="form-control form-control-lg border-0 bg-light rounded-pill py-3"
                                    placeholder=" Vehicle Make, Model, Color" required>
                            </div>

                            <div class="col-md-6">
                                <h6 class="fw-bold">Vehicle Reg #</h6>
                                <input type="text" name="vehicle_reg"
                                    class="form-control form-control-lg border-0 bg-light rounded-pill py-3"
                                    placeholder="Vehicle Reg #" required>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn rounded-pill px-5 py-3 text-white fw-bold bg-primary">
                                    Submit
                                </button>
                            </div>

                        </div>
                    </form>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include('./partials/footer.php') ?>