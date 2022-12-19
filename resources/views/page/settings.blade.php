<!doctype html>
<html lang="en">
  <head>
    <title>Settings | Tobena </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <!-- START HEADER | BODY -->
    <header class="navbar navbar-dark sticky-top bg-secondary text-dark bg-opacity-50 flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
        Perpustakaan Tobena
      </a>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="/login">Log Out</a>
        </div>
      </div>
    </header>
    <!-- STOP HEADER | BODY -->

    <div class="container-fluid">
      <div class="row">
        <!-- START SIDEBAR -->
        @include('layout.sidebar')
        <!-- STOP SIDEBAR -->

        <!-- START MAIN -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Settings Room</h1>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ISBN</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Cetakan-ke</th>
                  <th>Jumlah Halaman</th>
                  <th>Pengaturan</th>
                </tr>
              </thead>
              <tbody>
                <?php $angka = 1; ?>
                @foreach($data as $index => $dt)
                  <tr>
                    <td>{{ $index + $data->firstItem() }}</td>
                    <td>{{ $dt->isbn }}</td>
                    <td>{{ $dt->judul_buku }}</td>
                    <td>{{ $dt->pengarang }}</td>
                    <td>{{ $dt->penerbit }}</td>
                    <td>{{ $dt->tahun_terbit }}</td>
                    <td>{{ $dt->cetakan_ke }}</td>
                    <td>{{ $dt->jumlah_halaman }}</td>
                    <td>
                      <div class="btn-group dropend">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Aksi
                        </button>
                        <ul class="dropdown-menu">
                          <!-- Dropdown menu links -->
                          <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#edit-{{ $dt->id}}">Edit Data</a></li>
                          <li><a class="dropdown-item" href="/delete/{{ $dt->id }}">Hapus data</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                <?php $angka++; ?>
                @endforeach


                <!-- START TAMBAH MODAL -->

                <!-- Button -->
                <button type="button" class="btn btn-dark me-md-2" data-bs-toggle="modal" data-bs-target="#tambahdata"><svg id="file-new" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon flat-line" width="24" height="24"><path id="secondary" d="M18,7.41V11a9,9,0,0,0-9,9H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h9.59a1,1,0,0,1,.7.29l3.42,3.42A1,1,0,0,1,18,7.41Z" style="fill: rgb(0, 212, 255); stroke-width: 2;"></path><path id="primary" d="M18,15v6m3-3H15" style="fill: none; stroke: rgb(253, 255, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-2" data-name="primary" d="M10,20H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h9.59a1,1,0,0,1,.7.29l3.42,3.42a1,1,0,0,1,.29.7V11" style="fill: none; stroke: rgb(253, 255, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
                  tambah data
                </button>
                <br> <br>
                <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ url('/proses') }}" method="post">
                           {{ csrf_field() }}
                            <!-- @csrf -->
                            <input type = "hidden" name="_token" value="{{ csrf_token() }}" />

                          <!-- ISBN -->
                          <div class="item form-group">
                              <label for="isbn" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">ISBN</label>
                              <div>
                                  <input type = "text" name="isbn" id="isbn" class="form-control" size="4" 
                                    placeholder= "isbn" required>
                              </div>
                          </div>

                          <!-- Judul Buku -->
                          <div class="item form-group">
                              <label for="judul_buku" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Judul Buku</label>
                              <div>
                                  <input type = "text" name="judul_buku" id="judul_buku" class="form-control" 
                                  placeholder= "judul buku" required>
                              </div>
                          </div>

                          <!-- Pengarang -->
                          <div class="item form-group">
                              <label for="pengarang" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Pengarang</label>
                              <div>
                                  <input type = "text" name="pengarang" id="pengarang" class="form-control" 
                                  placeholder= "pengarang">
                              </div>
                          </div> 

                          <!-- Penerbit -->
                          <div class="item form-group">
                              <label for="penerbit" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Penerbit</label>
                              <div>
                                  <input type = "text" name="penerbit" id="penerbit" class="form-control"
                                  placeholder= "penerbit">
                              </div>
                          </div> 

                          <!-- Tahun Terbit -->
                          <div class="item form-group">
                              <label for="tahun_terbit" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Tahun Terbit</label>
                              <div>
                                  <input type = "text" name="tahun_terbit" id="tahun_terbit" class="form-control"
                                  placeholder= "tahun terbit">
                              </div>
                          </div> 

                          <!-- Cetakan Ke -->
                          <div class="item form-group">
                              <label for="cetakan_ke" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Cetakan Ke</label>
                              <div>
                                  <input type = "text" name="cetakan_ke" id="cetakan_ke" class="form-control"
                                  placeholder= "cetakan ke">
                              </div>
                          </div> 

                          <!-- Jumlah Halaman -->
                          <div class="item form-group">
                              <label for="jumlah_halaman" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Jumlah Halaman</label>
                              <div>
                                  <input type = "text" name="jumlah_halaman" id="jumlah_halaman" class="form-control"
                                  placeholder= "jumlah halaman">
                                  <br>
                              </div>
                          </div>  
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>   
                        </form>
                      </div>       
                    </div>
                  </div>
                </div>
                <!-- FINISH TAMBAH MODAL -->

                <!-- START EDIT MODAL -->
                @foreach ($data as $dt)
                  <div class="modal fade" id="edit-{{$dt->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         
                          <form action="/edit/{{ $dt->id }}" method="POST">

                            <!-- {{ csrf_field() }} -->
                            @csrf
                            <!-- <input type = "hidden" name="_token" value="{{ csrf_token() }}" /> -->

                            <!-- ISBN -->
                            <div class="item form-group">
                                <label for="isbn" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">ISBN</label>
                                <div>
                                    <input type = "text" name="isbn" id="isbn" class="form-control" size="4" required 
                                    value = '{{ $dt->isbn }}'>
                                </div>
                            </div>

                            <!-- Judul Buku -->
                            <div class="item form-group">
                                <label for="judul_buku" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Judul Buku</label>
                                <div>
                                    <input type = "text" name="judul_buku" id="judul_buku" class="form-control" required
                                    value = '{{ $dt->judul_buku }}'>
                                </div>
                            </div>

                            <!-- Pengarang -->
                            <div class="item form-group">
                                <label for="pengarang" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Pengarang</label>
                                <div>
                                    <input type = "text" name="pengarang" id="pengarang" class="form-control" 
                                    value = '{{ $dt->pengarang }}'>
                                </div>
                            </div> 

                            <!-- Penerbit -->
                            <div class="item form-group">
                                <label for="penerbit" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Penerbit</label>
                                <div>
                                    <input type = "text" name="penerbit" id="penerbit" class="form-control"
                                    value = '{{ $dt->penerbit }}'>
                                </div>
                            </div> 

                            <!-- Tahun Terbit -->
                            <div class="item form-group">
                              <label for="tahun_terbit" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Tahun Terbit</label>
                              <div>
                                <input type = "text" name="tahun_terbit" id="tahun_terbit" class="form-control"
                                  value = '{{ $dt->tahun_terbit }}'>
                              </div>
                            </div> 

                            <!-- Cetakan Ke -->
                            <div class="item form-group">
                                <label for="cetakan_ke" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Cetakan Ke</label>
                                <div>
                                    <input type = "text" name="cetakan_ke" id="cetakan_ke" class="form-control"
                                    value = '{{ $dt->cetakan_ke }}'>
                                </div>
                            </div> 

                            <!-- Jumlah Halaman -->
                            <div class="item form-group">
                                <label for="jumlah_halaman" class="col-form-label label-align" style="font-family:'Times New Roman'; font-size:20px;">Jumlah Halaman</label>
                                <div>
                                    <input type = "text" name="jumlah_halaman" id="jumlah_halaman" class="form-control"
                                    value = '{{ $dt->jumlah_halaman }}'>
                                    <br>
                                </div>
                            </div>    

                            <!--membuat button-->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach 
                <!-- FINISH EDIT MODAL -->
              </tbody>
            </table>

            <!-- PAGINATION -->
            {{ $data->links() }}

          </div> 
        </main>
        <!-- STOP MAIN -->   
    </div>

    <!-- JavaScript Bundle with Popper -->
    @include('layout.javascript')
  </body>
</html>
