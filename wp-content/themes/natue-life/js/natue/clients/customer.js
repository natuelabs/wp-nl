(function ( Natue, Settings, $ ) {

  'use strict';

  Natue.clients = Natue.clients || {};
  Natue.clients.customer = {};
  Natue.clients.customer.getCustomerData = function ( response ) {
    return response.data;
  };
  Natue.clients.customer.getCustomer = function () {
    return $.get( Settings.endpoints.customer );
  };

}( window.Natue, window.Natue.settings(), window.jQuery ));