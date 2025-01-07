<style>
    .card {
        width: auto;
        /* Ukuran card */
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card img {
        width: 100%;
        /* Gambar menyesuaikan lebar card */
        height: 200px;
        /* Tinggi tetap */
        object-fit: cover;
        /* Memastikan gambar tetap proporsional */
    }
</style>

<section class="bg-custom">
    <div class="container">
        <!-- Hero Section -->
        <div class="row align-items-center g-0">
            <div class="col-xl-12 col-lg-12 col-md-12 mt-5 mb-5">
                <div class="py-7 py-lg-0">
                    <h1 class="text-white display-4 fw-bold">Selamat datang di Eduhost</h1>
                    <p class="text-white-50 mb-4 lead">Platform Kursus Online untuk Pemula.</p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-white py-4 shadow-sm">
    <div class="container">
        <div class="row align-items-center g-0">
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                        <i class="fe fe-video"></i>
                    </span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semibold">Video Premium</h4>
                        <p class="mb-0">Memberikan kualitas terbaik.</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                        <i class="fe fe-users"></i>
                    </span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semibold">Instruktur Berpengalaman</h4>
                        <p class="mb-0">Pilih instruktur yang sesuai untuk anda.</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="d-flex align-items-center">
                    <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                        <i class="fe fe-clock"></i>
                    </span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semibold">Akses Kursus Selamanya</h4>
                        <p class="mb-0">Nikmati pengalaman belajar tanpa masa tenggang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-lg-8 pb-lg-3 pt-5 pb-6">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Rekomendasi Kursus</h2>
            </div>
        </div>
        <div class="row">
            <?php if ($total_course->jum > 0) : ?>

                <?php foreach ($course as $item) : ?>
                    <?php if ($item->course_status == 1) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 card-hover">
                                <a href="<?php echo base_url('page/course/detail/' . $item->id) ?>"><img src="<?php echo base_url() ?>assets/course/<?php echo $item->course_banner ?>" class="img-fluid"></a>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <h4 class="mb-2 text-truncate-line-2"><a href="<?php echo base_url('page/course/detail/' . $item->id) ?>" class="text-inherit"><?php echo $item->course_title ?></a></h4>

                                    <!-- Price -->
                                    <div class="lh-1 mt-3">

                                        <?php

                                        if ($item->course_price > 0) {
                                            if ($item->course_discount > 0) {
                                                $total_discount = ($item->course_price / 100) * $item->course_discount;
                                                $final_price = $item->course_price - $total_discount;
                                        ?>
                                                <span class="text-dark fw-bold">Rp. <?php echo number_format($final_price) ?></span> <del class="fs-4">Rp. <?php echo number_format($item->course_price) ?></del>
                                            <?php } else { ?>
                                                <span class="text-dark fw-bold">Rp. <?php echo number_format($item->course_price) ?></span>
                                            <?php }
                                        } else { ?>
                                            <span class="text-dark fw-bold">
                                                Gratis
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col ms-2">
                                            <span><?php echo $item->fullname ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-reset bookmark">
                                                <i class="fe fe-bookmark fs-4"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php endforeach; ?>

            <?php else : ?>
                <div class="alert alert-info" role="alert">
                    Belum ada kelas!
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>