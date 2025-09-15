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


     
    <!-- SECTION GALERI -->
     <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-0 text-center">Galeri</h4>
                    <p class="text-primary text-center fw-bold">SMKN 4 TASIKMALAYA</p>

                            <!-- pencarian -->
                         <div class="container mt-4">
                             <div class="input-group mb-3">
                                 <input type="text" id="searchInput" class="form-control" placeholder="Cari galeri (contoh: 17, MPLS, MBG)">
                                    <button class="btn btn-primary" onclick="cariGaleri()">Cari</button>
                              </div>
                        </div>   

                    <!-- galeri 1 -->
                    <div id="galeri17" class="card shadow-lg rounded-2 mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>Upacara Peringatan HUT RI Ke-80</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $hut =[
                           'galeri/hut1.JPG',
                           'galeri/hut2.JPG',
                           'galeri/hut3.JPG',
                           'galeri/hut4.JPG',
                           'galeri/hut5.JPG',
                           'galeri/hut6.JPG'

                        ];
                        $i = 0;
                    ?>
                    <div class="row m-2">
                       <?php while ($i < count($hut)): ?>
                            <div class="col-lg-4 mt-2">
                                <div class="card">
                                    <img src="<?=$hut[$i]?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 1 -->

                    <!-- galeri 2 -->
                    <div id="galeriMpls" class="card shadow-lg rounded-2 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>MPLS 2025</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $mpls =[
                           'galeri/mpls1.jpg',
                           'galeri/mpls2.jpg',
                           'galeri/mpls3.jpg',
                           'galeri/mpls4.jpg',
                           'galeri/mpls5.jpg',
                           'galeri/mpls6.jpg'

                        ];
                        $i = 0;
                    ?>
                    <div class="row m-2">
                        <?php while ($i < count($mpls)): ?>
                        <div class="col-lg-4 mt-2">
                            <div class="card">
                                <img src="<?=$mpls[$i]?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 2 -->

                    <!-- galeri 3 -->
                    <div id="galeriMbg" class="card shadow-lg rounded-2 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>MBG</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $mbg =[
                           'galeri/mbg1.jpg',
                           'galeri/mbg2.jpg',
                           'galeri/mbg3.jpg',
                           'galeri/mbg4.jpg',
                           'galeri/mbg5.jpg',
                           'galeri/mbg6.jpg'

                        ];
                        $i = 0;
                    ?>
                    <div class="row m-2">
                        <?php while ($i < count($mbg)): ?>
                        <div class="col-lg-4 mt-2">
                            <div class="card">
                                <img src="<?=$mbg[$i]?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 3 -->

                </div>
            </div>
        </div>
     </section>
    <!-- TUTUP SECTION GALERI -->


    <!-- script yang memerintah untuk menscrol ke halaman -->
 <script>
function cariGaleri() {
  let input = document.getElementById("searchInput").value.toLowerCase();

  if (input.includes("17")) {
    document.getElementById("galeri17").scrollIntoView({ behavior: "smooth" }); 
   //document.getElementById("galeri17") → mengambil elemen dengan id galeri17 
   //.scrollIntoView({ behavior: "smooth" }) → otomatis scroll ke elemen tersebut dengan animasi halus.
  } else if (input.includes("mpls")) {
    document.getElementById("galeriMpls").scrollIntoView({ behavior: "smooth" });
  } else if (input.includes("mbg")) {
    document.getElementById("galeriMbg").scrollIntoView({ behavior: "smooth" });
  } else {
    alert("Galeri yang dicari tidak ditemukan!");
  }
}
</script>
<!-- tutup script -->



<?php include 'footer.php'; ?>
      
    <!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>