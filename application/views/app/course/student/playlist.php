<style>
    .yt {
        margin: 0 auto;
        display: block;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-lg-3 col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
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
                <div class="col-12">
                    <button type="button" class="btn btn-info"><i class="fs-4 bi-check"></i> Tandai Sudah Selesai</button>
                </div>
            </div>

            <div class="row  mt-3">
                <div class="col-12">
                    <h4><?php echo $detail_lesson->course_detail_name ?></h4>
                    <div class="yt">
                        <iframe width="100%" height="500" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#discuss" class="btn btn-dark"><i class="fs-4 bi-chat-dots"></i> Diskusi</button>
                    <!-- Modal -->
                    <div class="modal fade" id="discuss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Diskusi Materi <?php echo $detail_lesson->course_detail_name ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-md-12">
                    <!-- card body -->
                    <div class="card mb-3">
                        <div class="card-body">
                            Belum ada komentar.
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5>John Doe</h5>
                            <p>10-10-2024 08:00</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>