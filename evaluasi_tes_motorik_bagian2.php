<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];

// masukin hasil perpindahan data ke variabel
$ktka = $_POST["k-tangan-kanan"];
$ktki = $_POST["k-tangan-kiri"];
$klbka = $_POST["k-lengan-b-kanan"];
$klbki = $_POST["k-lengan-b-kiri"];
$klaka = $_POST["k-lengan-a-kanan"];
$klaki = $_POST["k-lengan-a-kiri"];

// 0 = tidak ada masalah, 2 = ada yang lumpuh, 1 = ada masalah
$k_atas = 0;

// menyimpulkan keaadan gerakan ekstremitas superior dekstra et sinistra
if (
    $ktka == 0 ||
    $ktki == 0 ||
    $klbka == 0 ||
    $klbki == 0 ||
    $klaka == 0 ||
    $klaki == 0
) {
    $k_atas = 2;
} else if (
    ($ktka > 1 && $ktka < 5) ||
    ($ktki > 1 && $ktki < 5) ||
    ($klbka > 1 && $klbka < 5) ||
    ($klbki > 1 && $klbki < 5) ||
    ($klaka > 1 && $klaka < 5) ||
    ($klaki > 1 && $klaki < 5)
) {
    $k_atas = 1;
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
        <div class="container-fluid ">
            <h1 class="text-center">Hasil Pemeriksaan Kekuatan Ekstremitas Atas</h1>
            <div class="kotak-evaluasi">
                <div class="text-center">
                    <?php if ($k_atas == 0) { ?>
                        <p>Tidak ada masalah pada kekuatan ekstremitas atas anda </p>
                    <?php } elseif ($k_atas == 1 || $k_atas == 2) { ?>
                        <p>Terdapat masalah pada kekuatan ekstremitas atas anda</p>
                    <?php } ?>
                </div>

                <p>Tabel hasil pemeriksaan kekuatan ekstremitas atas</p>
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
                            <th scope="row">Tangan</th>
                            <td><?php echo $ktka; ?></td>
                            <td><?php echo $ktki; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lengan Bawah</th>
                            <td><?php echo $klbka; ?></td>
                            <td><?php echo $klbki; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lengan Atas</th>
                            <td><?php echo $klaka; ?></td>
                            <td><?php echo $klaki; ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <p class="text-center">Selanjutnya, anda akan melakukan pemeriksaan kekuatan ekstremitas bawah.</p>
                <div class="tombol">
                    <a href="tes_motorik_bagian3.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>&k-atas=<?= $k_atas; ?>">
                        <button type="button" class="btn btn-primary">Mulai Pemeriksaan Kekuatan Ekstremitas Bawah</button>
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