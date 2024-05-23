<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Course</h1>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Course
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('course/preview') ?>" method="post">
                        <div class="modal-body">
                            <input type="text" class="form-control" name="video_val" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Cek Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>