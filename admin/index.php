<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Inicio Sesion · Panel de Administracion OveRCL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="dist/css/login.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   
  </head>
  <body class="text-center">
        <form class="form-signin" action="../admin/model/login.php" method="post">
          <img class="mb-4" src="dist/img/logo.png" alt="" width="100%" height="100%">
          <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
          <label for="inputEmail" class="sr-only">Usuario</label>
          <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="user" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me">Recuerdame
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  </body>
</html>
