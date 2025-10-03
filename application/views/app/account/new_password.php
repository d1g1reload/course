<div class="row justify-content-center align-items-center mt-5 mb-5">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <?php if ($this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
                <?php endif; ?>
                <div class="card-title">Masukan password baru anda</div>
                <form action="<?php echo base_url('password/update') ?>" method="post">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required>
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-primary btn-block">Update Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>