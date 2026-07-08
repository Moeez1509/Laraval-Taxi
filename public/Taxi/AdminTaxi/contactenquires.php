<?php include('./partials/header.php') ?>

<div class="container-fluid py-4 bg-light">

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <!-- Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

                <h2 class="fw-bold text-dark mb-0">
                    Contact Enquiries
                </h2>

                <button class="btn text-white fw-semibold px-4 py-2 rounded-3 border-0 shadow-sm"
                        style="background-color:#f06b6b;">
                    <i class="fa-solid fa-trash me-2"></i>
                    Delete Selected
                </button>
            </div>

            <!-- Filter Row -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

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
                           placeholder="Search enquiries">
                </div>

            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead>
                        <tr class="table-light">
                            <th class="py-3 px-4 rounded-start-4">
                                <input class="form-check-input" type="checkbox">
                            </th>
                            <th class="py-3">ID</th>
                            <th class="py-3">Name</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Subject</th>
                            <th class="py-3 rounded-end-4">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>1</td>
                            <td>Hiram</td>
                            <td>sales@gotaxi.cloud</td>
                            <td>Hiram Coats</td>
                            <td>
                                <button class="btn rounded-3 text-white border-0 px-3"
                                        style="background-color:#efc56a;">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>2</td>
                            <td>Lakesha</td>
                            <td>sales@bourque.bangeshop.com</td>
                            <td>Lakesha Bourque</td>
                            <td>
                                <button class="btn rounded-3 text-white border-0 px-3"
                                        style="background-color:#efc56a;">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>3</td>
                            <td>Russel</td>
                            <td>sales@gotaxi.cloud</td>
                            <td>Russel Keisler</td>
                            <td>
                                <button class="btn rounded-3 text-white border-0 px-3"
                                        style="background-color:#efc56a;">
                                    <i class="fa-solid fa-ellipsis-vertical">
                                       
                                    </i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

            <!-- Footer -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4">

                <div class="text-muted">
                    Showing 1 to 10 of 22 Records
                </div>

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
<?php include('./partials/footer.php') ?>