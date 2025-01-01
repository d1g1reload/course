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
    <form action="<?php echo base_url('course/submit') ?>" method="post" enctype="multipart/form-data">
        <div class="card mb-3">

            <!-- Card body -->
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="addCourseCategory">Status Kursus</label><br>
                    <input type="hidden" name="course_status" value="0">
                    <input type="checkbox" name="course_status" id="course_status" value="1"
                        data-toggle="toggle" data-on="Publish" data-off="Draft"
                        data-onstyle="success" data-offstyle="danger" checked>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="addCourseCategory">Banner Kursus</label>
                    <input type="file" class="form-control" name="course_banner" required>

                </div>
                <div class="mb-3">
                    <label for="addCourseTitle" class="form-label">Judul Kursus</label>
                    <input id="addCourseTitle" name="course_title" class="form-control" type="text"
                        placeholder="Course Title " />
                    <small>Tuliskan denganjelas judul kursus yang akan anda buat.</small>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="addCourseCategory">Jenis Kursus</label>
                    <select name="course_category" id="course_cat" class="form-control">
                        <option value="0">Gratis</option>
                        <option value="1">Premium</option>
                    </select>

                    <small>Silahkan pilih kursus anda gratis atau berbayar.</small>
                </div>
                <div class="mb-3">
                    <div id="premium_input" style="display: none;">
                        <div class="form-group">
                            <label for="">Harga Kursus</label>
                            <input type="number" class="form-control" id="course_price" name="course_price">
                        </div>
                        <div class="form-group">
                            <label for="">Diskon Kursus</label>
                            <input type="number" class="form-control" name="course_discount" value="0">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="addCourseLevel">Level Kursus</label>
                    <select class="form-select" data-choices="" id="addCourseLevel" name="course_level">
                        <?php foreach ($level as $val) : ?>
                            <option value="<?php echo $val->id ?>"><?php echo $val->level_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Kursus</label>
                    <textarea id="summernote" name="course_description" class="form-control" cols="10" rows="10" required></textarea>
                    <small>Jelaskan secara detail kursus yang akan anda berikan.</small>
                </div>
            </div>
        </div>
        <!-- Button -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#save-course">Simpan</button>
        <!-- Modal -->
        <div class="modal fade" id="save-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Mohon dibaca</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Anda Yakin ingin menyimpan kursus ini ? Setelah anda menyimpan kursus ini maka harga tidak dapat di rubah kembali.</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary" id="confirm-save">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>
<script>
    var course_cat = document.getElementById('course_cat')
    var premium_input = document.getElementById('premium_input')
    course_cat.addEventListener('change', function() {
        if (this.value === "1") {
            // Jika nilai 1 (Premium), tampilkan input
            premium_input.style.display = "block";
        } else {
            // Selain itu, sembunyikan input
            premium_input.style.display = "none";
        }
    })
</script>