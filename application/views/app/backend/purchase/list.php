<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header border-bottom-0">
        <h3 class="mb-0">Invoice</h3>
        <p class="mb-0">Anda dapat melihat semua transaksi anda di sini.</p>

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

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>