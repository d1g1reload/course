<section class="bg-custom">
    <div class="container">
        <!-- Hero Section -->
        <div class="row align-items-center g-0">
            <div class="col-xl-12 col-lg-12 col-md-12 mt-5 mb-5">
                <div class="py-7 py-lg-0">
                    <h1 class="text-white display-4 fw-bold">Welcome to Geeks UI Learning Application</h1>
                    <p class="text-white-50 mb-4 lead">Hand-picked Instructor and expertly crafted courses, designed for the modern students and entrepreneur.</p>
                    <a href="pages/course-filter-list.html" class="btn btn-dark">Kelas</a>
                    <a href="pages/sign-in.html" class="btn btn-white">Daftar Instruktur?</a>
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
                        <h4 class="mb-0 fw-semibold">30,000 online courses</h4>
                        <p class="mb-0">Enjoy a variety of fresh topics</p>
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
                        <h4 class="mb-0 fw-semibold">Expert instruction</h4>
                        <p class="mb-0">Find the right instructor for you</p>
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
                        <h4 class="mb-0 fw-semibold">Lifetime access</h4>
                        <p class="mb-0">Learn on your schedule</p>
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
                <h2 class="mb-0">Recommended to you</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($course as $item) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 card-hover">
                        <a href="<?php echo base_url('page/course/detail/' . $item->id) ?>"><img src="<?php echo base_url() ?>assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="<?php echo base_url('page/course/detail/' . $item->id) ?>" class="text-inherit"><?php echo $item->course_title ?></a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </span>
                                    <span>3h 56m</span>
                                </li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg>
                                    Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span class="align-text-top">
                                    <span class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6">(7,700)</span>
                            </div>
                            <!-- Price -->
                            <div class="lh-1 mt-3">
                                <span class="text-dark fw-bold">$600</span>
                                <del class="fs-6">$750</del>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                </div>
                                <div class="col ms-2">
                                    <span>Morris Mccoy</span>
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

            <?php endforeach; ?>

        </div>
    </div>
</section>