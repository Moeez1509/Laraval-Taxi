@extends('maindesign')
@section('manage_cards')
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
                        Card List
                    </a>

                    <a href="?tab=add"
                       class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'add' ? 'text-white' : 'text-dark'; ?>"
                       style="background-color: <?php echo $currentTab === 'add' ? '#435ee6' : 'transparent'; ?>;">
                        Add Card
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">

                <?php if ($currentTab === 'list'): ?>

                    <div class="d-flex justify-content-end flex-wrap gap-4 mb-4">
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <span class="bg-success rounded-circle d-inline-block" style="width:10px;height:10px;"></span>
                            <span>Default</span>
                        </div>

                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <span class="bg-danger rounded-circle d-inline-block" style="width:10px;height:10px;"></span>
                            <span>Not Default</span>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-0">
                            <thead>
                                <tr class="table-light">
                                    <th class="py-3 fw-semibold text-secondary">Card Brand</th>
                                    <th class="py-3 fw-semibold text-secondary">Last Four Digits</th>
                                    <th class="py-3 fw-semibold text-secondary">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="py-5 text-secondary">
                                        <div class="mb-3">
                                            <i class="fa-regular fa-clipboard fs-1 text-muted"></i>
                                        </div>
                                        No data available in table
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                <?php else: ?>

                    <form action="save-card.php" method="POST">
                        <div class="row g-5">

                            <div class="col-md-6">
                                <h6 class="fw-bold">Enter Card No.</h6>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text border-0 bg-light rounded-start-pill px-3">
                                        <i class="fa-regular fa-credit-card text-secondary"></i>
                                    </span>
                                    <input type="text"
                                           name="card_number"
                                           class="form-control border-0 bg-light rounded-end-pill py-3"
                                           placeholder="Enter card number"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6 class="fw-bold">Expiry Date</h6>
                                <input type="text"
                                       name="expiry"
                                       class="form-control form-control-lg border-0 bg-light rounded-pill py-3"
                                       placeholder="MM / YY"
                                       required>
                            </div>

                            <div class="col-md-6">
                                <h6 class="fw-bold">Enter CVC</h6>
                                <input type="text"
                                       name="cvc"
                                       class="form-control form-control-lg border-0 bg-light rounded-pill py-3"
                                       placeholder="CVC"
                                       required>
                            </div>

                            <div class="col-12">
                                <button type="submit"
                                        class="btn rounded-pill px-5 py-3 text-white fw-bold bg-primary">
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
@endsection('manage_cards')
