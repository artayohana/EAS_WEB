<html lang="en">
  <head>
    <title>Login | Tobena</title>

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
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
  </head>
  <body class ="text-center container bg-secondary p-2 text-dark bg-opacity-10" >
    <div class = "row justify-content-center">
      <div class = "col-md-4 mt-3">

        <!-- FLASHH MESSAGE REGISTRASI -->
        @if(session()->has('berhasil'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <!-- START MAIN -->
        <main class="form-signin w-100 m-auto">
          <img class="mb-4" src="/gambar/logo.png" alt="logo perpus" width="150" height="150">
          <h1 class="h3 mb-3 fw-normal">Please Login</h1>
          <form action="/proses" method="post">
            @csrf
            <!-- Equivalent to... -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <!-- EMAIL -->
            <div class="form-floating">
              <input type="text" name="email" class="form-control" id="email" placeholder="email anda" autofocus required value="{{ old('email') }}">
              <label for="email">email</label>
            </div>
                    
            <!-- PASSWORD -->
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password anda" required>
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button> 
          </form>
          <small class="mt-3"> Belum punya akun ? <a href = "/regis">Daftar sekarang !!</a></small>
          <form>
            <p class="mt-2 mb-3 text-muted">&copy; 2022 | EAS YOHANA</p> 
          </form> 
        </main>
        <!-- FINISH MAIN -->
      </div>    
    </div>
  </body>
</html>