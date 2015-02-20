<div class="col-sm-4">
</div>
<div class="col-sm-4">
  <h2 class="text-center">Iniciar sesi&oacute;n</h2>
  <?php
  if (isset($message)) {
    echo "<div class=\"alert alert-warning\"><i class=\"glyphicon glyphicon-warning-sign\"></i>$message</div>";
  }
  ?>
  <form method="POST" action="/authenticate" class="form-horizontal">
    <div class="form-group">
      <label class="control-label">Usuario</label>
      <input class="form-control" type="text" name="username" />
    </div>
    <div class="form-group">
      <label class="control-label">Contrase&ntilde;a:</label>
      <input class="form-control" type="password" name="password" />
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit">Iniciar sesi&oacute;n</button>
    </div>
    <div class="pull-right">
      <a href="/register">Registrarse?</a>
    </div>
  </form>
</div>
<div class="col-sm-4">
</div>
