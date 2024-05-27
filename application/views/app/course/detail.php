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
                         <a href="#" class="bookmark text-white">
                             <i class="fe fe-bookmark fs-4 me-2"></i>
                             Bookmark
                         </a>

                         <span class="text-white ms-3">
                             <i class="fe fe-user"></i>
                             1200 Enrolled
                         </span>
                         <div>
                             <span class="fs-6 ms-4 align-text-top">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                     </path>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                     </path>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                     </path>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                     </path>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                 </svg>
                             </span>
                             <span class="text-white">(140)</span>
                         </div>
                         <span class="text-white ms-4 d-none d-md-block">
                             <svg width="16" height="16" viewBox="0 0 16
                              16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
                                 <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                 <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                             </svg>
                             <span class="align-middle">Intermediate</span>
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
                                 <li class="nav-item">
                                     <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
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
                                                             <span>1m 7s</span>
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
                                     <h3 class="mb-2">Course Descriptions</h3>
                                     <p>
                                         If you’re learning to program for the first time, or if you’re coming
                                         from a different language, this course, JavaScript: Getting Started,
                                         will give
                                         you the basics for coding in JavaScript. First, you'll discover the
                                         types of applications that can be built with JavaScript, and the
                                         platforms
                                         they’ll run on.
                                     </p>
                                     <p>
                                         Next, you’ll explore the basics of the language, giving plenty of
                                         examples. Lastly, you’ll put your JavaScript knowledge to work and
                                         modify a
                                         modern, responsive web page. When you’re finished with this course,
                                         you’ll have the skills and knowledge in JavaScript to create simple
                                         programs,
                                         create simple web applications, and modify web pages.
                                     </p>
                                 </div>
                                 <h4 class="mb-3">What you’ll learn</h4>
                                 <div class="row mb-3">
                                     <div class="col-12 col-md-6">
                                         <ul class="list-unstyled">
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Recognize the importance of understanding your objectives
                                                     when addressing an audience.</span>
                                             </li>
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Identify the fundaments of composing a successful
                                                     close.</span>
                                             </li>
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Explore how to connect with your audience through crafting
                                                     compelling stories.</span>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <ul class="list-unstyled">
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Examine ways to connect with your audience by
                                                     personalizing your content.</span>
                                             </li>
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Break down the best ways to exude executive
                                                     presence.</span>
                                             </li>
                                             <li class="d-flex mb-2">
                                                 <span class="me-2">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                     </svg>
                                                 </span>
                                                 <span>Explore how to communicate the unknown in an impromptu
                                                     communication.</span>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <p>Maecenas viverra condimentum nulla molestie condimentum. Nunc ex libero,
                                     feugiat quis lectus vel, ornare euismod ligula. Aenean sit amet arcu nulla.
                                 </p>
                                 <p>
                                     Duis facilisis ex a urna blandit ultricies. Nullam sagittis ligula non eros
                                     semper, nec mattis odio ullamcorper. Phasellus feugiat sit amet leo eget
                                     consectetur.
                                 </p>
                             </div>
                             <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                 <!-- Reviews -->
                                 <div class="mb-3">
                                     <h3 class="mb-4">How students rated this courses</h3>
                                     <div class="row align-items-center">
                                         <div class="col-auto text-center">
                                             <h3 class="display-2 fw-bold">4.5</h3>
                                             <span class="fs-6">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                 </svg>
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                 </svg>
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                 </svg>
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                 </svg>
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                 </svg>
                                             </span>
                                             <p class="mb-0 fs-6">(Based on 27 reviews)</p>
                                         </div>
                                         <!-- Progress Bar -->
                                         <div class="col order-3 order-md-2">
                                             <div class="progress mb-3" style="height: 6px">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <div class="progress mb-3" style="height: 6px">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <div class="progress mb-3" style="height: 6px">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <div class="progress mb-3" style="height: 6px">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <div class="progress mb-0" style="height: 6px">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                         </div>
                                         <div class="col-md-auto col-6 order-2 order-md-3">
                                             <!-- Rating -->
                                             <div>
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                                 <span class="ms-1">53%</span>
                                             </div>
                                             <div>
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                                 <span class="ms-1">36%</span>
                                             </div>
                                             <div>
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                                 <span class="ms-1">9%</span>
                                             </div>
                                             <div>
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                                 <span class="ms-1">3%</span>
                                             </div>
                                             <div>
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                                 <span class="ms-1">2%</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <hr class="my-5">
                                 <div class="mb-3">
                                     <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                         <!-- Reviews -->
                                         <div class="mb-3 mb-lg-0">
                                             <h3 class="mb-0">Reviews</h3>
                                         </div>
                                         <div>
                                             <form class="form-inline">
                                                 <div class="d-flex align-items-center me-2">
                                                     <span class="position-absolute ps-3">
                                                         <i class="fe fe-search"></i>
                                                     </span>
                                                     <input type="search" class="form-control ps-6" placeholder="Search Review">
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                     <!-- Rating -->
                                     <div class="d-flex align-items-start border-bottom pb-4 mb-4">
                                         <img src="<?php echo base_url() ?>assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-lg">
                                         <div class="ms-3">
                                             <h4 class="mb-1">
                                                 Max Hawkins
                                                 <span class="ms-1 fs-6">2 Days ago</span>
                                             </h4>
                                             <div class="mb-2">
                                                 <span class="fs-6">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                     </svg>
                                                 </span>
                                             </div>
                                             <p>
                                                 Lectures were at a really good pace and I never felt lost. The
                                                 instructor was well informed and allowed me to learn and
                                                 navigate Figma
                                                 easily.
                                             </p>
                                             <div class="d-lg-flex">
                                                 <p class="mb-0">Was this review helpful?</p>
                                                 <a href="#" class="btn btn-xs btn-primary ms-lg-3">Yes</a>
                                                 <a href="#" class="btn btn-xs btn-outline-secondary ms-1">No</a>
                                             </div>
                                         </div>
                                     </div>

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
                         <div class="d-flex justify-content-center align-items-center rounded border-white border rounded-3 bg-cover" style="background-image: url(<?php echo base_url() ?>assets/course/<?php echo $course->course_banner ?>); height: 210px">
                             <a class="glightbox icon-shape rounded-circle btn-play icon-xl" target="_blank" href="https://www.youtube.com/watch?v=<?php echo $course->course_preview ?>">
                                 <i class="fe fe-play"></i>
                             </a>
                         </div>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <!-- Price single page -->
                         <div class="mb-3">
                             <span class="text-dark fw-bold h2">Rp. <?php echo number_format($discount) ?></span>
                             <del class="fs-4">Rp. <?php echo number_format($course->course_price) ?></del>
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
                             <h4 class="mb-0">What’s included</h4>
                         </div>
                         <ul class="list-group list-group-flush">
                             <li class="list-group-item bg-transparent">
                                 <i class="fe fe-play-circle align-middle me-2 text-primary"></i>
                                 12 hours video
                             </li>
                             <li class="list-group-item bg-transparent">
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
                             </li>
                             <li class="list-group-item bg-transparent border-bottom-0">
                                 <i class="fe fe-clock align-middle me-2 text-warning"></i>
                                 Lifetime access
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