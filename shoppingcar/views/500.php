<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="error-template">
        <h1>500</h1>
        <h2>Error interno del servidor</h2>
        <div class="error-details">
          <?= isset($message) ? $message : "Oops! Ha ocurrido un error con la p&aacute;gina solicitada."; ?>
        </div>
        <div class="error-actions">
          <a href="<?= $basePath; ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Ir al inicio </a>
        </div>
      </div>
    </div>
  </div>
</div>
