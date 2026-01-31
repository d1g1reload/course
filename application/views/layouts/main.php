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
                            <a class="dropdown-item" href="<?php echo base_url('page/course') ?>">Kursus</a>
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
    <footer class="pt-lg-8 pt-5 footer bg-white">
        <div class="container mt-lg-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- about company -->
                    <div class="mb-4">

                        <div class="mt-4">
                            <p>"Eduhost adalah platform belajar online yang berdedikasi untuk meningkatkan keahlian
                                praktis masyarakat Indonesia. Kami menyediakan akses pendidikan berkualitas yang dapat
                                dijangkau oleh siapa saja, di mana saja."</p>
                            <!-- social media -->
                            <div class="fs-4 mt-4">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Perusahaan</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="<?php echo base_url('page/about') ?>" class="nav-link">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url('page/course') ?>" class="nav-link">Kursus</a></li>
                            <li><a href="#" class="nav-link">Blog</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Bantuan</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="<?php echo base_url('page/help') ?>" class="nav-link">Pusat Bantuan</a></li>
                            <li><a href="#" class="nav-link">FAQ</a></li>
                            <li><a href="#" class="nav-link">Panduan Belajar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!-- contact info -->
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Informasi Kontak</h3>
                        <p>Lapangan Sakura,Cikaret Kota Batu, Kabupaten Bogor</p>
                        <p class="mb-1">
                            Email:
                            <a href="#">info@eduhost.my.id</a>
                        </p>
                        <p>
                            Phone:
                            <span class="text-dark fw-semibold">0823-8200-4408</span>
                        </p>
                        <div class="d-flex">
                            <a href="#" class="ms-2"><img src="<?php echo base_url() ?>/assets/images/svg/playstore.svg"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-0 border-top py-2 mt-6">
                <!-- Desc -->
                <div class="col-md-10 col-12">
                    <div class="d-lg-flex align-items-center">
                        <div class="me-4">
                            <span>
                                ©
                                <span id="copyright5">
                                    <script>
                                    document.getElementById("copyright5").appendChild(document.createTextNode(new Date()
                                        .getFullYear()));
                                    </script>
                                </span>
                                eduhost.my.id
                            </span>
                        </div>
                        <div>
                            <nav class="nav nav-footer">
                                <a class="nav-link ps-0" href="#">Privacy Policy</a>
                                <a class="nav-link" href="#">Terms of Use</a>
                            </nav>
                        </div>
                    </div>
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
    <script src="https://kit.fontawesome.com/a97c599547.js" crossorigin="anonymous"></script>
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