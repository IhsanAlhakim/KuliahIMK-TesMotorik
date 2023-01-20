<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];
$k_atas = $_GET["k-atas"];
$k_bawah = $_GET["k-bawah"];
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

<body>
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
                        <a class="nav-link" href="latihan_motorik_tatacara.php">Latihan Motorik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">Tentang Kami</a>
                    </li>
                </ul>
                <a href="index.php#contract">
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </a>
            </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Pemeriksaan Tonus Ekstremitas Superior dan Inferior -->
    <section class="tes-motorik">
        <div class="container-fluid">
            <h1 class="text-center">Pemeriksaan Tonus (Kontraksi Otot) Ekstremitas Atas dan Bawah</h1>
            <div class="panduan-jawaban">
                <p>Petunjuk Pemeriksaan Tonus :</p>
                <p>Dalam pemeriksaan tonus, anda akan diminta untuk menjawab pertanyaan mengenai keadaan tonus ekstremitas pasien. Pertanyaan-pertanyaan ini dijawab dengan tiga jawaban yaitu hipertoni, eutoni, dan hipotoni, berikut ini adalah pengertian dari masing-masing jawaban : </p>
                <table>
                    <tr>
                        <td style="width: 10%;">Hipotoni : </td>
                        <td>Tidak ada kontraksi otot atau kontraksi otot berkurang.</td>
                    </tr>
                    <tr>
                        <td>Eutoni : </td>
                        <td>Kontraksi otot normal</td>
                    </tr>
                    <tr>
                        <td>Hipertoni : </td>
                        <td>Kontraksi otot meningkat, misalnya saat otot dipegang pemeriksa dan digerakkan dengan cepat, akan ada tahanan mendadak saat digerakan, setelah digerakkan sampai titik tertentu, tahanan hilangan. Begitu juga sebaliknya</td>
                    </tr>
                </table>
            </div>

            <form action="evaluasi_tes_motorik_bagian4.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>&k-atas=<?= $k_atas; ?>&k-bawah=<?= $k_bawah; ?>" method="post" onsubmit="return confirm_tes();">
                <h2>Pemeriksaan Tonus Ekstremitas Atas</h2>
                <p>Panduan : </p>
                <ol>
                    <li>Pemeriksa melakukan gerak fleksi-ekstensi maksimal pada tangan kanan pasien seperti pada video dibawah</li>
                    <li>Apabila pada akhir gerakan terasa ada tahanan, berarti itu hipertoni.</li>
                    <li>Normalnya tidak terdapat tahanan, hanya kontraksi otot</li>
                    <li>Lakukan hal yang sama dengan tangan kiri</li>
                </ol>
                <video width="700" muted controls>
                    <source src="video2/tonusatas.mp4" type="video/mp4">
                </video>
                <br>
                <p>Pertanyaan :</p>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana keadaan tonus otot anggota gerak bagian atas kanan saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="t-atas-kanan" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="hipertoni">Hypertoni</option>
                            <option value="eutoni">Eutoni</option>
                            <option value="hipotoni">Hipotoni</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana keadaan tonus otot anggota gerak bagian atas kiri saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="t-atas-kiri" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="hipertoni">Hypertoni</option>
                            <option value="eutoni">Eutoni</option>
                            <option value="hipotoni">Hipotonia</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <h2>Pemeriksaan Tonus Ekstremitas Bawah</h2>
                <p>Panduan : </p>
                <ol>
                    <li></li>
                    <li>Pemeriksa melakukan gerak fleksi-ekstensi maksimal pada kaki kanan pasien seperti pada video dibawah</li>
                    <li>Apabila pada akhir gerakan terasa ada tahanan, berarti itu hipertoni.</li>
                    <li>Normalnya tidak terdapat tahanan, hanya kontraksi otot</li>
                    <li>Lakukan hal yang sama dengan kaki kiri</li>
                </ol>
                <video width="700" muted controls>
                    <source src="video2/tonusbawah.mp4" type="video/mp4">
                </video>
                <br>
                <p>Pertanyaan :</p>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana keadaan tonus otot anggota gerak bagian bawah kanan saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="t-bawah-kanan" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="hipertoni">Hipertoni</option>
                            <option value="eutoni">Eutoni</option>
                            <option value="hipotoni">Hipotoni</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana keadaan tonus otot anggota gerak bagian bawah kiri saat diperiksa? : </label>
                    </div>
                    <div class="col">
                        <select name="t-bawah-kiri" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="hipertoni">Hipertoni</option>
                            <option value="eutoni">Eutoni</option>
                            <option value="hipotoni">Hipotoni</option>
                        </select>
                    </div>
                </div>


                <div class="ke-evaluasi">
                    <div class="container-fluid vh-100 position-relative">
                        <div class=" position-absolute top-50 start-50 translate-middle text-center">
                            <h1 class="text-center">Hasil Pemeriksaan</h1>
                            <p>Anda sudah melakukan pemeriksaan tonus ekstremitas atas dan bawah. Pastikan anda sudah menjawab semua pertanyaan yang diajukan mengenai keadaan tonus ekstremitas atas bawah pasien. Selanjutkan anda akan diarahkan ke halaman hasil pemeriksaan tonus ekstremitas atas dan bawah.</p>
                            <button type="submit" class="btn btn-primary mt-5">Hasil Pemeriksaan Tonus Ekstremitas</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Pemeriksaan Tonus Ekstremitas Superior dan Inferior -->

    <!-- Awal ke Form Hasil Tes -->

    <!-- Akhir ke Form Hasil Tes -->

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