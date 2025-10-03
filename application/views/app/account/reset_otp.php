<div class="row justify-content-center align-items-center mt-5 mb-5">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <?php if ($this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <div class="alert alert-success" role="alert">
                    <strong>Kode OTP reset password telah dikirim ke nomor handphone anda.</strong>
                </div>

                <div class="card-title">Masukan Kode OTP</div>
                <form action="<?php echo base_url('reset/submit') ?>" method="post">
                    <div class="form-group">
                        <input type="number" class="form-control" name="otp_code" required>
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-primary btn-block">Verifikasi OTP</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>