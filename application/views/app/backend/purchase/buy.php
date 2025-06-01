<div class="row mt-5">


    <div class="container">

        <div class="row mb-5">
            <div class="col d-flex justify-content-center">
                <div class="col-md-4">
                    <!-- card -->
                    <form action="<?php echo base_url('course/purchase') ?>" method="post">
                        <div class="card mb-4 mb-lg-0">
                            <!-- card body -->
                            <div class="card-body p-5">
                                <h3 class="mb-2">Pesanan Kelas Anda</h3>

                                <p class="mb-0">
                                    <!-- Active Item -->
                                <ul class="list-group">
                                    <li class="list-group-item active"><?php echo $detail->course_title ?></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Level Kursus</div>
                                        </div>
                                        <span class="badge bg-primary rounded-pill"><?php echo $detail->level_name ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Harga Kursus</div>
                                        </div>
                                        <span class="badge bg-info rounded-pill">Rp. <?php echo number_format($detail->course_price) ?></span>
                                    </li>
                                    <?php if ($detail->course_price != 0) { ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Diskon Kursus</div>
                                            </div>
                                            <span class="badge bg-danger rounded-pill"><?php echo $detail->course_discount ?> %</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Total Bayar</div>
                                            </div>
                                            <span class="badge bg-success rounded-pill"> Rp.
                                                <?php
                                                $harga = $detail->course_price;
                                        $diskon = ($detail->course_discount / 100) * $harga;
                                        $total = $harga - $diskon;
                                        echo number_format($total);
                                        ?>
                                            </span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Metode Pembayaran</div>
                                                untuk informasi bank akan tersedia di dalam invoice.
                                            </div>
                                            <span class="text-dark">Bank Transfer</span>
                                        </li>
                                </ul>
                                </p>
                            <?php } ?>
                            <div class="d-grid gap-2 mt-3">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#buy-course">Lanjutkan Pembayaran <i class="fe fe-arrow-right"></i></button>
                                <a href="<?php echo base_url('main') ?>" class="btn btn-outline-secondary">Kembali</i></a>
                                <div class="modal fade" id="buy-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLabel">Mohon dibaca</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Anda Yakin ingin membeli kursus ini ?</h3>
                                                <input type="hidden" name="course_creator_id" value="<?php echo $detail->user_id ?>">
                                                <input type="hidden" name="course_id" value="<?php echo $detail->id ?>">
                                                <input type="hidden" name="price" value="<?php echo $detail->course_price ?>">
                                                <input type="hidden" name="discount" value="<?php echo $detail->course_discount ?>">
                                                <input type="hidden" name="payment_method" value="1">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="button" class="btn btn-primary" id="buy-save">Ya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>