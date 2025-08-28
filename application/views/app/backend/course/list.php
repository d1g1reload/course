<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course</h1>
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

<div class="card mb-4">
    <!-- Table -->
    <div class="table-responsive overflow-y-hidden">
        <table class="table mb-0 text-nowrap table-hover table-centered text-nowrap" id="course-list">
            <thead class="table-light">
                <tr>
                    <th>Courses</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($course as $item) {
                    if ($item->course_status == "0") {
                        $status = '<div class="badge badge-danger">Draft</div>';
                    } elseif ($item->course_status == "1") {
                        $status = '<div class="badge badge-primary">Publish</div>';
                    }
                    ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/course/<?php echo $item->course_banner ?>"
                                        alt="course" class="rounded img-4by3-lg">
                                </a>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-1 h5">
                                    <a href="<?php echo base_url('admin/page/course/detail/' . $item->course_id) ?>"
                                        class="text-inherit"><?php echo strtoupper($item->course_title) ?></a>
                                </h4>
                                <ul class="list-inline fs-6 mb-0">
                                    <li class="list-inline-item">
                                        <?php echo date('Y-m-d h:i:s', strtotime($item->course_create)) ?></li>
                                </ul>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="badge bg-success"><?php echo $status ?></span>
                    </td>

                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown">
                                <span class="dropdown-header">Setting</span>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('admin/page/course/detail/' . $item->course_id) ?>">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Detail Materi
                                </a>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('page/course/edit/'.$item->course_id) ?>">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                </a>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('course/delete/submit/'.$item->course_id) ?>">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Hapus
                                </a>
                            </span>
                        </span>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>