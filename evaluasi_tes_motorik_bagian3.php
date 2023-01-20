<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];
$k_atas = $_GET["k-atas"];

// masukin hasil perpindahan data ke variabel
$ktpka = $_POST["k-tp-kanan"];
$ktpki = $_POST["k-tp-kiri"];
$ktbka = $_POST["k-tungkai-b-kanan"];
$ktbki = $_POST["k-tungkai-b-kiri"];
$ktaka = $_POST["k-tungkai-a-kanan"];
$ktaki = $_POST["k-tungkai-a-kiri"];

// 0 = tidak ada masalah, 2 = ada yang lumpuh, 1 = ada masalah
$k_bawah = 0;

// menyimpulkan keaadan gerakan ekstremitas superior dekstra et sinistra
if (
    $ktpka == 0 ||
    $ktpki == 0 ||
    $ktbka == 0 ||
    $ktbki == 0 ||
    $ktaka == 0 ||
    $ktaki == 0
) {
    $k_bawah = 2;
} else if (
    ($ktpka > 1 && $ktpka < 5) ||
    ($ktpki > 1 && $ktpki < 5) ||
    ($ktbka > 1 && $ktbka < 5) ||
    ($ktbki > 1 && $ktbki < 5) ||
    ($ktaka > 1 && $ktaka < 5) ||
    ($ktaki > 1 && $ktaki < 5)
) {
    $k_bawah = 1;
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
            <h1 class="text-center">Hasil Pemeriksan Kekuatan Ekstremitas Bawah</h1>
            <div class="kotak-evaluasi">
                <div class="text-center">
                    <?php if ($k_bawah == 0) { ?>
                        <p>Tidak ada masalah pada kekuatan ekstremitas bawah anda </p>
                    <?php } elseif ($k_bawah == 1 || $k_bawah == 2) { ?>
                        <p>Terdapat masalah pada kekuatan ekstremitas bawah anda</p>
                    <?php } ?>
                </div>

                <p>Tabel hasil pemeriksaan kekuatan ekstremitas bawah</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Bagian</th>
                            <th scope="col">Kanan</th>
                            <th scope="col">kiri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Punggung dan Telapak Kaki</th>
                            <td><?php echo $ktpka; ?></td>
                            <td><?php echo $ktpki; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tungkai Bawah</th>
                            <td><?php echo $ktbka; ?></td>
                            <td><?php echo $ktbki; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tungkai Atas</th>
                            <td><?php echo $ktaka; ?></td>
                            <td><?php echo $ktaki; ?></td>
                        </tr>

                    </tbody>
                </table>
                <br><br>
                <p class="text-center">Selanjutnya, anda akan melakukan pemeriksaan tonus ekstremitas.</p>
                <div class="tombol">
                <a href="tes_motorik_bagian4.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>&k-atas=<?= $k_atas; ?>&k-bawah=<?= $k_bawah; ?>">
                    <button type="button" class="btn btn-primary mt-5">Mulai Pemeriksaan Tonus Ekstremitas</button>
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