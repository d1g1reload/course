<section class="py-4 py-lg-6 bg-primary">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <!-- Content -->
                    <div class="mb-4 mb-lg-0">
                        <h1 class="text-white mb-1">Edit Kursus</h1>
                        <p class="mb-0 text-white lead">Update semua informasi dengan jelas dan lengkap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-8">
    <form action="<?php echo base_url('course/update/submit/') ?>" method="post" enctype="multipart/form-data">
        <div class="card mb-3">
            <input type="hidden" name="course_id" value="<?php echo $course->id ?>">
            <!-- Card body -->
            <div class="card-body">
                <div class="mb-3">
                    <label for="addCourseTitle" class="form-label">Judul Kursus</label>
                    <input id="addCourseTitle" name="course_title" class="form-control" type="text"
                        value="<?php echo $course->course_title ?>" />
                    <small>Tuliskan denganjelas judul kursus yang akan anda buat.</small>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Deskripsi Kursus</label>
                    <textarea id="summernote" name="course_description" class="form-control" cols="10" rows="10"><?php echo $course->course_description ?></textarea>
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
                        <h3>Anda Yakin ingin menyimpan kursus ini ?</h3>
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
