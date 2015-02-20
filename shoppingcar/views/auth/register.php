<div class="col-md-3"></div>
<div class="col-md-6">
  <container>
    <row>
      <h2 class="text-center">Registrar</h2>
      <?php
      if (isset($message)) {
        echo "<div class=\"alert alert-warning\"><i class=\"glyphicon glyphicon-warning-sign\"></i>$message</div>";
      }
      ?>
      <form class="form-horizontal" action="/new" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label">Usuario</label>
          <div class="col-sm-8">
            <input class="form-control" type="text" name="usuario" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Nombre</label>
          <div class="col-sm-8">
            <input class="form-control" type="text" name="nombre" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Contrase&ntilde;a</label>
          <div class="col-sm-8">
            <input class="form-control" type="password" name="password" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Repetir contrase&ntilde;a</label>
          <div class="col-sm-8">
            <input class="form-control" type="password" name="password2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"></div>
          <div class="col-sm-8">
            <button class="btn btn-primary btn-block" type="submit">Registrar</button>
          </div>
        </div>
        <div class="pull-right">
          <a href="/login">Iniciar sesi&oacute;n?</a>
        </div>
      </form>
    </row>
  </container>
</div>
<div class="col-md-3"></div>
