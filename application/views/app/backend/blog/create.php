<section class="py-4 py-lg-6 bg-success">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <!-- Content -->
                    <div class="mb-4 mb-lg-0">
                        <h1 class="text-white mb-1">Tambah Blog Baru</h1>
                        <p class="mb-0 text-white lead">Isi semua informasi dengan jelas dan lengkap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-8">
    <form action="<?php echo base_url('course/blog/submit') ?>" method="post" enctype="multipart/form-data">
        <div class="card mb-3">

            <!-- Card body -->
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="addCourseCategory">Banner Blog</label>
                    <input type="file" class="form-control" name="blog_image" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="selectOne">Kategori </label>
                    <select name="blog_category" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Menu</option>
                        <option value="1">PHP</option>
                        <option value="2">Kotlin</option>
                        <option value="3">Python</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="addCourseTitle" class="form-label">Judul Blog</label>
                    <input id="addCourseTitle" name="blog_title" class="form-control" type="text"
                        placeholder="Blog Title " />
                    <small>Tuliskan dengan jelas judul blog yang akan anda buat.</small>
                </div>


                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Deskripsi</label>
                    <div id="toolbar-container">

                        <span class="ql-formats">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-strike"></button>
                            <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                            <select class="ql-color"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-script" value="sub"></button>
                            <button class="ql-script" value="super"></button>
                        </span>

                        <span class="ql-formats">
                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>
                        </span>
                    </div>
                    <div id="editor-blog">
                    </div>
                    <input type="hidden" name="blog_description" id="konten-blog">
                </div>
            </div>
        </div>
        <!-- Button -->
        <button type="submit" class="btn btn-success">Simpan</button>

    </form>

</section>