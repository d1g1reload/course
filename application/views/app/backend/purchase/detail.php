<div class="card border-0" id="invoice">
    <!-- Card body -->
    <div class="card-body">
        <div class="d-flex justify-content-between mb-6">
            <div>
                <!-- Img -->
                <img src="<?php echo base_url() ?>assets/main/logo.png" alt="Eduhost" width="50px" height="38px" />
                <h4 class="mb-0">Eduhost</h4>
                <small>INVOICE ID: <?php echo $detail->transaction_reff ?></small>
            </div>
            <?php if ($detail->payment_status == 1) { ?>
                <div>
                    <a href="https://wa.me/6287772717491" target="_blank" class="btn btn-dark">Konfirmasi Pembayaran</a>
                </div>
            <?php } elseif ($detail->payment_status == 2) { ?>
                <div>
                    <button type="button" class="btn btn-success">Transaksi Sudah Lunas</button>
                </div>
            <?php } ?>

        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-md-8 col-12">
                <span class="fs-6">Invoice Dari</span>
                <h5 class="mb-3">Digital Reload Indonesia</h5>
                <p>
                    Cikaret
                    <br />
                    Kota Batu
                    <br />
                    Ciomas,Kabupaten Bogor
                </p>
            </div>
            <div class="col-md-4 col-12">
                <span class="fs-6">Invoice Kepada</span>
                <h5 class="mb-3"><?php echo $detail->fullname ?></h5>

            </div>
        </div>
        <!-- Row -->
        <div class="row mb-5">
            <div class="col-8">
                <span class="fs-6">INVOICED ID</span>
                <h6 class="mb-0">
                    <?php echo $detail->transaction_reff ?>
                    <input type="hidden" value="<?php echo $detail->transaction_reff ?>" id="invIDCopy">
                    <button onclick="copyText()" class="btn btn-dark btn-sm"><i class="fe fe-copy"></i></button>
                </h6>

            </div>
            <div class="col-4">
                <span class="fs-6">Tanggal Pemesanan</span>
                <h6 class="mb-0"><?php echo date('d-m-Y H:i:s', strtotime($detail->purchase_date)) ?></h6>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive mb-8">
            <table class="table mb-0 text-nowrap table-borderless">
                <thead class="table-light">
                    <tr>
                        <th>Item</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-dark">
                        <td>
                            <?php echo $detail->course_title ?>
                        </td>
                        <td>Rp. <?php echo number_format($detail->course_price) ?></td>
                        <td><?php echo $detail->course_discount ?>%</td>
                        <td>
                            Rp. <?php
                                $harga = $detail->course_price;
                                $diskon = ($detail->course_discount / 100) * $harga;
                                $total = $harga - $diskon;
                                echo number_format($total);
                                ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <?php if ($detail->price != 0) { ?>
                    <h3 class="text-info">Metode Pembayaran</h3>
                    <h5>BCA - 0916 0070 72 Septiadi Rahman</h5>
                    <h5>Mandiri - 133 0016 7966 33 Septiadi Rahman</h5>
                    <h5>BRI - 7604 0101 7777 508 Septiadi Rahman</h5>

                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        Jika kelas yang anda pilih adalah Gratis, Silahkan klik langsung konfirmasi Pembayaran.
                    </div>
                <?php } ?>
            </div>

        </div>
        <!-- Short note -->
        <p class="border-top pt-3 mb-0">Notes: Invoice was created on a computer and is valid without the signature and seal.</p>
    </div>
</div>
<script>
    var inv = document.getElementById("invIDCopy").value
    console.log(inv)

    function copyText() {
        var inv = document.getElementById("invIDCopy").value; // Ambil nilai dari input hidden

        navigator.clipboard.writeText(inv).then(() => {
            alert("Teks berhasil disalin!");
        }).catch(err => {
            console.error("Gagal menyalin teks: ", err);
        });
    }
</script>