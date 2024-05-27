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

<div class="row mt-3">
    <div class="col-md-2">
        <!-- Button trigger modal -->
        <a href="<?php echo base_url('page/course/create') ?>" class="btn btn-primary">
            + Course
        </a>
    </div>
</div>

<div class="row mt-3">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Course Title</th>
                    <th>Course Status</th>
                    <th>Course Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($course as $item) {
                    if ($item->course_status == "0") {
                        $status = '<div class="badge badge-danger">UnPublish</div>';
                    } elseif ($item->course_status == "1") {
                        $status = '<div class="badge badge-primary">Publish</div>';
                    }
                ?>
                    <tr>
                        <td><?php echo strtoupper($item->course_title) ?></td>
                        <td><?php echo $status ?></td>
                        <td><?php echo date('Y-m-d h:i:s', strtotime($item->course_create)) ?></td>
                        <td>
                            <ul class="navbar-nav">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Action Course
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url('admin/page/course/detail/' . $item->id) ?>">Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>