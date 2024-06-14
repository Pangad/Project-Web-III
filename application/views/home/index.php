<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ShoesS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sepatu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('kategori/sepatu_pria') ?>"><i
                                        class="fas fa-male me-2"></i>Sepatu Sport Pria</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('kategori/sepatu_wanita') ?>"><i
                                        class="fas fa-female me-2"></i>Sepatu Wanita</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('kategori/sepatu_anak_anak') ?>"><i
                                        class="fas fa-child me-2"></i>Sepatu Anak-anak</a></li>
                        </ul>
                    </li>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php
                            $keranjang = '<i class="fas fa-shopping-cart"></i>: ' . $this->cart->total_items() . ' items';
                            ?>
                            <?= anchor('dashboard/detail_keranjang', $keranjang, ['class' => 'nav-link']) ?>
                        </li>
                        <?php if ($this->session->userdata('username')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Selamat Datang <?= $this->session->userdata('username') ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <?= anchor('auth/logout', 'Logout', ['class' => 'nav-link']) ?>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a href="<?= base_url('auth/login') ?>" class="btn btn-success">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Flash data -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Header -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Toko Sepatu</h1>
            <p class="lead">Temukan sepatu terbaik untuk setiap langkah Anda</p>
        </div>
    </header>
    <!-- About Us -->
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Toko Sepatu adalah tempat untuk menemukan berbagai jenis sepatu berkualitas untuk setiap
                        kebutuhan Anda. Kami menyediakan sepatu sport, formal, casual, dan anak-anak dengan kualitas
                        terbaik dan harga yang bersaing.</p>
                    <p>Dengan pengalaman bertahun-tahun dalam industri sepatu, kami berkomitmen untuk memberikan
                        pelayanan terbaik kepada pelanggan kami.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?= base_url('assets/img/hp.jpg') ?>" class="img-fluid rounded" alt="About Us"
                        style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>



    <!-- Produk -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Produk 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sepatu Sport">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Sport</h5>
                            <p class="card-text">Sepatu nyaman untuk olahraga harian Anda.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Produk 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sepatu Formal">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Formal</h5>
                            <p class="card-text">Tampil elegan dan profesional dengan sepatu ini.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Produk 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sepatu Casual">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Casual</h5>
                            <p class="card-text">Santai dan nyaman untuk kegiatan sehari-hari.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Kontak Kami</h2>
                    <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami.</p>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> info@tokosepatu.com</li>
                        <li><strong>Telepon:</strong> +62 812 3456 7890</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Lokasi Kami</h2>
                    <p>Jl. Contoh Alamat No. 123, Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Toko Sepatu. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>