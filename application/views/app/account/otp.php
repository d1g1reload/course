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

                <div class="card-title text-center">Masukan Kode OTP</div>

                <?php if ($this->session->userdata('verify_email')): ?>
                <p class="text-center text-muted small">
                    Dikirim ke: <?php echo $this->session->userdata('verify_email'); ?>
                </p>
                <?php endif; ?>

                <form action="<?php echo base_url('verfiy/otp') ?>" method="post">
                    <div class="form-group">
                        <input type="number" class="form-control text-center" name="otp_code" placeholder="4 Digit Kode"
                            required>
                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Verifikasi OTP</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>