<?php
if ($course->course_status == "0") {
    $status = '<span class="badge bg-danger">Draft</span>';
} elseif ($course->course_status == "1") {
    $status = '<span class="badge bg-success">Publish</span>';
}
?>

<div class="row">
    <div class="col-12">
        <!-- card -->
        <div class="card mb-4 mb-lg-0">
            <!-- card body -->
            <div class="card-body p-5">

                <div class="mb-5">
                    <!-- heading -->
                    <h2 class="fw-bold">Detail Kursus Anda</h2>
                    <?php if ($this->session->flashdata('failed')) : ?>

                        <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
                            <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-hover table-lg fs-4">
                        <tbody>
                            <tr>
                                <td>Judul Kursus</td>
                                <td>:</td>
                                <td><?php echo strtoupper($course->course_title) ?></td>
                            </tr>
                            <tr>
                                <td>Status Kursus</td>
                                <td>:</td>
                                <td><?php echo $status ?></td>
                            </tr>
                            <tr>
                                <td>Waktu Kursus Dibuat</td>
                                <td>:</td>
                                <td><?php echo $course->course_create ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="col-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                        + Materi Kursus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Masukan kode video Youtube anda.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo base_url('course/preview') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="textInput">Kode Youtube</label>
                                            <input type="text" name="video_val" class="form-control" placeholder="Masukan Kode Youtube anda." required>
                                            <input type="hidden" name="course_id" value="<?php echo $course->id ?>">
                                            <input type="hidden" name="order_value" value="0">

                                        </div>
                                    </div>
                                    <div class=" modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-info">Lanjutkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <input type="text" name="order_value" value="0"> -->
                    <!-- Kontent detail materi -->

                    <div class="table-responsive">
                        <table class="table" id="detail_kursus">
                            <thead>
                                <tr>
                                    <th>Judul Video</th>
                                    <th>Urutan Video</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($course_detail as $val) {
                                    $last_course_order = $val->course_order;
                                ?>
                                    <tr>
                                        <td><?php echo strtoupper($val->course_detail_title) ?></td>
                                        <td><?php echo $val->course_order ?></td>
                                        <td>
                                            <a class="link-warning" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a class="link-danger" href="#">
                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                        <input type="hidden" id="val_order" value="<?php echo (empty($last_course_order) ? 0 : $last_course_order); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>