(function ( Natue ) {

  'use strict';

  var settings = {
    endpoints: {
      cart    : '/api-checkout/cart',
      customer: '/customer-api/v1/customer/'
    },
    debug    : true
  };

  Natue.settings = function () {
    return settings;
  };

}( window.Natue ));
