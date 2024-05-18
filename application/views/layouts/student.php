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

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css" />

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/index.html" />
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
                                        <a href="# ">
                                            <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                                        </a>
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
                                                                        2 hours ago,
                                                                    </span>
                                                                    <span class="ms-1">2:19 PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-auto text-center me-2">
                                                    <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                                                    <div>
                                                        <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                            <i class="fe fe-x"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="./pages/notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown ms-2 d-inline-block position-static">
                            <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="<?php echo base_url() ?>assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0">annette@geeksui.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="dropdown-submenu dropstart-lg">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            <i class="fe fe-circle me-2"></i>
                                            Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-success me-2"></span>
                                                    Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-secondary me-2"></span>
                                                    Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-warning me-2"></span>
                                                    Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-danger me-2"></span>
                                                    Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/profile-edit.html">
                                            <i class="fe fe-user me-2"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/student-subscriptions.html">
                                            <i class="fe fe-star me-2"></i>
                                            Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fe fe-settings me-2"></i>
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="./index.html">
                                            <i class="fe fe-power me-2"></i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Browse</a>
                            <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Bootstrap</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">React</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">GraphQl</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Gatsby</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Grunt</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Svelte</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Meteor</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">HTML5</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Angular</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Graphic Design</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Illustrator</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">UX / UI Design</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Figma Design</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Adobe XD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Sketch</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Icon Design</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Photoshop</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Mobile App</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">IT Software</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Marketing</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Music</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Life Style</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Business</a>
                                </li>
                                <li>
                                    <a href="./pages/course-category.html" class="dropdown-item">Photography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                                <li>
                                    <h4 class="dropdown-header">Landings</h4>
                                </li>

                                <li>
                                    <a href="./pages/landings/landing-education.html" class="dropdown-item justify-content-between">Education</a>
                                </li>
                                <li>
                                    <a href="./pages/landings/home-academy.html" class="dropdown-item justify-content-between">Home Academy</a>
                                </li>
                                <li>
                                    <a href="./pages/landings/landing-courses.html" class="dropdown-item">Courses</a>
                                </li>
                                <li>
                                    <a href="./pages/landings/course-lead.html" class="dropdown-item">Lead Course</a>
                                </li>
                                <li>
                                    <a href="./pages/landings/request-access.html" class="dropdown-item">Request Access</a>
                                </li>
                                <li>
                                    <a href="./pages/landings/landing-sass.html" class="dropdown-item">SaaS</a>
                                </li>

                                <li>
                                    <a href="./pages/landings/landing-job.html" class="dropdown-item justify-content-between">Job Listing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-single.html">Course Single</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-single-v2.html">Course Single v2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-resume.html">Course Resume</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-category.html">Course Category</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-checkout.html">Course Checkout</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/course-filter-list.html">Course List/Grid</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/add-course.html">Add New Course</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="./pages/course-path.html" class="dropdown-item">Browse Path</a>
                                        </li>
                                        <li>
                                            <a href="./pages/course-path-single.html" class="dropdown-item">Path Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/blog.html">Listing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/blog-single.html">Article</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/blog-category.html">Category</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/blog-sidebar.html">Sidebar</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/career.html">Overview</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/career-list.html">Listing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/career-single.html">Opening</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/portfolio.html">List</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/portfolio-single.html">Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/landings/landing-job.html">Home</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/jobs/job-listing.html">List</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/jobs/job-grid.html">Grid</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/jobs/job-single.html">Single</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/jobs/company-list.html">Company List</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/jobs/company-about.html">Company Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/404-error.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/maintenance-mode.html">Maintenance Mode</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/terms-condition-page.html">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="mx-3" />
                                </li>

                                <li>
                                    <a class="dropdown-item" href="./pages/about.html">About</a>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="./pages/help-center.html">Help Center</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/help-center-faq.html">FAQ's</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/help-center-guide.html">Guide</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/help-center-guide-single.html">Guide Single</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/help-center-support.html">Support</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/compare-plan.html">Compare Plan</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="./pages/contact.html">Contact</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                            <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                                <li>
                                    <h4 class="dropdown-header">Accounts</h4>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Instructor</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-wrap">
                                            <h5 class="dropdown-header text-dark">Instructor</h5>
                                            <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                                        </li>
                                        <li>
                                            <hr class="mx-3" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/dashboard-instructor.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-courses.html">My Courses</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-order.html">Orders</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-reviews.html">Reviews</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-students.html">Students</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-payouts.html">Payouts</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/instructor-earning.html">Earning</a>
                                        </li>
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                Quiz
                                                <span class="badge bg-primary ms-1">New</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="./pages/instructor-quiz.html">Quiz</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="./pages/instructor-quiz-details.html">Single</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="./pages/instructor-quiz-result.html">Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Students</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-wrap">
                                            <h5 class="dropdown-header text-dark">Students</h5>
                                            <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                                        </li>
                                        <li>
                                            <hr class="mx-3" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/dashboard-student.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/student-subscriptions.html">Subscriptions</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/payment-method.html">Payments</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/billing-info.html">Billing Info</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/invoice-details.html">Invoice Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/dashboard-student.html">Bookmarked</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/dashboard-student.html">My Path</a>
                                        </li>
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                Quiz
                                                <span class="badge bg-primary ms-1">New</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="./pages/student-quiz.html">Quiz</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="./pages/student-quiz-attempt.html">Attempt</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="./pages/student-quiz-start.html">Start</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="./pages/student-quiz-result.html">Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-wrap">
                                            <h5 class="dropdown-header text-dark">Master Admin</h5>
                                            <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                                        </li>
                                        <li>
                                            <hr class="mx-3" />
                                        </li>
                                        <li class="px-3 d-grid">
                                            <a href="./pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="mx-3" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/sign-in.html">Sign In</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/sign-up.html">Sign Up</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/forget-password.html">Forgot Password</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/profile-edit.html">Edit Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/security.html">Security</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/social-profile.html">Social Profiles</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/profile-privacy.html">Privacy Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/delete-profile.html">Delete Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/linked-accounts.html">Linked Accounts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action border-0" href="./docs/index.html">
                                        <div class="d-flex align-items-center">
                                            <i class="fe fe-file-text fs-3 text-primary"></i>
                                            <div class="ms-3">
                                                <h5 class="mb-0">Documentations</h5>
                                                <p class="mb-0 fs-6">Browse the all documentation</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0" href="./docs/bootstrap-5-snippets.html">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-files fs-3 text-primary"></i>
                                            <div class="ms-3">
                                                <h5 class="mb-0">Snippet</h5>
                                                <p class="mb-0 fs-6">Bunch of Snippet</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0" href="./docs/changelog.html">
                                        <div class="d-flex align-items-center">
                                            <i class="fe fe-layers fs-3 text-primary"></i>
                                            <div class="ms-3">
                                                <h5 class="mb-0">
                                                    Changelog
                                                    <span class="text-primary ms-1" id="changelog"></span>
                                                </h5>
                                                <p class="mb-0 fs-6">See what's new</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0" href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
                                        <div class="d-flex align-items-center">
                                            <i class="fe fe-toggle-right fs-3 text-primary"></i>
                                            <div class="ms-3">
                                                <h5 class="mb-0">RTL demo</h5>
                                                <p class="mb-0 fs-6">RTL Pages</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                        <span class="position-absolute ps-3 search-icon">
                            <i class="fe fe-search"></i>
                        </span>
                        <label for="search" class="visually-hidden"></label>
                        <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
                    </form>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <?php $this->load->view($content_student) ?>
        <!--End Page Content -->

    </main>

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