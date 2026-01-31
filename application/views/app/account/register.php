<section class="container d-flex flex-column vh-100">
    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <h1 class="mb-1 fw-bold">Daftar</h1>
                        <span>
                            Sudah punya akun?
                            <a href="<?php echo base_url('page/account') ?>" class="ms-1">Login</a>
                        </span>
                        <?php if ($this->session->flashdata('failed')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo $this->session->flashdata('failed'); ?></strong>
                        </div>
                        <?php endif; ?>

                    </div>
                    <!-- Form -->
                    <form class="needs-validation" method="post" action="<?php echo base_url('post/register') ?>"
                        novalidate>
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" id="fullname" class="form-control" name="fullname"
                                placeholder="Nama Lengkap" required>
                            <div class="invalid-feedback">Please enter valid fullname.</div>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Email address here" required>
                            <div class="invalid-feedback">Please enter valid Email.</div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="**************" required>
                            <div class="invalid-feedback">Please enter valid password.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor WA</label>
                            <input type="number" class="form-control" name="phone" placeholder="Nomor whatsapp"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="roles" class="form-label">Tipe User</label>
                            <select name="role_id" class="form-control">
                                <option value="2">Instruktur</option>
                                <option value="3">Student</option>
                            </select>
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>