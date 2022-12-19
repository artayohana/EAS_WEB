<!doctype html>
<html lang="en">
  <head>
    <title>Cetak Dokumen | Tobena</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css style import -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

  </head>
  <body>
    <!-- START HEADER  -->
    <header class="navbar navbar-dark sticky-top bg-secondary text-dark bg-opacity-50 flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Perpustakaan Tobena</a>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="/login">Log Out</a>
        </div>
      </div>
    </header>
    <!-- FINISH HEADER -->

    <div class="container-fluid">
      <div class="row">

        <!-- START SIDEBAR -->
        @include('layout.sidebar')
        <!-- STOP SIDEBAR -->

        <!-- START MAIN -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cetak Halaman Room</h1>
          </div>
          <div class = "row">

            <!-- PRINT PDF -->
            <div class="col-sm-6">
              <div class="card">
                <img src="/gambar/merahgradasi.png" class="card-img-top" alt="soon gambar"  height="200">
                <div class="card-body">
                  <h5 class="card-title">PRINT PDF </h5>
                  <p class="card-text">Silahkan klik button dibawah untuk mencetak pdf anda</p>
                  <a href="/cetak/pdf" class="btn btn-primary">PDF</a>
                </div>
              </div>
            </div>

            <!-- PRINT EXCEL -->
            <div class="col-sm-6">
              <div class="card">
                <img src="/gambar/hijau.jpg" class="card-img-top" alt="soon gambar" height="200">
                <div class="card-body">
                  <h5 class="card-title">PRINT EXCEL </h5>
                  <p class="card-text">Silahkan klik button dibawah untuk mencetak pdf anda</p>
                  <a href="/cetak/excel" class="btn btn-primary">EXCEL</a>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- STOP MAIN -->
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    @include('layout.javascript')
  </body>
</html>

