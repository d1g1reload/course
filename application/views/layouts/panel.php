<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="<?php echo base_url() ?>assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="<?php echo base_url() ?>assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css">
    <link href="<?php echo base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard-instructor.html" />
    <title>Instructor Dashboard | Geeks - Bootstrap 5 Template</title>
</head>

<body>


    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                <!-- User info -->
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <!-- Bg -->
                        <div class="rounded-top" style="background: url(<?php echo base_url() ?>assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                        <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                        <img src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" class="avatar-xl rounded-circle border border-4 border-white position-relative" alt="avatar" />
                                        <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top" title="Verified">
                                            <img src="<?php echo base_url() ?>assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30" />
                                        </a>
                                    </div>
                                    <div class="lh-1">
                                        <h2 class="mb-0"><?php echo $this->session->userdata('fullname') ?></h2>
                                        <p class="mb-0 d-block"><?php echo $this->session->userdata('email') ?></p>
                                    </div>
                                </div>
                                <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2): ?>
                                    <div>
                                        <a href="<?php echo base_url('page/course/create') ?>" class="btn btn-primary d-none d-md-block">Create New Course</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->

                <div class="row mt-0 mt-md-4">
                    <div class="col-lg-3 col-md-4 col-12">
                        <!-- User profile -->
                        <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                            <!-- Menu -->
                            <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                            <!-- Button -->
                            <button
                                class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#sidenav"
                                aria-controls="sidenav"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="fe fe-menu"></span>
                            </button>
                            <!-- Collapse -->
                            <div class="collapse navbar-collapse" id="sidenav">
                                <div class="navbar-nav flex-column">
                                    <span class="navbar-header">Halaman Utama</span>
                                    <ul class="list-unstyled ms-n2">
                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('main') ?>">
                                                <i class="fe fe-chrome nav-icon"></i>
                                                Website
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="navbar-header">Dashboard</span>
                                    <ul class="list-unstyled ms-n2">
                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                                                <i class="fe fe-home nav-icon"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2): ?>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('courselist') ?>">
                                                    <i class="fe fe-book nav-icon"></i>
                                                    Kontent Saya
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($this->session->userdata('role_id') == 3): ?>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('page/student/lecture/list') ?>">
                                                    <i class="fe fe-list nav-icon"></i>
                                                    Kelas Saya
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                    <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2): ?>
                                        <span class="navbar-header">Pembayaran</span>
                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="fe fe-pie-chart nav-icon"></i>
                                                Pendapatan
                                            </a>
                                        </li>
                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="fe fe-dollar-sign nav-icon"></i>
                                                Request Pembayaran
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 3): ?>
                                        <!-- Student Menus -->
                                        <span class="navbar-header">Transaksi</span>
                                        <ul class="list-unstyled ms-n2 mb-0">
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('course/purchase/list') ?>">
                                                    <i class="fe fe-list nav-icon"></i>
                                                    Transaksi Saya
                                                </a>
                                            </li>

                                        </ul>
                                    <?php endif; ?>
                                    <!-- Navbar header -->
                                    <span class="navbar-header">Account Settings</span>
                                    <ul class="list-unstyled ms-n2 mb-0">
                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-edit.html">
                                                <i class="fe fe-settings nav-icon"></i>
                                                Edit Profile
                                            </a>
                                        </li>

                                        <!-- Nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('logout') ?>">
                                                <i class="fe fe-power nav-icon"></i>
                                                Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <?php $this->load->view($content_admin) ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center g-0 border-top py-2">
                <!-- Desc -->
                <div class="col-md-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        Geeks. All Rights Reserved.
                    </span>
                </div>
                <!-- Links -->
                <div class="col-12 col-md-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-end">
                        <a class="nav-link active ps-0" href="#!">Privacy</a>
                        <a class="nav-link" href="#!">Terms</a>
                        <a class="nav-link" href="#!">Feedback</a>
                        <a class="nav-link" href="#!">Support</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>>
    <!-- Theme JS -->
    <script src="<?php echo base_url() ?>assets/js/theme.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <script src="<?php echo base_url() ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vendors/chart.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#course').DataTable();
            $('#detail_kursus').DataTable({
                "order": [
                    [1, 'desc']
                ] // Menyortir berdasarkan kolom urutan (index 1), urutkan secara ascending
            });
            $('#purchase-table').DataTable({
                "order": [
                    [1, 'desc']
                ] // Menyortir berdasarkan kolom urutan (index 1), urutkan secara ascending
            });
            $('#summernote').summernote();
            $('#summernote-materi').summernote();
            var courseOrder = $('#val_order').val();
            console.log('Course Order:', courseOrder);
            var lastNumber = parseInt(courseOrder);
            var updateValue = lastNumber + 1;
            $('input[name="order_value"]').val(updateValue);
        });
        $('#confirm-save').click(function() {
            // Menutup modal
            $('#save-course').modal('hide');

            // Men-submit form
            $('form').submit();
        });
    </script>

</body>

</html>