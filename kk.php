<?php
// Data kosentrasi keahlian
$konsentrasi = [
    [
        "nama" => "Teknik Komputer dan Jaringan (TKJ)",
        "gambar" => "galeri/tkj.png",
        "deskripsi" => "Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi.
                        Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi server, dan troubleshooting perangkat jaringan."
    ],
    [
        "nama" => "Pengembangan Perangkat Lunak dan Gim (PPLG)",
        "gambar" => "galeri/pplg.png",
        "deskripsi" => "Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim. 
                        Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan proyek teknologi."
    ],
    [
        "nama" => "Teknik Sepeda Motor (TSM)",
        "gambar" => "galeri/tsm.png",
        "deskripsi" => "Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor, 
                        serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua."
    ],
    [
        "nama" => "Desain Komunikasi Visual (DKV)",
        "gambar" => "galeri/dkv.png",
        "deskripsi" => "Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi, 
                        dan media komunikasi visual untuk berbagai kebutuhan industri kreatif."
    ],
    [
        "nama" => "Teknik Otomasi Industri (TOI)",
        "gambar" => "galeri/toi.png",
        "deskripsi" => "Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan sistem 
                        kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur."
    ]
];
?>


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
    <!-- TUTUP NAV -->


    <!-- SECTION kosentrasi keahlian -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-0 mt-2">Kosentrasi</h3>
                    <h3 class="text-primary mb-4">Keahlian</h3>

                     <?php foreach ($konsentrasi as $k) : ?>
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-lg-5  d-flex justify-content-center">
                                <div class="card border-0 m-3">
                                    <img src="<?= $k ['gambar'];?>" alt="" width="150" height="150" class="img-fluid ">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border-0 m-4">
                                    <h5><?= $k ['nama'];?></h5>
                                    <p><?= $k ['deskripsi'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endforeach; ?>

                    
                </div>
            </div>
    </section>
    <!-- TUTUP SECTION kosentrasi keahlian -->



    <!-- SECTION FOOTER -->
<?php include 'footer.php'; ?>
    <!-- TUTUP SECTION FOOTER -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>