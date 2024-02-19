<?php
// Include the database connection file
require_once("koneksi.php");

// Fetch data from each table separately
$result_hewan = mysqli_query($koneksi, "SELECT * FROM tabel_elektronik");
$result_penyakit = mysqli_query($koneksi, "SELECT * FROM tabel_harga");
$result_obat = mysqli_query($koneksi, "SELECT * FROM tabel_stok");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ELEKTRNIKU - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-body-tertiary text-muted ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      ELEKTRONIKU
      <img src="cpu.png" alt="Logo" class="ms-2" style="height: 30px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#profile">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Menu1</a></li>
              <li><a class="dropdown-item" href="menu2.php">Menu2</a></li>
              <li><a class="dropdown-item" href="#">Menu3</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    
      <!-- Homepage Content -->

      <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <div class="container">
                    <h1>Daftar Elektronik</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID ELEKTRONIK</th>
                                <th scope="col">JENIS BARANG</th>
                                <th scope="col">NAMA MERK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($res = mysqli_fetch_assoc($result_hewan)) { ?>
                                <tr>
                                    <td><?php echo $res['ID_ELEKTRONIK']; ?></td>
                                    <td><?php echo $res['JENIS_BARANG']; ?></td>
                                    <td><?php echo $res['NAMA_MERK']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <h1>Data harga</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID ELEKTRONIK</th>
                                <th scope="col">NAMA MERK</th>
                                <th scope="col">HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($res = mysqli_fetch_assoc($result_penyakit)) { ?>
                                <tr>
                                    <td><?php echo $res['ID_ELEKTRONIK']; ?></td>
                                    <td><?php echo $res['NAMA_MERK']; ?></td>
                                    <td><?php echo $res['HARGA_PER-UNIT']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <h1>Data stok</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID ELEKTRONIK</th>
                                <th scope="col">NAMA MERK</th>
                                <th scope="col">STOK BARANG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($res = mysqli_fetch_assoc($result_obat)) { ?>
                                <tr>
                                    <td><?php echo $res['ID_ELEKTRONIK']; ?></td>
                                    <td><?php echo $res['NAMA_MERK']; ?></td>
                                    <td><?php echo $res['STOK_BARANG']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





        <!--plagnation-->
          <div class="container-p">
          <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="index.php">1</a></li>
          <li class="page-item"><a class="page-link" href="daftar elektronik.php">2</a></li>
          <li class="page-item"><a class="page-link" href="menu2.php">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>


  
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <br></br>
   <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted ">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>ELEKTRNIKU
          </h6>
          <p>
            Beli ini... beli itu... di ELEKTRNIKU aja, tempat dimana semua barang ajaib bisa kalian temuin (awet, tahan lama, dan ga mudah konslet apalagi nyetrum) ya di ELEKTRNIKU aja .
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Produk
          </h6>
          <p>
            <a href="#!" class="text-reset">TV</a>
          </p>
          <p>
            <a href="#!" class="text-reset">LAPTOP</a>
          </p>
          <p>
            <a href="#!" class="text-reset">KIPAS ANGIN</a>
          </p>
          <p>
            <a href="#!" class="text-reset">JANDA SC</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +62 8532 5563 920</p>
          <p><i class="fas fa-print me-3"></i> +62 8532 5563 920</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>

