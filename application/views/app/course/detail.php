 <style>
.scrollable {

    /* Lebar elemen */
    height: 600px;
    /* Tinggi elemen */
    overflow-y: scroll;
    /* Tambahkan scroll secara vertikal */
    /* border: 1px solid #ccc; */
    /* Opsional: untuk memberikan batas */
    padding: 10px;
    /* Opsional: untuk memberikan jarak di dalam elemen */
    background-color: rgb(249, 249, 252);
    /* Opsional: warna latar */
}
 </style>
 <!-- Page header -->
 <section class="pt-lg-8 pb-8 bg-custom">
     <div class="container pb-lg-8">
         <div class="row align-items-center">
             <div class="col-xl-12 col-lg-12 col-md-12">
                 <div>
                     <h1 class="text-white display-4 fw-semibold"><?php echo strtoupper($course->course_title) ?></M>
                     </h1>


                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Page content -->
 <section class="pb-8">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                 <!-- Card -->
                 <div class="card rounded-3">
                     <!-- Card header -->
                     <div class="card-header border-bottom-0 p-0">
                         <div>
                             <!-- Nav -->
                             <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                 <li class="nav-item">
                                     <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table"
                                         role="tab" aria-controls="table" aria-selected="true">Materi</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description"
                                         role="tab" aria-controls="description" aria-selected="false">
                                         Deskripsi
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" id="about-tab" data-bs-toggle="pill" href="#about" role="tab"
                                         aria-controls="about" aria-selected="false">
                                         Tentang Kursus
                                     </a>
                                 </li>


                             </ul>
                         </div>
                     </div>
                     <!-- Card Body -->
                     <div class="card-body">
                         <div class="tab-content" id="tabContent">
                             <div class="tab-pane fade show active" id="table" role="tabpanel"
                                 aria-labelledby="table-tab">
                                 <!-- Card -->
                                 <!-- List group -->
                                 <ul class="list-group list-group-flush">
                                     <li class="list-group-item px-0 pt-0">
                                         <!-- Toggle -->
                                         <a class="h4 mb-0 d-flex align-items-center active" href="#"
                                             aria-expanded="true" aria-controls="courseTwo">
                                             <div class="me-auto"><?php echo $course->course_title ?></div>

                                         </a>
                                         <!-- Row -->
                                         <!-- Collapse -->
                                         <div class="scrollable">
                                             <div class="pt-3 pb-2">
                                                 <?php foreach ($course_detail as $item) : ?>
                                                 <div
                                                     class="mb-2 d-flex justify-content-between align-items-center text-inherit">
                                                     <div class="text-truncate">
                                                         <span class="icon-shape bg-light icon-sm rounded-circle me-2">
                                                             <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                 height="12" fill="currentColor" class="bi bi-lock"
                                                                 viewBox="0 0 16 16">
                                                                 <path
                                                                     d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                                                             </svg>
                                                         </span>
                                                         <span><?php echo $item->course_detail_title ?></span>
                                                     </div>
                                                     <div class="text-truncate">
                                                         <span><?= $item->course_detail_duration ?></span>
                                                     </div>
                                                 </div>
                                                 <?php endforeach; ?>

                                             </div>
                                         </div>
                                     </li>

                                 </ul>
                             </div>
                             <div class="tab-pane fade" id="description" role="tabpanel"
                                 aria-labelledby="description-tab">
                                 <!-- Description -->
                                 <div class="mb-4">
                                     <h3 class="mb-2">Deskripsi Kursus</h3>
                                     <p>
                                         <?= $course->course_description ?>
                                     </p>

                                 </div>

                             </div>

                             <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                 <!-- Description -->
                                 <div class="mb-4">
                                     <h3 class="mb-2">Level Kursus</h3>
                                     <p>
                                         <i class="fe fe-check"></i> <?= $course->level_name ?>
                                     </p>

                                 </div>

                             </div>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-12 col-12 mt-lg-n8">
                 <!-- Card -->
                 <div class="card mb-3 mb-4">
                     <div class="p-1">
                         <div
                             class="d-flex justify-content-center align-items-center rounded border-white border rounded-3 bg-cover">
                             <img src="<?php echo base_url() ?>assets/course/<?php echo $course->course_banner ?>"
                                 class="img-fluid">
                         </div>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <!-- Price single page -->
                         <div class="mb-3">
                             <?php

                                if ($course->course_price > 0) {
                                    if ($course->course_discount > 0) {
                                        $total_discount = ($course->course_price / 100) * $course->course_discount;
                                        $final_price = $course->course_price - $total_discount;
                                        ?>
                             <span class="text-dark fw-bold">Rp. <?php echo number_format($final_price) ?></span> <del
                                 class="fs-4">Rp. <?php echo number_format($course->course_price) ?></del>
                             <?php } else { ?>
                             <span class="text-dark fw-bold">Rp.
                                 <?php echo number_format($course->course_price) ?></span>
                             <?php }
                             } else { ?>
                             <span class="text-dark fw-bold">
                                 Gratis
                             </span>
                             <?php } ?>
                         </div>
                         <div class="d-grid">
                             <?php if ($this->session->userdata('is_loggedin')) { ?>
                             <?php if ($is_purchased): ?>
                             <!-- Tampilkan tombol Beli Kursus jika belum dibeli -->
                             <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-primary">
                                 Dashboard
                             </a>

                             <?php else: ?>
                             <?php if ($this->session->userdata('role_id') == 3) : ?>
                             <form action="<?php echo base_url('course/page/purchase/buy') ?>" method="post">
                                 <!-- send data -->
                                 <input type="hidden" name="course_id" value="<?php echo $course->id ?>">
                                 <input type="hidden" name="course_creator_id" value="<?php echo $course->user_id ?>">
                                 
                                 <div class="d-grid gap-2">
                                     <button type="submit" class="btn bg-custom text-white mb-2">Beli Kelas</button>
                                 </div>
                             </form>
                             <?php endif; ?>
                             <?php endif; ?>
                             <?php } else { ?>
                             <a href="<?php echo base_url('page/account') ?>"
                                 class="btn bg-custom text-white mb-2">Silahkan Login untuk beli kelas.</a>

                             <?php } ?>
                         </div>
                     </div>
                 </div>
                 <!-- Card -->
                 <div class="card mb-4">
                     <div>
                         <!-- Card header -->
                         <div class="card-header">
                             <h4 class="mb-0">Kursus Termasuk</h4>
                         </div>
                         <ul class="list-group list-group-flush">
                             <li class="list-group-item bg-transparent">
                                 <i class="fe fe-play-circle align-middle me-2 text-primary"></i>
                                 <?= $totalDuration ?> video
                             </li>

                             <li class="list-group-item bg-transparent border-bottom-0">
                                 <i class="fe fe-clock align-middle me-2 text-warning"></i>
                                 Akses Selamanya
                             </li>
                         </ul>
                     </div>
                 </div>

             </div>
         </div>

     </div>
 </section>