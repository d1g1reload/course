<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header border-bottom-0">
        <h3 class="mb-0">Invoice</h3>
        <p class="mb-0">Anda dapat melihat semua transaksi anda di sini.</p>
        <?php if ($this->session->flashdata('success')) : ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
    <!-- Table -->
    <div class="table-invoice table-responsive">
        <table class="table mb-0 text-nowrap table-centered table-hover" id="purchase-table">
            <thead class="table-light">
                <tr>
                    <th>Order ID</th>
                    <th>Tanggal Pembelian</th>
                    <th>Kursus</th>
                    <th>Harga</th>
                    <th>Discount %</th>
                    <th>Status</th>
                    <?php if ($this->session->userdata('role_id') == 1): ?>
                        <th>Action</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($purchase as $item) {
                ?>

                    <tr>
                        <td><a href="<?php echo base_url('course/purchase/detail/' . $item->purchase_id) ?>"><?php echo $item->transaction_reff ?></a></td>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($item->purchase_date)) ?></td>
                        <td><?php echo $item->course_title ?></td>
                        <td>Rp. <?php echo number_format($item->price) ?></td>
                        <td><?php echo $item->discount ?>%</td>
                        <td>
                            <?php if ($item->payment_status == 1) { ?>
                                <span class="badge bg-warning">Pending</span>
                            <?php } else if ($item->payment_status == 2) { ?>
                                <span class="badge bg-success">Berhasil</span>
                            <?php } else if ($item->payment_status == 3) { ?>
                                <span class="badge bg-danger">Gagal</span>

                            <?php } ?>
                        </td>
                        <?php if ($this->session->userdata('role_id') == 1): ?>
                            <td>
                                <form action="<?php echo base_url('course/purchase/approve') ?>" method="post">
                                    <input type="hidden" name="trx_reff" value="<?php echo $item->transaction_reff ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $item->purchase_user_id ?>">
                                    <input type="hidden" name="course_id" value="<?php echo $item->purchase_course_id ?>">
                                    <button type="submit" class="btn btn-outline-success"><i class="fe fe-check"></i>Approve</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>