<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maycar Inicio</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="..\Admin\index2.php"><b>Admin</b>Maycar</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Alan Ruiz</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="vistas\assets\dist\img\user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="button" class="btn">
            <a href="..\Admin\index2.php">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Indroduzca su cntraseña para recuperar su sesión
  </div>
  <div class="text-center">
    <a href="login.html">O inicia en un diferente usuario</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2021-2022 <b><a href="Maycar" class="text-black">Maycar</a></b><br>
    Todos los derechos reservados.
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>        
  function CargarContenido(pagina_php,contenedor){
    $("." + contenedor).load(pagina_php);
    }
</script>
</body>
</html>
