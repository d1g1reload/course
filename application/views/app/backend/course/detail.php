<?php
if ($course->course_status == "0") {
    $status = '<span class="badge bg-danger">Draft</span>';
} elseif ($course->course_status == "1") {
    $status = '<span class="badge bg-success">Publish</span>';
}
?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4 mb-lg-0">
            <div class="card-body p-5">

                <div class="mb-5">
                    <h2 class="fw-bold">Detail Kursus Anda</h2>
                    <?php if ($this->session->flashdata('failed')) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
                        <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                </div>

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
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-2">
                        + Materi Kursus
                    </button>

                    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Materi Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo base_url('course/preview') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="textInput">Kode Youtube</label>
                                            <input type="text" name="video_val" class="form-control"
                                                placeholder="Contoh: dQw4w9WgXcQ" required>
                                            <input type="hidden" name="course_id" value="<?php echo $course->id ?>">

                                            <input type="hidden" name="order_value" id="input_add_order" value="0">
                                        </div>
                                    </div>
                                    <div class=" modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-info">Lanjutkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table" id="detail_kursus">
                            <thead>
                                <tr>
                                    <th>Judul Video</th>
                                    <th>Urutan Video</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $last_course_order = 0; // Inisialisasi awal
foreach ($course_detail as $val) {
    $last_course_order = $val->course_order; // Simpan urutan terakhir
    ?>
                                <tr>
                                    <td><?php echo strtoupper($val->course_detail_title) ?></td>
                                    <td><?php echo $val->course_order ?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal-<?php echo $val->detail_id; ?>">
                                            Edit Materi
                                        </button>

                                        <div class="modal fade" id="editModal-<?php echo $val->detail_id; ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Materi
                                                            Kursus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?php echo base_url('course/preview/update') ?>"
                                                        method="post">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Judul Video Saat Ini</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo strtoupper($val->course_detail_title) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Kode Youtube</label>
                                                                <input type="text" name="video_val" class="form-control"
                                                                    value="<?php echo $val->course_detail_video_code ?>"
                                                                    required>
                                                                <small class="text-muted">Ganti kode jika ingin mengubah
                                                                    video.</small>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Urutan Video</label>
                                                                <input type="number" name="order_value"
                                                                    class="form-control"
                                                                    value="<?php echo $val->course_order ?>">
                                                            </div>

                                                            <input type="hidden" name="course_id"
                                                                value="<?php echo $course->id ?>">
                                                            <input type="hidden" name="detail_id"
                                                                value="<?php echo $val->detail_id ?>">

                                                        </div>
                                                        <div class=" modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit"
                                                                class="btn btn-info">Lanjutkan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?php echo base_url('course/content/delete/' . $val->detail_id . '/' . $course->id) ?>"
                                            class="btn btn-outline-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini? Urutan materi lain akan disesuaikan otomatis.')">
                                            <i class="fe fe-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <input type="hidden" id="last_order_system"
                            value="<?php echo(empty($last_course_order) ? 0 : $last_course_order); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>