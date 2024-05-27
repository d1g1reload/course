<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course Preview</h1>
    </div>
</div>



<div class="row mt-3">
    <div class="col-md-4">
        <form action="<?php echo base_url('course/content/submit') ?>" method="post">
            <div class="form-group">
                <label for="">Course Title</label>
                <input type="text" class="form-control" name="course_detail_title" value="<?php echo $youtube_title; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Duration</label>
                <input type="text" class="form-control" name="course_detail_duration" value="<?php echo $youtube_duration; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Video Code</label>
                <input type="text" class="form-control" name="course_detail_video_code" value="<?php echo $youtube_code; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Description</label>
                <textarea name="course_detail_description" class="form-control" cols="10" rows="10"></textarea>
            </div>
            <div class="form-group">
                <a href="<?php echo base_url('courselist') ?>" class="btn btn-outline-secondary "><i class="fas fa-arrow-left"></i> Back</a>

                <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
                <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Save Course</button>
            </div>
        </form>
    </div>

    <div class="col-md-8">
        <h3>Preview Video Course</h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $youtube_code ?>?rel=0" allowfullscreen></iframe>
        </div>
    </div>
</div>