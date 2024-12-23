<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="<?php echo base_url() ?>assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="<?php echo base_url() ?>assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css" />

    <!-- <link rel="canonical" href="https://geeksui.codescandy.com/geeks/index.html" /> -->
    <link href="<?php echo base_url() ?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <title>Geeks - Bootstrap 5 Template</title>
</head>

<body>
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
                <!-- Mobile view nav wrap -->
                <div class="ms-auto d-flex align-items-center order-lg-3">

                    <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                        <li class="dropdown d-inline-block stopevent position-static">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#" role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5" aria-labelledby="dropdownNotificationSecond">
                                <div>
                                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h5 mb-0">Notifications</span>

                                    </div>
                                    <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                                        <li class="list-group-item bg-light">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="text-body" href="#">
                                                        <div class="d-flex">
                                                            <img src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                            <div class="ms-3">
                                                                <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                                <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                                <span class="fs-6">
                                                                    <span>
                                                                        <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                        10-10-2024,
                                                                    </span>
                                                                    <span class="ms-1">09:00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="./pages/notification-history.html" class="text-link fw-semibold">Lihat Semua Notifikasi</a>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <div>
                    <!-- Button -->
                    <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbar-default">
                    <ul class="navbar-nav mt-3 mt-lg-0">
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url() ?>">Beranda</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Kelas</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('page/account') ?>">Akun</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('dashboard') ?>">Dashboard</a>
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="<?php echo base_url('logout') ?>">Logout</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <?php $this->load->view($content) ?>
        <!--End Page Content -->

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
                        All Rights Reserved.
                    </span>
                </div>
                <!-- Links -->
                <div class="col-12 col-md-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-end">
                        <a class="nav-link" href="<?php echo base_url('page/about') ?>">About</a>
                        <a class="nav-link" href="#!">Privacy</a>
                        <a class="nav-link" href="#!">Terms</a>
                        <a class="nav-link" href="#!">Feedback</a>
                        <a class="nav-link" href="<?php echo base_url('page/about'); ?>">Support</a>
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
    <script src="<?php echo base_url() ?>assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="<?php echo base_url() ?>assets/js/theme.min.js"></script>

    <script src="<?php echo base_url() ?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>

    <script src="<?php echo base_url() ?>assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vendors/tnsSlider.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vendors/tooltip.js"></script>
</body>

</html>