<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course Create</h1>
    </div>
</div>


<div class="row mt-3 justify-content-center">

    <div class="col-md-6">
        <form action="<?php echo base_url('course/submit') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Course Banner</label>
                <input type="file" class="form-control" name="course_banner" required>
            </div>

            <div class="form-group">
                <label for="">Course Title</label>
                <input type="text" class="form-control" name="course_title" required>
            </div>

            <div class="form-group">
                <label for="">Course Description</label>
                <textarea name="course_description" class="form-control" cols="10" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <a href="<?php echo base_url('courselist') ?>" class="btn btn-outline-secondary "><i class="fas fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Save Course</button>
            </div>
        </form>
    </div>

</div>