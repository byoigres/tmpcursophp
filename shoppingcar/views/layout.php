<!DOCTYPE html>
<html>
  <head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/app.css">
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Shopping Car</a>
        </div>

        <?php if(isset($session)) { ?>

        <ul class="nav navbar-nav">
          <li>
            <a href="/">Inicio</a>
          </li>
          <li>
            <a href="/items">Productos</a>
          </li>
          <li>
            <a href="/categories">Categorias</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="/car" id="total-cart-items">
              Carrito
              <span class="label label-info"></span>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $session['nombre'] ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Perfil</a></li>
              <li class="divider"></li>
              <li><a href="/logout">Cerrar sesi&oacute;n</a></li>
            </ul>
          </li>
        </ul>

        <?php } ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?= $content; ?>
      </div>
    </div>
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script>
    var x = <?= json_encode($session); ?>
    </script>
  </body>
</html>
