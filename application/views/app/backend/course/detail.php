<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Detail Course Content</h1>
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        <?php endif; ?>
    </div>
</div>

<div class="row mt-2 justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Course Title</td>
                            <td>:</td>
                            <td><?php echo strtoupper($course->course_title) ?></td>
                        </tr>
                        <tr>
                            <td>Course Status</td>
                            <td>:</td>
                            <td><?php echo ($course->course_status == "0") ? '<div class="badge badge-danger">UnPublish</div>' : '<div class="badge badge-primary">Publish</div>' ?></td>
                        </tr>
                        <tr>
                            <td>Course Created</td>
                            <td>:</td>
                            <td><?php echo date('Y-m-d h:i:s', strtotime($course->course_create)) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Video Course
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Video Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('course/preview') ?>" method="post">
                        <div class="modal-body">
                            <input type="text" class="form-control" name="video_val" required>
                            <input type="hidden" name="course_id" value="<?php echo $course->id ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Preview Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Video Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($course_detail as $val) {
                ?>
                    <tr>
                        <td><?php echo strtoupper($val->course_detail_title) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>