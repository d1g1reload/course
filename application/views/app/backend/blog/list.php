<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Blog</h1>
        <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal</strong> tambah blog
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> tambah blog
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <a href="<?php echo base_url('course/blog/add') ?>" type="button" class="btn btn-success mb-2">+ Blog</a>

    </div>
    <div class="col-md-12">
        <div class="card mb-4">
            <!-- Table -->
            <div class="table-responsive overflow-y-hidden">
                <table class="table mb-0 text-nowrap table-hover table-centered text-nowrap" id="blog-list">
                    <thead class="table-light">
                        <tr>
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>