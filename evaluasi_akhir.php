<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];
$k_atas = $_GET["k-atas"];
$k_bawah = $_GET["k-bawah"];
$t_atas = $_GET["t-atas"];
$t_bawah = $_GET["t-bawah"];

$gerak = 0;
$kekuatan = 0;
$tonus = 0;

if ($g_atas == 1 || $g_bawah == 1) {
    $gerak = 1;
}

if (($k_atas == 1 || $k_bawah == 1) || ($k_atas == 2 || $k_bawah == 2)) {
    $kekuatan = 1;
}

if ($t_atas == 1 || $t_bawah == 1) {
    $tonus = 1;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMKhealth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 border-bottom border-primary">
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
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tes_motorik_tatacara.php">Tes Motorik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="latihan_motorik.php">Latihan Motorik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">Tentang Kami</a>
                    </li>
                </ul>
                <a href="index.php#contact">
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </a>
            </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Evaluasi -->
    <section class="evaluasi-tes">
        <div class="container-fluid">
            <h1 class="text-center">Hasil Kesimpulan Pemeriksaan Motorik</h1>
            <div class="kotak-evaluasi">
                <p class="text-center">Setelah melakukan semua bagian pemeriksaan motorik, berikut ini adalah hasil kesimpulannya :</p>
                <ol>
                    <table>
                        <?php if ($gerak == 1) { ?>
                            <li>Terdapat masalah pada gerakan motorik anda</li>
                        <?php } else { ?>
                            <li>Tidak ada masalah pada gerakan motorik anda</li>
                        <?php } ?>

                        <?php if ($kekuatan == 1) { ?>
                            <li>Terdapat masalah pada kekuatan motorik anda</li>
                        <?php } else { ?>
                            <li>Tidak ada masalah pada kekuatan motorik anda</li>
                        <?php } ?>

                        <?php if ($tonus == 1) { ?>
                            <li>Terdapat masalah pada tonus anda</li>
                        <?php } else { ?>
                            <li>Tidak ada masalah pada tonus anda</li>
                        <?php } ?>
                    </table>
                </ol>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Bagian</th>
                            <th scope="col">Atas</th>
                            <th scope="col">kiri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Gerak Motorik</th>
                            <td><?= $g_atas ?></td>
                            <td><?= $g_bawah ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kekuatan Motorik</th>
                            <td><?= $k_atas ?></td>
                            <td><?= $k_bawah ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tonus Motorik</th>
                            <td><?= $t_atas ?></td>
                            <td><?= $t_bawah ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <?php if ($gerak == 1 || $kekuatan == 1 || $tonus == 1) { ?>
                    <p class="text-center">Anda mempunyai masalah pada motorik anda, Silahkan kunjungi dokter untuk diperiksa lebih lanjut.</p>
                <?php } else { ?>
                    <p class="text-center">Anda tidak memiliki masalah motorik. Anda dapat mengunjungi halaman latihan motorik untuk melihat artikel mengenai contoh-contoh latihan motorik yang dapat anda lakukan sehingga motorik anda akan lebih baik.</p>
                <?php } ?>
                <br><br>

                <div class="tombol">
                    <a href="index.php">
                        <button type="button" class="btn btn-primary mt-5">Kembali ke Beranda</button>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Akhir Evaluasi -->

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