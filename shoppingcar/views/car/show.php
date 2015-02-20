<?php

$total = 0;

if ($items) {
?>

<div class="col-md-12">
  <div class="page-header">
    <h1>Carrito de Compras <small>Totales</small></h1>
  </div>

  <table class="table table-bordered">
    <tr>
      <td class="text-center"><strong>Producto</strong></td>
      <td class="text-center"><strong>Precio</strong></td>
      <td class="text-center"><strong>Cantidad</strong></td>
      <td class="text-center"><strong>Total</strong></td>
      <td></td>
    </tr>
    <?php foreach($items as $item) { ?>
      <tr>
        <td>
          <?= $item['producto'] ?>
        </td>
        <td class="text-right">
          $<?= number_format($item['precio']) ?>
        </td>
        <td class="text-center">
          <?= $item['cantidad'] ?>
        </td>
        <td class="text-right">
          $<?php echo number_format($item['precio'] * $item['cantidad']); ?>
        </td>
        <td>
        </td>
      </tr>

      <?php
        $total += $item['precio'] * $item['cantidad'];
      ?>
    <?php } ?>
    <tr>
      <td colspan="3"></td>
      <td class="text-right">
        <strong>$<?= number_format($total) ?></strong>
      </td>
    </tr>
  </table>
</div>
<div class="col-md-12">
  <div class="pull-right">
    <button class="btn btn-primary" id="go-checkout">Proceder con la compra</button>
  </div>
</div>


<?php
} else {
?>

<div class="alert alert-info">
  No ha agregado art&iacute;culos al carrito.
</div>

<?php } ?>
