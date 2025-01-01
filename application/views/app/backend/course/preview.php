<div class="row">
    <div class="col-lg-12 col-md-12 col-12 mb-5">
        <h3>Preview Materi Kursus</h3>
        <div class="rounded-3 position-relative w-100 d-block overflow-hidden p-0" style="height: 600px">
            <iframe
                class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100"
                width="560"
                height="315"
                src="https://www.youtube.com/embed/<?php echo $youtube_code ?>?rel=0"
                frameborder="0"></iframe>
        </div>
    </div>
    <div class="col-12">
        <form action="<?php echo base_url('course/content/submit') ?>" method="post">
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Judul Kursus</label>
                <input type="text" class="form-control" name="course_detail_title" placeholder="Judul Kursus" value="<?php echo $youtube_title; ?>">
            </div>
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Durasi Kursus</label>
                <input type="text" class="form-control" name="course_detail_duration" placeholder="Durasi Kursus" value="<?php echo $youtube_duration; ?>" readonly>
            </div>
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Kode Video Kursus</label>
                <input type="text" class="form-control" name="course_detail_video_code" value="<?php echo $youtube_code; ?>" readonly>
            </div>
            <!-- Textarea -->
            <div class="mb-3">
                <label for="textarea-input" class="form-label">Textarea</label>
                <textarea class="form-control" id="summernote-materi" rows="5" cols="5"></textarea>
            </div>
            <input type="hidden" name="course_order" value="<?php echo $course_order; ?>">
            <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
</div>