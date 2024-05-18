<section class="container d-flex flex-column vh-100">
    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <h1 class="mb-1 fw-bold">Login</h1>
                        <span>
                            Belum punya akun?
                            <a href="<?php echo base_url('page/account/register') ?>" class="ms-1">Daftar</a>
                        </span>
                    </div>
                    <!-- Form -->
                    <form class="needs-validation" novalidate>
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required>
                            <div class="invalid-feedback">Please enter valid username.</div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                            <div class="invalid-feedback">Please enter valid password.</div>
                        </div>
                        <!-- Checkbox -->
                        <div class="d-lg-flex justify-content-between align-items-center mb-4">

                            <div>
                                <a href="forget-password.html">Lupa Password?</a>
                            </div>
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>