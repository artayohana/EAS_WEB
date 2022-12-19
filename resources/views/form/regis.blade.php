<html lang="en">
  <head>
  
    <title>Registrasi | Tobena</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
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
    <link href="signin.css" rel="stylesheet">
    <!-- css style import -->
    <link rel="stylesheet" href="public/css/style.css">

  </head>
  <body class ="text-center container bg-secondary p-2 text-dark bg-opacity-10" >
    <div class = "row justify-content-center">
      <div class = "col-md-5 mt-3">
        <main class="form-daftar w-100 m-auto">
          <form action="/regis" method="post">
            @csrf 
            <!-- Equivalent to... -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <img class="mb-4" src="/gambar/logo.png" alt="gagal" width="150" height="150">
            <h1 class="h3 mb-3 fw-normal">Form Pendaftaran</h1>

            <!-- NAME  -->
            <div class="form-floating">
              <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="nama anda" required value="{{ old('name') }}">
              <label for="name">Nama</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <!-- USERNAME  -->
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username anda" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <!-- EMAIL  -->
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="email anda" required value="{{ old('email') }}">
              <label for="email">Alamat Email</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <!-- PASSWORD -->
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password anda" required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                      
          </form>
          <small class="mt-3">Sudah berhasil daftar ? <a href = "/login">Ayo login !!</a></small>
          <form>
            <p class="mt-2 mb-3 text-muted">&copy; 2022 | EAS YOHANA</p> 
          </form>
        </main>
      </div>
    </div>
  </body>
</html>