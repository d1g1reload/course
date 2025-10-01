<div class="row mt-3">
    <div class="col-md-12">
        <div>
            <h4 class="mb-0">Personal Detail</h4>
            <p class="mb-4">Informasi detail data anda.</p>
            <?php if ($this->session->flashdata('failed')) : ?>

            <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
                <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success')) : ?>

            <div class="alert alert-success alert-dismissible" role="alert" id="liveAlert">
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <!-- Form -->
            <form class="row gx-3 " action="<?php echo base_url('user/profile/update/' . $user->id) ?>" method="post">
                <!-- First name -->
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="profileEditFname">Nama Lengkap</label>
                    <input type="text" id="profileEditFname" name="fullname" class="form-control"
                        placeholder="Nama Lengkap" value="<?php echo $user->fullname ?>" />

                </div>
                <!-- Last name -->
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="profileEditLname">Email</label>
                    <input type="text" id="profileEditLname" name="email" class="form-control" placeholder="Email"
                        value="<?php echo $user->email ?>" readonly />

                </div>
                <!-- Phone -->
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="profileEditPhone">Phone</label>
                    <input type="text" id="profileEditPhone" name="phone" class="form-control" placeholder="Phone"
                        value="<?php echo $user->phone ?>" />

                </div>

                <div class="col-12">
                    <!-- Button -->
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>