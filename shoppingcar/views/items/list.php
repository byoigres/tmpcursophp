<div class="col-md-12">
  <div class="page-header">
    <h1>Productos</h1>
  </div>

  <style>
  .thumbnail .caption h3 {
    height: 45px;
  }

  .thumbnail .caption span.price {
    font-size: 18px;
  }
  </style>

  <div class="container">

    <div class="row">

      <?php foreach($items as $item) { ?>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="/assets/images/<?= $item['id']?>.jpg" alt="...">
          <div class="caption">
            <h3><?= $item['producto'] ?></h3>
            <p><?= $item['descripcion'] ?></p>
            <div class="clearfix"></div>
            <p>
              <a href="#"><?= $item['categoria'] ?></a>
            </p>
            <p>
              <span class="label label-primary price">$<?= number_format($item['precio'], 0) ?></span>
            </p>
            <p>
              <a href="/items/detalle?id=<?= $item['id'] ?>" class="btn btn-primary" role="button">Ver detalle</a>
              <a href="#" class="btn btn-default" data-action="add-to-car" data-id=<?= $item['id'] ?> role="button">Agregar al carrito</a>
            </p>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>

    <div class="row">
      <nav class="text-center">
        <ul class="pagination">
          <?php for($i=1; $i <= $maxPages; $i++) { ?>
            <li<?= $i == $currentPage ? ' class="active"' : ''; ?>>
              <a href="/items?page=<?= $i ?><?php echo $category == NULL ? '' : '&category=' . $category; ?>"><?= $i ?></a>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>

  </div>
</div>
