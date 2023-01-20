<?php
$g_atas = $_GET["g-atas"];
$g_bawah = $_GET["g-bawah"];
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
                <a href="index.php#contact">
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </a>
            </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Pemeriksaan Kekuatan Ektremitas Atas -->
    <section class="tes-motorik">
        <div class="container-fluid">
            <h1 class="text-center">Pemeriksaan Kekuatan Ekstremitas Atas (Tangan)</h1>
            <div class="panduan-jawaban">
                <p>Petunjuk Pemeriksaan Kekuatan :</p>
                <p>Dalam pemeriksaan kekuatan, anda akan diminta untuk menjawab pertanyaan mengenai keadaan kekuatan motorik pasien. Pertanyaan-pertanyaan ini dijawab dengan menggunakan skor yang dimulai dari 0 hingga 5. Berikut interpretasi setiap skor :</p>
                <table>
                    <tr>
                        <td style="width: 8%;">skor 0 : </td>
                        <td>tidak ada kontraksi otot sama sekali</td>
                    </tr>
                    <tr>
                        <td>Skor 1 : </td>
                        <td>Ada sedikit kontraksi otot tetapi persendian tidak bisa digerakkan</td>
                    </tr>
                    <tr>
                        <td>Skor 2 : </td>
                        <td>Pasien bisa menggerakkan anggota tubuh tetapi gerakan ini tidak mampu melawan gaya berat, misalnya pasien bisa menggeser lengan tetapi tidak dapat mengangkatnya</td>
                    </tr>
                    <tr>
                        <td>Skor 3 : </td>
                        <td>Kekuatan otot sangat lemah dan tidak dapat menahan tahanan dari pemeriksa, tetapi anggota tubuh dapat digerakkan melawan gravitasi (gaya berat)</td>
                    </tr>
                    <tr>
                        <td>Skor 4 : </td>
                        <td>Kekuatan otot lemah, tetapi anggota tubuh dapat digerakkan melawan gravitasi (gaya berat) dan dapat menahan sedikit tahanan dari pemeriksa</td>
                    </tr>
                    <tr>
                        <td>Skor 5 : </td>
                        <td>Kekuatan normal, dapat digerakkan melawan gravitas dan menahan tahanan pemeriksa</td>
                    </tr>
                </table>
            </div>

            <form action="evaluasi_tes_motorik_bagian2.php?g-atas=<?= $g_atas; ?>&g-bawah=<?= $g_bawah; ?>" method="post" onsubmit="return confirm_tes();">
                <h2>Pemeriksaan Kekuatan Tangan</h2>
                <p>Panduan : </p>
                <ol>
                    <li>Pasien dan pemeriksa bersalaman erat seperti yang ditampilkan dalam video</li>
                    <li>Lakukan hal yang sama dengan tangan kiri</li>
                </ol>
                <video width="700" muted controls>
                    <source src="video2/IMG_0326.mp4" type="video/mp4">
                </video>
                <br>
                <p>Pertanyaan :</p>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan tangan kanan saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-tangan-kanan" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan tangan kiri saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-tangan-kiri" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <h2>Pemeriksaan Kekuatan Lengan Bawah</h2>
                <p>Panduan : </p>
                <ol>
                    <li>Pemeriksa meletakkan kedua tangan diatas lengan pasien, dan meminta pasien untuk menaikkan lengan bagian bawah serta melawan tahanan pemeriksa. Ikuti seperti di video. </li>
                    <li>Lakukan hal yang sama dengan lengan kiri.</li>
                </ol>
                <video width="700" muted controls>
                    <source src="video2/lenganbawah.mp4" type="video/mp4">
                </video>
                <br>
                <p>Pertanyaan :</p>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan lengan kanan bagian bawah saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-lengan-b-kanan" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan lengan kiri bagian bawah saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-lengan-b-kiri" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <h2>Pemeriksaan Kekuatan Lengan Atas</h2>
                <p>Panduan : </p>
                <ol>
                    <li>Pemeriksa meletakkan kedua tangan diatas lengan pasien, dan meminta pasien untuk menaikkan lengan bagian atas serta melawan tahanan pemeriksa. Ikuti seperti di video. </li>
                    <li>Lakukan hal yang sama dengan lengan kiri.</li>
                </ol>
                <video width="700" muted controls>
                    <source src="video2/lenganatas.mp4" type="video/mp4">
                </video>
                <br>
                <p>Pertanyaan :</p>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan lengan kanan bagian atas saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-lengan-a-kanan" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <label>Bagaimana kekuatan lengan kiri bagian atas saat diperiksa?</label>
                    </div>
                    <div class="col">
                        <select name="k-lengan-a-kiri" required>
                            <option value="" disabled selected>Pilih jawaban anda</option>
                            <option value="5">Skor 5</option>
                            <option value="4">Skor 4</option>
                            <option value="3">Skor 3</option>
                            <option value="2">Skor 2</option>
                            <option value="1">Skor 1</option>
                            <option value="0">Skor 0</option>
                        </select>
                    </div>
                </div>

                <div class="ke-evaluasi">
                    <div class="container-fluid vh-100 position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                            <h1 class="text-center">Hasil Pemeriksaan</h1>
                            <p>Anda sudah melakukan pemeriksaan kekuatan ekstremitas atas. Pastikan anda sudah menjawab semua pertanyaan yang diajukan mengenai keadaan kekuatan ekstremitas atas pasien. Selanjutkan anda akan diarahkan ke halaman hasil pemeriksaan kekuatan ekstremitas atas.</p>
                            <button type="submit" class="btn btn-primary mt-5">Hasil Pemeriksaan Kekuatan Ekstremitas Atas</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Pemeriksaan Kekuatan Ektremitas Atas -->

    <!-- Awal ke Form Hasil Tes -->
    <section class="ke-form-bagian1">

    </section>
    <!-- Akhir ke Form Hasil Tes -->

    <!-- Awal Footer -->
    <footer class="bg-dark text-light position-relative text-center">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="mb-0">&copy; Copyright 2022 | built by Kelompok 6</p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>