<style>
    img#banner {
        width: 300px;
        height: 225px;
    }
</style>
<div class="row mt-5">

    <?php if ($no_data > 0) { ?>
        <?php foreach ($class as $item) { ?>
            <div class="col-md-4">
                <div class="card card-lift">
                    <a href="#!">
                        <img id="banner" src="<?php echo base_url() ?>assets/course/<?php echo $item->course_banner ?>" alt="figma" class="card-img-top img-fluid w-100" />
                    </a>
                    <div class="card-body d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-2">

                            <h3 class="mb-0 h4">
                                <a href="#!" class="text-inherit"><?php echo $item->course_title ?></a>
                            </h3>
                        </div>
                        <div>
                            <a href="<?php echo base_url('page/student/lecture/' . $item->id) ?>" class="btn btn-outline-success">Mulai Belajar</a>
                        </div>
                    </div>
                </div>
            </div>


        <?php } ?>

    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            Belum ada kelas terdaftar.
        </div>
    <?php } ?>

</div>