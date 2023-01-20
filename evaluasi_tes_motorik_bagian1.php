<?php
// masukin hasil perpindahan data ke variabel
$gatka = $_POST["g-aktif-tangan-kanan"];
$gatki = $_POST["g-aktif-tangan-kiri"];
$gptka = $_POST["g-pasif-tangan-kanan"];
$gptki = $_POST["g-pasif-tangan-kiri"];
$gakka = $_POST["g-aktif-kaki-kanan"];
$gakki = $_POST["g-aktif-kaki-kiri"];
$gpkka = $_POST["g-pasif-kaki-kanan"];
$gpkki = $_POST["g-pasif-kaki-kiri"];

// 0 = tidak ada masalah, 1 = ada masalah
$g_atas = 0;
$g_bawah = 0;

// menyimpulkan keaadan gerakan ekstremitas superior dekstra et sinistra
if (
    $gatka == "terbatas" ||
    $gatki == "terbatas" ||
    $gptka == "terbatas" ||
    $gptki == "terbatas"
) {
    $g_atas = 1;
}
// // menyimpulkan keaadan gerakan ekstremitas inferior dekstra et sinistra
if (
    $gakka == "terbatas" ||
    $gakki == "terbatas" ||
    $gpkka == "terbatas" ||
    $gpkki == "terbatas"
) {
    $g_bawah = 1;
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

            <h1 class="text-center">Hasil Pemeriksan Gerakan Ekstremitas</h1>

            <div class="kotak-evaluasi">
                <div class="text-center">
                    <?php if ($g_atas == 1 && $g_bawah == 0) { ?>
                        <p>Terdapat masalah pada gerakan ekstremitas atas anda. Sedangkan untuk gerakan ekstremitas bawah anda tidak ada masalah.</p>
                    <?php } elseif ($g_atas == 1 && $g_bawah == 1) { ?>
                        <p>Terdapat masalah pada gerakan ekstremitas atas dan gerakan ekstremitas bawah anda.</p>
                    <?php } elseif ($g_atas == 0 && $g_bawah == 1) { ?>
                        <p>Terdapat masalah pada gerakan ekstremitas bawah anda. Sedangkan untuk gerakan ekstremitas atas anda tidak ada masalah.</p>
                    <?php } elseif ($g_atas == 0 && $g_bawah == 0) { ?>
                        <p>Tidak ada masalah pada gerakan ekstremitas atas dan gerakan ekstremitas bawah anda.</p>
                    <?php } ?>
                </div>
                <br>
                <p class="text-center">Tabel hasil pemeriksaan gerakan ekstremitas atas</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">Pasif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Kanan</th>
                            <td><?php echo $gatka; ?></td>
                            <td><?php echo $gptka; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kiri</th>
                            <td><?php echo $gatki; ?></td>
                            <td><?php echo $gptki; ?></td>
                        </tr>

                    </tbody>
                </table>
                <br>
                <p class="text-center">Tabel hasil pemeriksaan gerakan ekstremitas bawah</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">Pasif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Kanan</th>
                            <td><?php echo $gakka; ?></td>
                            <td><?php echo $gpkka; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kiri</th>
                            <td><?php echo $gakki; ?></td>
                            <td><?php echo $gpkki; ?></td>
                        </tr>

                    </tbody>
                </table>
                <br><br>
                <p class="text-center">Selanjutnya, anda akan melakukan pemeriksaan kekuatan ekstremitas atas.</p>
                <div class="tombol">
                    <a href="tes_motorik_bagian2.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>">
                        <button type="button" class="btn btn-primary">Mulai Pemeriksaan Kekuatan Ekstremitas Atas</button>
                    </a>
                </div>

            </div>
    </section>
    </div>

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