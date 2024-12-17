 <!-- Page header -->
 <section class="pt-lg-8 pb-8 bg-custom">
     <div class="container pb-lg-8">
         <div class="row align-items-center">
             <div class="col-xl-7 col-lg-7 col-md-12">
                 <div>
                     <h1 class="text-white display-4 fw-semibold"><?php echo strtoupper($course->course_title) ?></M>
                     </h1>
                     <p class="text-white mb-6 lead">
                         <?php echo $course->course_description ?>
                     </p>
                     <div class="d-flex align-items-center">

                         <span class="text-warning ms-3">
                             <i class="fe fe-user"></i>
                             1200 Enrolled
                         </span>

                         <span class="text-white ms-4 d-none d-md-block">

                             <span class="align-middle"><i class="fe fe-check"></i> <?= $course->level_name ?></span>
                         </span>
                     </div>
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
                                     <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table" role="tab" aria-controls="table" aria-selected="true">Contents</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">
                                         Description
                                     </a>
                                 </li>


                             </ul>
                         </div>
                     </div>
                     <!-- Card Body -->
                     <div class="card-body">
                         <div class="tab-content" id="tabContent">
                             <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                                 <!-- Card -->
                                 <!-- List group -->
                                 <ul class="list-group list-group-flush">
                                     <li class="list-group-item px-0 pt-0">
                                         <!-- Toggle -->
                                         <a class="h4 mb-0 d-flex align-items-center active" href="#" aria-expanded="true" aria-controls="courseTwo">
                                             <div class="me-auto"><?php echo $course->course_title ?></div>

                                         </a>
                                         <!-- Row -->
                                         <!-- Collapse -->
                                         <div class="collapse show" id="courseTwo" data-bs-parent="#courseAccordion">
                                             <div class="pt-3 pb-2">
                                                 <?php foreach ($course_detail as $item) : ?>
                                                     <div class="mb-2 d-flex justify-content-between align-items-center text-inherit">
                                                         <div class="text-truncate">
                                                             <span class="icon-shape bg-light icon-sm rounded-circle me-2">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                                     <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
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
                             <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                 <!-- Description -->
                                 <div class="mb-4">
                                     <h3 class="mb-2">Deskripsi Kursus</h3>
                                     <p>
                                         <?= $course->course_description ?>
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
                         <div class="d-flex justify-content-center align-items-center rounded border-white border rounded-3 bg-cover">
                             <img src="<?php echo base_url() ?>assets/course/<?php echo $course->course_banner ?>" class="img-fluid">
                         </div>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <!-- Price single page -->
                         <div class="mb-3">
                             <span class="text-dark fw-bold h2"> <?php echo ($course->course_price == 0) ? 'Gratis' : 'Rp. ' . number_format($discount) ?></span>
                             <?php if ($discount > 0) : ?>
                                 <del class="fs-4">Rp. <?php echo number_format($course->course_price) ?></del>
                             <?php endif; ?>
                         </div>
                         <div class="d-grid">
                             <a href="#" class="btn bg-custom text-white mb-2">Beli Kelas</a>
                             <a href="<?php echo base_url('page/student/lecture/' . $course->id) ?>" class="btn btn-outline-custom">Masuk Kelas</a>
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
                             <!-- <li class="list-group-item bg-transparent">
                                 <i class="fe fe-award me-2 align-middle text-success"></i>
                                 Certificate
                             </li>
                             <li class="list-group-item bg-transparent">
                                 <i class="fe fe-calendar align-middle me-2 text-info"></i>
                                 12 Article
                             </li>
                             <li class="list-group-item bg-transparent">
                                 <i class="fe fe-video align-middle me-2 text-secondary"></i>
                                 Watch Offline
                             </li> -->
                             <li class="list-group-item bg-transparent border-bottom-0">
                                 <i class="fe fe-clock align-middle me-2 text-warning"></i>
                                 Akses Selamanya
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!-- Card -->
                 <div class="card">
                     <!-- Card body -->
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div class="position-relative">
                                 <img src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle avatar-xl">
                                 <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" title="Verifed">
                                     <img src="<?php echo base_url() ?>assets/images/svg/checked-mark.svg" alt="checked-mark" height="30" width="30">
                                 </a>
                             </div>
                             <div class="ms-4">
                                 <h4 class="mb-0">Jenny Wilson</h4>
                                 <p class="mb-1 fs-6">Front-end Developer, Designer</p>
                                 <p class="fs-6 mb-1 d-flex align-items-center">
                                     <span class="text-warning">4.5</span>
                                     <span class="mx-1">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                         </svg>
                                     </span>
                                     Instructor Rating
                                 </p>
                             </div>
                         </div>
                         <div class="border-top row mt-3 border-bottom mb-3 g-0">
                             <div class="col">
                                 <div class="pe-1 ps-2 py-3">
                                     <h5 class="mb-0">11,604</h5>
                                     <span>Students</span>
                                 </div>
                             </div>
                             <div class="col border-start">
                                 <div class="pe-1 ps-3 py-3">
                                     <h5 class="mb-0">32</h5>
                                     <span>Courses</span>
                                 </div>
                             </div>
                             <div class="col border-start">
                                 <div class="pe-1 ps-3 py-3">
                                     <h5 class="mb-0">12,230</h5>
                                     <span>Reviews</span>
                                 </div>
                             </div>
                         </div>
                         <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative
                             resident at Figma explored the city of the future and how new technologies.</p>
                         <a href="instructor-profile.html" class="btn btn-outline-secondary btn-sm">View
                             Details</a>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>