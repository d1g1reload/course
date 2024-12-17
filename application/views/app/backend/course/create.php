<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course Create</h1>
    </div>
</div>


<div class="row mt-3 justify-content-center">

    <div class="col-md-12">
        <form action="<?php echo base_url('course/submit') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Status Kursus</label><br>
                <input type="hidden" name="course_status" value="0">
                <input type="checkbox" name="course_status" id="course_status" value="1"
                    data-toggle="toggle" data-on="Publish" data-off="Draft"
                    data-onstyle="success" data-offstyle="danger" checked>
            </div>

            <div class="form-group">
                <label for="">Banner Kursus</label>
                <input type="file" class="form-control" name="course_banner" required>
            </div>

            <div class="form-group">
                <label for="">Judul Kursus</label>
                <input type="text" class="form-control" name="course_title" required>
            </div>
            <div class="form-group">
                <label for="">Course Description</label>
                <textarea name="course_description" class="form-control" cols="10" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label>Jenis Kursus</label>
                <select name="course_category" id="course_cat" class="form-control">
                    <option value="0">Gratis</option>
                    <option value="1">Premium</option>
                </select>
            </div>
            <div class="form-group">

                <div id="premium_input" style="display: none;">
                    <div class="form-group">
                        <label for="">Harga Kursus</label>
                        <input type="number" class="form-control" id="course_price" name="course_price">
                    </div>
                    <div class="form-group">
                        <label for="">Diskon Kursus</label>
                        <input type="number" class="form-control" name="course_discount" value="0">
                    </div>
                </div>
            </div>



            <div class="form-group">
                <a href="<?php echo base_url('courselist') ?>" class="btn btn-outline-secondary "><i class="fas fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>

</div>


<script>
    var course_cat = document.getElementById('course_cat')
    var premium_input = document.getElementById('premium_input')
    course_cat.addEventListener('change', function() {
        if (this.value === "1") {
            // Jika nilai 1 (Premium), tampilkan input
            premium_input.style.display = "block";
        } else {
            // Selain itu, sembunyikan input
            premium_input.style.display = "none";
        }
    })
</script>