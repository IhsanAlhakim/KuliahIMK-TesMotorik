<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMKhealth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed z-3 w-100 border-bottom border-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/Logo.png" alt="IMKhealth" width="130" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 grid gap-0 column-gap-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tes_motorik_tatacara.php">Tes Motorik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="latihan_motorik_tatacara.php">Latihan Motorik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">Tentang Kami</a>
                    </li>
                </ul>
                <a href="#contact">
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </a>
            </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Jumbotron -->
    <div class="jumbotron container-fluid text-center vh-100 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1>Selamat Datang di</h1>
            <h1>IMKhealth</h1>
            <p>Periksa keadaan motorik anda sebelum pergi ke dokter</p>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Deskripsi -->
    <section class="deskripsi" id="deskripsi">
        <div class="container-fluid vh-100 position-relative text-center pt-5">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <h1>Apa Itu IMKhealth?</h1>
                    <p class="p-5">IMKhealth adalah website yang memberikan layanan kepada pengguna untuk melakukan pemeriksaan motorik di manapun mereka berada. Selain itu pengguna juga dapat melihat artikel mengenai latihan-latihan motorik yang dapat dilakukan dengan mudah.</p>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" width="700px" src="img/dokter.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Deskripsi -->

    <!-- Awal Tes Motorik -->
    <section class="tes-motorik" id="tes-motorik">
        <div class="container-fluid vh-100 position-relative text-center bg-primary-subtle">
            <div class="tes-sekarang position-absolute top-50 start-50 translate-middle">
                <h1>Tes Motorik</h1>
                <p class="p-5">Lakukan pemeriksaan motorik untuk mengetahui apakah anda mengalami gangguan motorik atau tidak. Apabila anda mengalami gangguan motorik, anda perlu ke dokter untuk diperiksa lebih lanjut. Apabila anda tidak mengalami gangguan motorik, anda dapat mencoba latihan-latihan motorik yang sudah kami paparkan dalam bentuk artikel untuk melatih motorik anda menjadi lebih baik</p>
                <a href="tes_motorik_tatacara.php">
                    <button type="button" class="btn btn-primary">Tes Motorik Sekarang</button>
                </a>
            </div>
        </div>
    </section>
    <!-- Akhir Tes Motorik -->

    <!-- Awal latihan Motorik -->
    <section class="latihan-motorik" id="latihan-motorik">
        <div class="container-fluid vh-100 position-relative text-center bg-light">
            <div class="tes-sekarang position-absolute top-50 start-50 translate-middle">
                <h1>Latihan Motorik</h1>
                <p class="p-5">Jika anda belum melakukan tes motorik, kami sarankan untuk melakukannya terlebih dahulu untuk memeriksa apakah anda lebih baik ke dokter ke dokter atau hanya perlu latihan motorik saja. Jika anda sudah melakukan tes dan hasilnya adalah tidak ada gangguan motorik, silahkan lakukan latihan motorik yang telah kami sediakan agar kesehatan motorik anda tetap terjaga</p>
                <a href="latihan_motorik_tatacara.php">
                    <button type="button" class="btn btn-primary">Latihan Motorik Sekarang</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Akhir latihan Motorik -->

    <!-- Awal Contact us -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center text-contact">
                    <h2>Contact Us</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 m-auto">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="tel" id="telp" class="form-control" placeholder="masukkan nomor telepon">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Contact us -->

    <!-- Awal Footer -->
    <footer class="bg-dark text-light position-relative text-center">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="mb-0">&copy; Copyright 2022 | built by Kelompok 6</p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>