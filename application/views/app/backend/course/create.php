<section class="py-4 py-lg-6 bg-primary">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <!-- Content -->
                    <div class="mb-4 mb-lg-0">
                        <h1 class="text-white mb-1">Tambah Kursus Baru</h1>
                        <p class="mb-0 text-white lead">Isi semua informasi dengan jelas dan lengkap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-8">
    <form id="form-add-course" action="<?php echo base_url('course/submit') ?>" method="post"
        enctype="multipart/form-data">
        <div class="card mb-3">
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Status Kursus</label><br>
                    <input type="hidden" name="course_status" value="0">
                    <input type="checkbox" name="course_status" value="1" data-toggle="toggle" data-on="Publish"
                        data-off="Draft" data-onstyle="success" data-offstyle="danger" checked>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori Kursus</label>
                    <select name="course_category" id="select_category" class="form-control">
                        <?php foreach ($category as $cat) : ?>
                        <option value="<?php echo $cat->id ?>"><?php echo $cat->category_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Banner Kursus</label>
                    <input type="file" class="form-control" name="course_banner" required>
                </div>

                <div class="mb-3">
                    <label for="addCourseTitle" class="form-label">Judul Kursus</label>
                    <input id="addCourseTitle" name="course_title" class="form-control" type="text"
                        placeholder="Course Title" required /> <small>Tuliskan dengan jelas judul kursus yang akan anda
                        buat.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kursus</label>
                    <select name="course_type" id="select_type" class="form-control">
                        <option value="0">Gratis</option>
                        <option value="1">Premium</option>
                    </select>
                    <small>Silahkan pilih kursus anda gratis atau berbayar.</small>
                </div>

                <div class="mb-3">
                    <div id="premium_input" style="display: none;">
                        <div class="form-group mb-3">
                            <label for="">Harga Kursus (Rp)</label>
                            <input type="number" class="form-control" id="course_price" name="course_price" value="0">
                        </div>
                        <div class="form-group">
                            <label for="">Diskon Kursus (%)</label>
                            <input type="number" class="form-control" name="course_discount" value="0">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Level Kursus</label>
                    <select class="form-select" id="addCourseLevel" name="course_level">
                        <?php foreach ($level as $val) : ?>
                        <option value="<?php echo $val->id ?>"><?php echo $val->level_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi Kursus</label>
                    <textarea id="summernote" name="course_description" class="form-control" cols="10" rows="10"
                        required></textarea>
                    <small>Jelaskan secara detail kursus yang akan anda berikan.</small>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#save-course">Simpan</button>

        <div class="modal fade" id="save-course" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger">Mohon dibaca</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda Yakin ingin menyimpan kursus ini? Setelah disimpan, pastikan data sudah benar.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary" id="confirm-save">Ya, Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Logic Show/Hide Harga
    var selectType = document.getElementById('select_type'); // ID Baru
    var premiumInput = document.getElementById('premium_input');
    var priceInput = document.getElementById('course_price');

    selectType.addEventListener('change', function() {
        if (this.value === "1") {
            // Jika Premium
            premiumInput.style.display = "block";
            priceInput.required = true; // Wajib isi jika premium
        } else {
            // Jika Gratis
            premiumInput.style.display = "none";
            priceInput.value = 0; // Reset harga jadi 0
            priceInput.required = false;
        }
    });

    // 2. Logic Submit Form dari Modal
    var btnConfirm = document.getElementById('confirm-save');
    var formAdd = document.getElementById('form-add-course');

    btnConfirm.addEventListener('click', function() {
        // Validasi manual HTML5 sebelum submit (opsional tapi disarankan)
        if (formAdd.checkValidity()) {
            formAdd.submit();
        } else {
            // Tutup modal dulu biar user lihat error di form
            // Bootstrap 5 method to hide modal (sesuaikan versi bootstrap Anda jika error)
            var myModalEl = document.getElementById('save-course');
            var modal = bootstrap.Modal.getInstance(myModalEl);
            modal.hide();

            // Trigger browser validation UI
            formAdd.reportValidity();
        }
    });
});
</script>