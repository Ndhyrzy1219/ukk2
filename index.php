<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SMKN 4 Tasikmalaya</title>
</head>

<body>
    <?php include 'header.php'; ?>


    <!-- section awal -->
     <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                     <img src="galeri/fotoguru.jpg" alt="" class="img-fluid" width="1500">
                </div>
            </div>
        </div>
     </section>
    <!-- Tutup section awal -->



    <!-- SECTION SAMBUTAN -->
    <section>
        <div class="container my-5">
            <!-- Sambutan Kepala Sekolah -->
            <h4 class="text-center fw-bold mb-3">Sambutan Kepala Sekolah</h4>
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <img src="galeri/kepalasekolah.png" alt="Pak Kurniawan" class="img-fluid bg-primary">
                    <div class="bg-primary text-white mt-1 mb-4">Bapak Kurniawan</div>
                </div>
                <div class="col-md-9">
                    <div class="p-3 border rounded">
                        <p>Assalamu’alaikum warahmatullahi wabarakatuh, </p>
                        <p>Selamat datang di SMKN 4 Tasikmalaya. Segala puji dan syukur kita panjatkan kehadirat Allah
                            SWT,
                            semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat
                            menghadirkan website SMK Negeri 4 Tasikmalaya ini.</p>
                        <p>Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat
                            mengenal lebih jauh tentang sekolah kami
                            sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan
                            kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan,
                            masih banyak kekurangan yang harus kami perbaiki.
                            Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan. </p>
                        <p> Di sini, kami tidak hanya mengajarkan ilmu pengetahuan tetapi juga membentuk karakter siswa
                            agar siap menghadapi tantangan masa depan.
                            Kami berharap website ini dapat memberikan informasi yang bermanfaat dan memberi gambaran
                            yang jelas tentang segala aktivitas di sekolah.</p>
                        <p>Terima kasih atas kunjungan Anda. Semoga sekolah kami selalu menjadi tempat yang penuh
                            inspirasi bagi anak-anak bangsa.
                            Wassalamu’alaikum warahmatullahi wabarakatuh</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- TUTUP SECTION SAMBUTAN -->

        <!-- SECTION BERITA -->
    <section>
        <div class="container-fluid bg-primary  mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-white">Berita</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card  m-3">
                                <div class="card-header">
                                    <img src="galeri/berita 1.jpg" class="img-fluid" alt="" width="550px"
                                        height="200px">
                                </div>
                                <div class="card-body">
                                    <h4>SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja</h4>
                                    <a class="btn btn-primary" href="#">Baca Selengkapnya </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card  m-3">
                                <div class="card-header">
                                    <img src="galeri/berita2.jpeg" class="img-fluid" alt="" width="550px"
                                        height="200px">
                                </div>
                                <div class="card-body">
                                    <h4>PT DAM Jalin Kerjasama dengan SMKN 4 Tasikmalaya Terapkan Kurikulum Teknik dan
                                        Bisnis Sepeda Motor Honda</h4>
                                    <a class="btn btn-primary" href="#">Baca Selengkapnya </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION BERITA -->

    <!-- SECTION GALERI -->
    <section>
        <div class="container px-5 mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Galeri</h2>
                    <div class="card border-0">
                        <?php 
                        $glri =[
                           'galeri/hut1.JPG',
                           'galeri/mbg.JPG',
                           'galeri/mbg6.JPG',
                           'galeri/mbg4.JPG',

                        ];
                        $i = 0;
                    ?>
                        <div class="row m-1">
                            <?php while ($i < count($glri)): ?>
                        <div class="col-lg-3 mt-2">
                            <div class="card">
                                <img src="<?=$glri[$i]?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                        </div>
                        <div class="text-center my-4">
                            <a href="galeri.php" class="btn btn-primary">Intip Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TUTUP SECTION GALERI -->


    <!-- SECTION STATISTIK -->
    <section>
        <div class="container px-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 p-1">
                            <div class="card border-0 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h2>1500</h2>
                                    <p>Siswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-1">
                            <div class="card border-0 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h2>100</h2>
                                    <p>Pendidik</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-1">
                            <div class="card border-0 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h2>45</h2>
                                    <p>Rombel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-1">
                            <div class="card border-0 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h2>5</h2>
                                    <p>Program keahlian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION STATISTIK -->

    <?php include 'footer.php'; ?>


    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>