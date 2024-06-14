<div class="container-sm mt-5">
    <div class="row text-center mt-4">
        <?php foreach ($sepatu_wanita as $brg): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top"
                        alt="<?php echo $brg->nama_brg ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                        <small class="text-muted"><?php echo $brg->keterangan ?></small>
                        <div class="mt-2">
                            <span class="badge bg-success">Rp.
                                <?php echo number_format($brg->harga, 0, ',', '.') ?></span>
                        </div>
                        <div class="mt-auto">
                            <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-primary btn-sm mt-2">Tambah ke Keranjang</div>') ?>
                            <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm mt-2">Detail</div>') ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>