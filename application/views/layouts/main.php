<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Belajar pemrograman dari nol di eduhost.my.id. Kursus online gratis HTML, CSS, JavaScript, dan web development lengkap untuk pemula.">
    <meta name="keywords"
        content="belajar membuat website,kursus online, belajar program di bogor, kursus website di bogor,kursus programming untuk pemula" />
    <meta name="author" content="AdiRahman" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://eduhost.my.id/">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="<?php echo base_url() ?>assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="<?php echo base_url() ?>assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css" />

    <!-- <link rel="canonical" href="https://geeksui.codescandy.com/geeks/index.html" /> -->
    <link href="<?php echo base_url() ?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <title>Eduhost - Kursus Online Programming Gratis untuk Pemula</title>
    <style>
    body {
        font-family: "Quicksand", sans-serif;
        font-style: normal;
    }
    </style>
</head>

<body>
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img
                        src="<?php echo base_url() ?>assets/main/logo.png" alt="Eduhost" width="50px"
                        height="38px" /></a>

                <div>
                    <!-- Button -->
                    <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                        aria-label="Toggle navigation">
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


                        <?php if ($this->session->userdata('is_loggedin')) { ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('dashboard') ?>">Dashboard</a>
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="<?php echo base_url('logout') ?>">Logout</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('page/account') ?>">Akun</a>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <?php $this->load->view($content) ?>
        <!--End Page Content -->

    </main>
    <!-- Footer -->
    <footer class="footer bg-dark-stable py-8">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <b>PT.DIGITAL RELOAD INDONESIA</b>
                        </div>
                        <p class="mb-0">Eduhost Platform Kursus Online yang disusun untuk Pemula.</p>

                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Company</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Tentang Kami</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Community</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Support</a>
                            </li>

                            <li>
                                <a href="#!" class="nav-link">Blog</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Teaching</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Daftar Instruktur</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Dokumentasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-white-stable">Contact</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">

                                <li>
                                    Email:
                                    <span class="fw-semibold">websitecourse.ar@gmail.com</span>
                                </li>
                                <li>
                                    Alamat:
                                    <span class="fw-semibold">
                                        Cikaret, Ciomas Kabupaten Bogor.
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="d-flex flex-row gap-2">
                            <a href="#"><img src="./assets/images/svg/appstore.svg" alt="" class="img-fluid" /></a>
                            <a href="#"><img src="./assets/images/svg/playstore.svg" alt="" class="img-fluid" /></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div
                class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
                <!-- Desc -->
                <div class="col-lg-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                            document.getElementById("copyright").appendChild(document.createTextNode(new Date()
                                .getFullYear()));
                            </script>
                        </span>
                        Digital Reload Indonesia
                    </span>
                </div>
                <!-- Links -->
                <div class="col-12 col-lg-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
                        <a class="nav-link active" href="#!">Terms of use</a>
                        <a class="nav-link" href="#!">Privacy policy</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

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
    <script>
    $('#buy-save').click(function() {
        console.log('work')
        // Menutup modal
        $('#buy-course').modal('hide');

        // Men-submit form
        $('form').submit();
    });
    </script>
</body>

</html>