<style>
    .yt {
        margin: 0 auto;
        display: block;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-lg-3 col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #092F51;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="<?php echo base_url('page/student/lecture/' . $course->id) ?>" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Materi Kelas </span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <?php foreach ($lesson as $item) : ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('page/student/lecture/' . $item->course_id . '/' . $item->detail_id) ?>" class="nav-link text-white align-middle px-0">
                                <i class="fs-4 bi-chevron-right"></i> <span class="ms-1 d-none d-sm-inline"><?php echo $item->course_detail_name ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>
        </div>
        <div class="col-md-9">
            <div class="row mt-3">
                <h1 class="text-center">Welcome</h1>
            </div>


        </div>
    </div>
</div>