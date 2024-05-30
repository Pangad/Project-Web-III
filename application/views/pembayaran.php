<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                    ?>
                </div><br><br>
                <h3>Input Alamat Pemngiriman dan Pembayaran</h3>

                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan ">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" placeholder="Nomer Telepon Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select name="" id="" class="form-control">
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                            <option value="">POS Indonesia</option>
                            <option value="">Gojek</option>
                            <option value="">Grab</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pili BANK</label>
                        <select name="" id="" class="form-control">
                            <option value="">BCA - XXXXXXX</option>
                            <option value="">BNI - XXXXXXX</option>
                            <option value="">BRI - XXXXXXX</option>
                            <option value="">BSI - XXXXXXX</option>
                            <option value="">Mandiri - XXXXXXX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

                </form>
                <?php
                } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>