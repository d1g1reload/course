<?php if ($this->session->userdata('role_id') == 1) { ?>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total Pendapatan</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">Rp. <?php echo number_format($user_saldo) ?></h2>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total Pembelian Kelas</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1"><?php echo $user_buy ?></h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total User</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1"><?php echo $user_count ?></h2>
                </div>
            </div>
        </div>
    </div>


    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="h4 mb-0">Konfirmasi Pembelian Kelas</h3>
            <?php if ($this->session->flashdata('success')) : ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table mb-0 table-hover table-centered text-nowrap" id="table-pending">
                <thead class="table-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Tanggal Pembelian</th>
                        <th>Kursus</th>
                        <th>Harga</th>
                        <th>Discount %</th>
                        <th>Status</th>
                        <?php if ($this->session->userdata('role_id') == 1): ?>
                            <th>Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($payment_pending as $item) {
                        ?>

                        <tr>
                            <td><a href="<?php echo base_url('course/purchase/detail/' . $item->purchase_id) ?>"><?php echo $item->transaction_reff ?></a></td>
                            <td><?php echo date('d-m-Y H:i:s', strtotime($item->purchase_date)) ?></td>
                            <td><?php echo $item->course_title ?></td>
                            <td>Rp. <?php echo number_format($item->price) ?></td>
                            <td><?php echo $item->discount ?>%</td>
                            <td>
                                <?php if ($item->payment_status == 1) { ?>
                                    <span class="badge bg-warning">Pending</span>
                                <?php } elseif ($item->payment_status == 2) { ?>
                                    <span class="badge bg-success">Berhasil</span>
                                <?php } elseif ($item->payment_status == 3) { ?>
                                    <span class="badge bg-danger">Gagal</span>

                                <?php } ?>
                            </td>
                            <?php if ($this->session->userdata('role_id') == 1): ?>
                                <td>
                                    <form action="<?php echo base_url('course/purchase/approve') ?>" method="post">
                                        <input type="hidden" name="trx_reff" value="<?php echo $item->transaction_reff ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $item->purchase_user_id ?>">
                                        <input type="hidden" name="course_id" value="<?php echo $item->purchase_course_id ?>">
                                        <button type="submit" class="btn btn-outline-success"><i class="fe fe-check"></i>Approve</button>
                                    </form>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } elseif ($this->session->userdata('role_id') == 2) { ?>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total Pendapatan</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">Rp. <?php echo number_format($user_saldo) ?></h2>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">students Enrollments</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">12,000</h2>
                    
                </div>
            </div>
        </div>
       
    </div>


    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="h4 mb-0">Best Selling Courses</h3>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table mb-0 table-hover table-centered text-nowrap">
                <!-- Table Head -->
                <thead class="table-light">
                    <tr>
                        <th>Courses</th>
                        <th>Sales</th>
                        <th>Amount</th>
                        <th></th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <tr>
                        <td>
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/course/course-laravel.jpg" alt="course" class="rounded img-4by3-lg" />
                                    <h5 class="ms-3 text-primary-hover mb-0">Building Scalable APIs with GraphQL</h5>
                                </div>
                            </a>
                        </td>
                        <td>34</td>
                        <td>$3,145.23</td>
                        <td>
                            <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Setting</span>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                    </a>
                                </span>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/course/course-sass.jpg" alt="course" class="rounded img-4by3-lg" />
                                    <h5 class="ms-3 text-primary-hover mb-0">HTML5 Web Front End Development</h5>
                                </div>
                            </a>
                        </td>
                        <td>30</td>
                        <td>$2,611.82</td>
                        <td>
                            <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                    <span class="dropdown-header">Setting</span>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                    </a>
                                </span>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/course/course-vue.jpg" alt="course" class="rounded img-4by3-lg" />
                                    <h5 class="ms-3 text-primary-hover mb-0">Learn JavaScript Courses from Scratch</h5>
                                </div>
                            </a>
                        </td>
                        <td>26</td>
                        <td>$2,372.19</td>
                        <td>
                            <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                    <span class="dropdown-header">Setting</span>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                    </a>
                                </span>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/course/course-react.jpg" alt="course" class="rounded img-4by3-lg" />
                                    <h5 class="ms-3 text-primary-hover mb-0">Get Started: React Js Courses</h5>
                                </div>
                            </a>
                        </td>
                        <td>20</td>
                        <td>$1,145.23</td>
                        <td>
                            <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown4" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                    <span class="dropdown-header">Setting</span>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                    </a>
                                </span>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php } elseif ($this->session->userdata('role_id') == 3) { ?>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total Kelas di Beli</span>

                    <h2 class="d-flex justify-content-between align-items-center">
                        <span><i class="fe fe-shopping-cart icon-shape text-dark-success"></i></span>
                        <span class="badge bg-success ms-2"><?php echo $student_buy_completed ?></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semibold">Total Kelas belum di Bayar</span>

                    <h2 class="d-flex justify-content-between align-items-center">
                        <span><i class="fe fe-shopping-cart icon-shape text-dark-danger"></i></span>
                        <span class="badge bg-danger ms-2"><?php echo $student_buy_not_completed ?></span>
                    </h2>
                </div>
            </div>

        </div>

    </div>

<?php } ?>