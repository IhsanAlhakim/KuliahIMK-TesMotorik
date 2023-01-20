<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];
$k_atas = $_GET["k-atas"];
$k_bawah = $_GET["k-bawah"];


// masukin hasil perpindahan data ke variabel
$taka = $_POST["t-atas-kanan"];
$taki = $_POST["t-atas-kiri"];
$tbka = $_POST["t-bawah-kanan"];
$tbki = $_POST["t-bawah-kiri"];

$tatas = 0;
$tbawah = 0;

if (($taka == "hipotoni" || $taka == "hipertoni") && $taki == "eutoni") {
    $tatas = 1;
} elseif (($taki == "hipotoni" || $taki == "hipertoni") && $taka == "eutoni") {
    $tatas = 1;
} elseif (($taka == "hipotoni" || $taka == "hipertoni") && ($taki == "hipotoni" || $taki == "hipertoni")) {
    $tatas = 1;
}

if (($tbka == "hipotoni" || $tbka == "hipertoni") && $tbki == "eutoni") {
    $tbawah = 1;
} elseif (($tbki == "hipotoni" || $tbki == "hipertoni") && $tbka == "eutoni") {
    $tbawah = 1;
} elseif (($tbka == "hipotoni" || $tbka == "hipertoni") && ($tbki == "hipotoni" || $tbki == "hipertoni")) {
    $tbawah = 1;
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
            <h1 class="text-center">Hasil Pemeriksaan Tonus Atas dan Bawah</h1>
            <div class="kotak-evaluasi">
                <div class="text-center">
                    <?php if ($tatas == 1 && $tbawah == 0) { ?>
                        <p>Terdapat masalah pada gerakan tonus atas anda. Sedangkan untuk tonus bawah anda tidak ada masalah.</p>
                    <?php } elseif ($tatas == 1 && $tbawah == 1) { ?>
                        <p>Terdapat masalah pada tonus atas dan tonus bawah anda.</p>
                    <?php } elseif ($tatas == 0 && $tbawah == 1) { ?>
                        <p>Terdapat masalah pada tonus bawah anda. Sedangkan untuk tonus atas anda tidak ada masalah.</p>
                    <?php } elseif ($tatas == 0 && $tbawah == 0) { ?>
                        <p>Tidak ada masalah pada tonus atas dan tonus bawah anda.</p>
                    <?php } ?>
                </div>

                <p>Tabel hasil pemeriksaan tonus ekstremitas</p>
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
                            <th scope="row">Tonus Atas</th>
                            <td><?php echo $taka; ?></td>
                            <td><?php echo $taki; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tonus Bawah</th>
                            <td><?php echo $tbka; ?></td>
                            <td><?php echo $tbki; ?></td>
                        </tr>
                    </tbody>
                </table>

                <br><br>
                <p class="text-center">Selanjutnya, anda akan melihat hasil kesimpulan dari semua pemeriksaan motorik.</p>
                <div class="tombol">
                    <a href="evaluasi_akhir.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>&k-atas=<?= $k_atas; ?>&k-bawah=<?= $k_bawah; ?>&t-atas=<?= $tatas; ?>&t-bawah=<?= $tbawah; ?>">
                        <button type="button" class="btn btn-primary mt-5">Hasil Kesimpulan Pemeriksaan Motorik</button>
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