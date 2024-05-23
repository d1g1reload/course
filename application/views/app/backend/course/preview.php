<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course Preview</h1>
    </div>
</div>

<form action="">
    <div class="row mt-2">
        <div class="col-md-2">
            <a href="<?php echo base_url('courselist') ?>" class="btn btn-outline-secondary btn-block"><i class="fas fa-arrow-left"></i> Back</a>

        </div>
        <div class="col-md-2">
            <button class="btn btn-primary btn-block"><i class="fas fa-save"></i> Save Course</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Course Title</label>
                <input type="text" class="form-control" value="<?php echo $youtube_title; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Duration</label>
                <input type="text" class="form-control" value="<?php echo $youtube_duration; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Video Code</label>
                <input type="text" class="form-control" value="<?php echo $youtube_code; ?>">
            </div>
            <div class="form-group">
                <label for="">Course Description</label>
                <textarea name="" class="form-control" cols="10" rows="10"></textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="">Course Price</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Course Discount</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
</form>

<div class="row mt-3">
    <div class="col-md-12">
        <h3>Preview Video Course</h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $youtube_code ?>?rel=0" allowfullscreen></iframe>
        </div>
    </div>
</div>