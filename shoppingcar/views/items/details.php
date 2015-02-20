<div class="col-md-12">
  <div class="page-header">
    <h1><?= $item['producto'] ?></h1>
  </div>

  <div class="container">

    <div class="row">
      <div class="row">
        <div class="col-md-6">
          <a href="#" class="thumbnail">
            <img src="/assets/images/<?= $item['id']?>.jpg" alt="...">
          </a>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">Caracteristicas</div>
            <div class="panel-body">
              <?= $item['descripcion'] ?>
              <p>
                <h2>
                  <span class="label label-info">$<?= $item['precio'] ?></span>
                </h2>
              </p>
            </div>
          </div>
          <div class="pull-right">
            <button class="btn btn-primary" data-action="add-to-car" data-id=<?= $item['id'] ?>>Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
