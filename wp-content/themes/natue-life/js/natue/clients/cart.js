(function ( Natue, Settings, $ ) {

  'use strict';

  Natue.clients = Natue.clients || {};
  Natue.clients.cart = {};
  Natue.clients.cart.getNumOfItemsOnCart = function ( response ) {
    return response.data.totals.items;
  };
  Natue.clients.cart.getCart = function () {
    return $.get( Settings.endpoints.cart );
  };

}( window.Natue, window.Natue.settings(), window.jQuery ));