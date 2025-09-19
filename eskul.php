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
    <!-- TUTUP SECTION NAVBAR -->

                <?php 
            // Data ekskul
            $eskul = [
                ["img" => "galeri/paskibra.png", "nama" => "PASKIBRA"],
                ["img" => "galeri/pramuka.png", "nama" => "PRAMUKA"],
                ["img" => "galeri/pmr.png", "nama" => "PMR"],
                ["img" => "galeri/plh.png", "nama" => "PLH"],
                ["img" => "galeri/pd.jpg", "nama" => "PERISAI DIRI"],
                ["img" => "galeri/pks.png", "nama" => "PKS"],
            ];

            
            ?>

    <!-- SECTION ESKUL -->
    <section>
        <div class="container px-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-3 text-center">Ekstrakurikuler Siswa</h3>
                        <div class="row">
                            <?php foreach ($eskul as $item): ?>
                        <div class="col-lg-4">
                            <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                <img src="<?= $item ['img']?>" alt="" width="150" height="150">
                                <div class="card-body text-center border-0">
                                    <h4><?= $item ['nama'] ?></h4>
                                </div>
                            </div>
                        </div> 
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION ESKUL -->


    <!-- SECTION FOOTER -->
<?php include 'footer.php'; ?>
    <!-- TUTUP SECTION FOOTER -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>