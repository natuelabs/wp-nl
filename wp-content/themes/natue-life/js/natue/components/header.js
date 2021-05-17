(function ( Natue, Clients, $ ) {

  'use strict';

  var CustomerClient = Clients.customer,
      CartClient     = Clients.cart;


  Natue.header = {};

  Natue.header.initProfile = function () {
    CustomerClient
      .getCustomer()
      .done( function ( response ) {
        var customer = CustomerClient.getCustomerData( response );

        $( '.customer--avatar--name span' ).html( customer.first_name );
      } )
      .done( function () {
        $( '.show-if-logged' ).removeClass( 'hide' );
        $( '.hide-if-logged' ).addClass( 'hide' );
      } )
      .fail( function () {
        $( '.show-if-logged' ).addClass( 'hide' );
        $( '.hide-if-logged' ).removeClass( 'hide' );
        $( '.hide-if-logged' ).removeClass( 'invisible' );
      } );
  };

  Natue.header.initCart = function () {
    CartClient
      .getCart()
      .done( function ( response ) {
        var nItems = CartClient.getNumOfItemsOnCart( response );

        $( '.checkout-container .badge' ).attr('data-value', nItems);
      } );
  };

  Natue.header.init = function () {
    Natue.header.initProfile();
    Natue.header.initCart();
  };

  Natue.header.init();

}( window.Natue, window.Natue.clients, window.jQuery ));