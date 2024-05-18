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
                    </div>
                    <!-- Form -->
                    <form class="needs-validation" novalidate>
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required>
                            <div class="invalid-feedback">Please enter valid username.</div>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required>
                            <div class="invalid-feedback">Please enter valid Email.</div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                            <div class="invalid-feedback">Please enter valid password.</div>
                        </div>
                        <!-- Checkbox -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="agreeCheck" required>
                                <label class="form-check-label" for="agreeCheck">
                                    <span>
                                        I agree to the
                                        <a href="terms-condition-page.html">Terms of Service</a>
                                        and
                                        <a href="terms-condition-page.html">Privacy Policy.</a>
                                    </span>
                                </label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
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