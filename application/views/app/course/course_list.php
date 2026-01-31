<section>
    <!-- row -->
    <div class="container mb-lg-8 mt-5">
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="mb-6">
                    <h2 class="mb-1 h1">Kuasai Skill Paling Dicari</h2>
                    <p>Jelajahi kurikulum yang disusun sesuai dengan kebutuhan industri saat ini untuk mempersiapkan
                        karier masa depan Anda.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-lb-tab mb-6 bg-gray-200 px-5 rounded-3" id="pills-tab" role="tablist">
                    <?php foreach ($categories as $index => $cat) :
                        // Set tab pertama sebagai aktif secara default
                        $active_class = ($index === 0) ? 'active' : '';
                        ?>
                    <li class="nav-item ms-0" role="presentation">
                        <a class="nav-link <?php echo $active_class; ?>" id="pills-cat-<?php echo $cat->id; ?>-tab"
                            data-bs-toggle="pill" href="#pills-cat-<?php echo $cat->id; ?>" role="tab"
                            aria-controls="pills-cat-<?php echo $cat->id; ?>"
                            aria-selected="<?php echo ($index === 0) ? 'true' : 'false'; ?>">
                            <?php echo $cat->category_name; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <?php foreach ($categories as $index => $cat) :
                        // Set konten tab pertama sebagai aktif
                        $show_active = ($index === 0) ? 'show active' : '';
                        ?>
                    <div class="tab-pane fade <?php echo $show_active; ?>" id="pills-cat-<?php echo $cat->id; ?>"
                        role="tabpanel" aria-labelledby="pills-cat-<?php echo $cat->id; ?>-tab">

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            <?php
                                    // Filter kursus: Hanya tampilkan jika category_id kursus sama dengan id kategori saat ini
                                    $has_course = false;
                        foreach ($course as $item) :
                            if ($item->course_status == 1 && $item->category_id == $cat->id) :
                                $has_course = true;
                                ?>
                            <div class="col">
                                <div class="card card-hover">
                                    <a href="<?php echo base_url('page/course/detail/' . $item->id) ?>">
                                        <img src="<?php echo base_url() ?>assets/course/<?php echo $item->course_banner ?>"
                                            alt="course" class="card-img-top" />
                                    </a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="badge bg-info-soft"><?php echo $item->level_name ?></span>
                                            <a href="#" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                                        </div>
                                        <h4 class="mb-2">
                                            <a href="<?php echo base_url('page/course/detail/' . $item->id) ?>"
                                                class="text-inherit">
                                                <?php echo $item->course_title ?>
                                            </a>
                                        </h4>
                                        <small>By: <?php echo $item->fullname ?></small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col">
                                                <?php if ($item->course_price > 0) {
                                                    if ($item->course_discount > 0) {
                                                        $total_discount = ($item->course_price / 100) * $item->course_discount;
                                                        $final_price = $item->course_price - $total_discount;
                                                        ?>
                                                <span class="text-dark fw-bold">Rp.
                                                    <?php echo number_format($final_price) ?></span>
                                                <?php } else { ?>
                                                <span class="text-dark fw-bold">Rp.
                                                    <?php echo number_format($item->course_price) ?></span>
                                                <?php }
                                                } else { ?>
                                                <span class="text-dark fw-bold">Gratis</span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endif;
                        endforeach;
                        ?>

                            <?php if (!$has_course) : ?>
                            <div class="col-12">
                                <div class="alert alert-light" role="alert">
                                    Belum ada kelas untuk kategori ini.
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>