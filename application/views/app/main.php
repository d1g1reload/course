 <section class="py-lg-8 py-5">
     <!-- container -->
     <div class="container my-lg-8">
         <!-- row -->
         <div class="row align-items-center">
             <!-- col -->
             <div class="col-lg-6 mb-6 mb-lg-0">
                 <div>
                     <!-- heading -->
                     <h5 class="text-dark mb-4">
                         <i
                             class="fe fe-check icon-xxs icon-shape bg-light-success text-success rounded-circle me-2"></i>
                         Kursus Online Terlengkap & Terjangkau
                     </h5>
                     <!-- heading -->
                     <h1 class="display-3 fw-bold mb-3">Belajar Apapun, Kapanpun, Di Mana Pun.</h1>
                     <!-- para -->
                     <p class="pe-lg-10 mb-5">
                         Tingkatkan skill Anda dengan kurikulum yang disusun khusus untuk pemula hingga profesional.
                         Akses selamanya hanya di Eduhost.
                     </p>
                     <!-- btn -->
                     <a href="<?php echo base_url('page/account/register') ?>" class="btn btn-primary">Daftar
                         Sekarang</a>

                 </div>
             </div>
             <!-- col -->
             <div class="col-lg-6 d-flex justify-content-center">
                 <!-- images -->
                 <div class="position-relative">
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/bg-thumb.svg" alt="img" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/girl-image.png" alt="girl"
                         class="w-100 w-md-auto position-absolute end-0 bottom-0" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/frame-1.svg" alt="frame"
                         class="position-absolute top-0 ms-n8 d-none d-md-inline-block" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/frame-2.svg" alt="frame"
                         class="position-absolute bottom-0 start-0 ms-lg-n8 ms-n6 mb-n7 d-none d-md-inline-block" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/target.svg" alt="target"
                         class="position-absolute bottom-0 mb-8 ms-n8 ms-lg-n1 d-none d-md-inline-block" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/sound.svg" alt="sound"
                         class="position-absolute top-50 mt-n8 ms-n8 d-none d-md-inline-block" style="left: -100px" />
                     <img src="<?php echo base_url() ?>/assets/images/background/acedamy-img/trophy.svg" alt="trophy"
                         class="position-absolute top-0 start-0 ms-n8 d-none d-md-inline-block" />
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- container -->
 <section class="pb-8">
     <div class="container mb-lg-8">
         <!-- row -->
         <div class="row">
             <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-md">
                 <!-- text -->
                 <div class="py-7 text-center">
                     <div class="mb-3">
                         <i class="fe fe-award fs-2 text-info"></i>
                     </div>
                     <div class="lh-1">
                         <h2 class="mb-1">50+</h2>
                         <span>Instruktur Terkurasi</span>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-lg">
                 <!-- icon -->
                 <div class="py-7 text-center">
                     <div class="mb-3">
                         <i class="fe fe-users fs-2 text-warning"></i>
                     </div>
                     <!-- text -->
                     <div class="lh-1">
                         <h2 class="mb-1">Akses 24/7</h2>
                         <span>Belajar Kapan Saja</span>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 border-top-lg border-bottom border-end-md">
                 <!-- icon -->
                 <div class="py-7 text-center">
                     <div class="mb-3">
                         <i class="fe fe-tv fs-2 text-primary"></i>
                     </div>
                     <!-- text -->
                     <div class="lh-1">
                         <h2 class="mb-1">10+</h2>
                         <span>Modul Kursus Siap Pakai</span>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 border-top-lg border-bottom">
                 <!-- icon -->
                 <div class="py-7 text-center">
                     <div class="mb-3">
                         <i class="fe fe-film fs-2 text-success"></i>
                     </div>
                     <!-- text -->
                     <div class="lh-1">
                         <h2 class="mb-1">100+</h2>
                         <span>Materi Video Berkualitas</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section>
     <!-- row -->
     <div class="container mb-lg-8">
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
                 <ul class="nav nav-lb-tab mb-6 px-5 rounded-3 bg-gray" id="pills-tab" role="tablist">
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
 <!-- section -->
 <section class="my-8 py-lg-8">
     <!-- container -->
     <div class="container">
         <!-- row -->
         <div class="row align-items-center bg-primary gx-0 rounded-3">
             <!-- col -->
             <div class="col-lg-6 col-12 d-none d-lg-block">
                 <div class="d-flex justify-content-center">
                     <!-- img -->
                     <div class="position-relative">
                         <img src="<?php echo base_url() ?>/assets/images/png/cta-instructor-1.png" alt="image"
                             class="img-fluid mt-n8" />
                         <div class="ms-n8 position-absolute bottom-0 start-0 mb-6">
                             <img src="<?php echo base_url() ?>/assets/images/svg/dollor.svg" alt="dollor" />
                         </div>
                         <!-- img -->
                         <div class="me-n4 position-absolute top-0 end-0">
                             <img src="<?php echo base_url() ?>/assets/images/svg/graph.svg" alt="graph" />
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-5 col-12">
                 <div class="text-white p-5 p-lg-0">
                     <!-- text -->
                     <h2 class="h1 text-white">Jadilah Bagian dari Perjalanan Eduhost</h2>
                     <p class="mb-0">Bagikan keahlian Anda dan bantu ribuan pembelajar mencapai potensi terbaik mereka.
                         Kami menyediakan platform yang mudah digunakan dan dukungan penuh untuk membantu Anda mulai
                         mengajar online hari ini.</p>
                     <a href="<?php echo base_url('page/account/register') ?>" class="btn btn-white mt-4">Mulai Mengajar
                         Sekarang</a>
                 </div>
             </div>
         </div>
     </div>
 </section>