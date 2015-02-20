
$(document).ready(function() {

  updateTotalItemsCart();

  var Notification = window.Notification || window.mozNotification || window.webkitNotification;

  if (Notification.permission !== 'granted') {
    Notification.requestPermission(function (permission) {
      // console.log(permission);
      if (permission !== 'granted') {
        alert('No hay permiso para mostrar las notificaciones');
      }
    });
  }

  $('[data-action="add-to-car"]').click(function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id');

    $.ajax({
      url: '/car/add',
      data: {
        id: id
      },
      success: function(response) {
        console.log(response)

        if (response.status) {
          updateTotalItemsCart();
          return showNotification('Correcto', 'El artículo se ha agregado al carrito', id);
        }

        showNotification('Atención', 'Ocurrio un error al agregar el artículo al carrito');

      },
      error: function(error, response) {
          console.log(error, response)
      }
    });

  });

  $('button#go-checkout').click(function(e) {
    e.preventDefault();
    location.href = "/car/checkout";
  });

  function showNotification(title, message, icon) {
    var instance = new Notification(
      title, {
        body: message,
        //icon: "data:image/png;base64,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"
        icon: '/assets/images/' + icon +'.jpg'
      }
    );

    instance.onclick = function () {
      // Something to do
    };
    instance.onerror = function () {
      // Something to do
    };
    instance.onshow = function () {
      // Something to do
      var timeout = setTimeout(function() {
        instance.close();
        clearTimeout(timeout);
      }, 3000);
    };

    instance.onclose = function () {
      // Something to do
    };

    return false;
  }

  function updateTotalItemsCart() {
    $.ajax({
      url: '/car/items',
      type: 'get',
      async: true,
      success: function(total) {
        if (total > 0) {
          $('#total-cart-items').show();
          return $('#total-cart-items > span').html(total).fadeOut(100).fadeIn(100);
        }

        $('#total-cart-items').hide();
      }
    });
  }

});
