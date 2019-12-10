<?php  ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scarable=no, initial-scale=1.0,maximum-scale=1.0, minumun-scale=1.0">
    <title></title>
  </head>

<body style="background-image:url(img/img6.jpg);background-size: 49%;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 55px; color:white">
    <a class="navbar-brand" href="index.php" style=color:white>Inicio</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <a><li class="nav-item"><a class="nav-link" href="login1.php"  style=color:white>iniciar sesion</a></li>
          <a>  <li class="nav-item"><a class="nav-link" href="registrate.php" style=color:white>Registrarse</a></li>
        <a><li class="nav-item"><a class="nav-link" href="foro.php" style=color:white>Foro</a></li>

            <li class="nav-item"><a class="nav-link" href="p-frec.php" style=color:white>Preguntas frecuentes</a></li>

        </ul>
    </div>
</nav>


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar Sesion</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="email" required autofocus>
                <label for="inputEmail">email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="contraseña" required>
                <label for="contraseña">contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> olvidaste tu contraseña?</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i>no tenes cuenta? registrate!</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="../index.html">Volver a inicio</a>
</body>
</html>
