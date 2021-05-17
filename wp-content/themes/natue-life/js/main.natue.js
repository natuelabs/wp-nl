(function ( window ) {

  'use strict';

  window.Natue = window.Natue || {}

}( window ));
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

(function ( Natue, Settings ) {

  'use strict';

  Natue.console = {};
  Natue.console.log = function ( message ) {
    //if (Settings.debug) {
      console.log( message );
    //}
  };

}( window.Natue, window.Natue.settings() ));

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
/**
 *
 * Module for Helper methods
 *
 * @module Utils
 * @author Simon Gabler <simon.gabler@natue.com.br>
 */
(function ( $ ) {
    'use strict';

    window.Natue = window.Natue || {};
    window.Natue.Utils = {
        /**
         * @param {Object} el DOM or jQuery Element
         * @returns {Boolean}
         */
        isElementInViewport : function ( el ) {

            if ( el instanceof jQuery ) {
                el = el[0];
            }

            var rect = el.getBoundingClientRect();
            var centerHorizontal = rect.left + rect.width / 2;
            var centerVertical = rect.top + rect.height / 2;
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            var windowWidth = window.innerWidth || document.documentElement.clientWidth;

            // We check if the vertical and horizontal center
            // of the element is within the current view port
            return (
                0 < centerVertical && centerVertical < windowHeight &&
                0 < centerHorizontal && centerHorizontal < windowWidth
            );
        },

        /**
         *
         * @param el DOM Element
         * @returns {boolean}
         */
        isElementHeightOrWidthZero : function ( el ) {
            return el.offsetWidth <= 0 || el.offsetHeight <= 0;
        },

        copyToClipboard : function(element) {
            var voucherHidden = document.getElementById(element);
            voucherHidden.select("SelectAll");
            document.execCommand("copy");
        }

    };
})( jQuery );

/**
 *
 * Module for showing lightboxes
 *
 * This modules provides the functionality for lightboxes
 *
 * You can throw in any selector you like or even
 * an already queried jQuery object
 *
 * The closing and hiding functionality is already built in
 * and usually you don't have to worry about it.
 *
 * USAGE of lightbox.show():
 *
 * > ```Natue.lightbox.show( '#enlightening' ); ```
 * >
 * ```
 *   Natue.lightbox.show( '#enlightenin', function() {
 *     // lightbox is now shown
 *   } );
 * ```
 *
 * or
 *
 * > ```Natue.lightbox.show( $( '#newsletterConfirmation' ) )```
 *
 * or you can even call multiple show's after another
 *
 * > ```Natue.lightbox.show( '#enlightening' ); ```
 * > ```Natue.lightbox.show( '#moreEnlightening' ); ```
 * > ```Natue.lightbox.show( '#unbelievable' ); ```
 *
 *
 * USAGE of lightbox.hide()
 *
 * If you really need it you can still hide the lightbox again by calling .hide
 *
 * > ```Natue.lightbox.hide();```
 * > ```Natue.lightbox.hide( function() { // so dark here now } );```
 *
 * @module  lightbox
 * @author Stefan Judis <stefan.judis@natue.com.br>
 */
( function( window, document, $ ) {
    'use strict';

    var $document = $( document );

    var initialized = false;

    var isOpen = false,
        $overlay,
        $lightbox,
        $closeButton;


    /**
     * init function immediatelly executed
     * to provide lightbox object ready
     * to work everywhere
     */
    var _init = function() {
        $overlay     = $( '#lightboxOverlay' );
        $lightbox    = $( '#lightbox' );
        $closeButton = $( '.closeLightbox');

        $overlay.click( function() {
            hide();
        } );

        $closeButton.click( function() {
            hide();
        } );

        initialized = true;
    };


    /**
     * Show lightbox
     *
     * @param {String|Object} $content string representing Selector or jquery object
     * @param {Function}      callback callback
     * @tested
     */
    var show = function( $content, callback ) {
        if ( initialized === false ) {
            _init();
        }

        // check if content is a string
        if ( $content === $content + '') {
            $content = $( $content );
        }

        if ( !isOpen ) {
            if ( $content.length ) {
                $content = $content.clone( true ).show();
                $lightbox.append( $content );

                $overlay.fadeIn( function() {
                    $lightbox.fadeIn( function() {
                        if ( typeof callback === 'function' ) {
                            callback();
                        }
                    } );

                    isOpen = true;
                } );

            }
        } else {
            $lightbox.fadeOut( function() {
                isOpen = false;

                $lightbox.find( ':not(.closeLightbox)' ).remove();

                show( $content, callback );
            } );
        }

        $document.on( 'keydown', _handleKeydown );
    };


    /**
     * Hide the lightbox
     *
     * @param  {Function} callback callback called when hide transition is done
     * @tested
     */
    var hide = function( callback ) {
        $lightbox.fadeOut( 300, function() {
            $lightbox.find( ':not(.closeLightbox)' ).remove();

            isOpen = false;

            $overlay.fadeOut( 300, function() {
                if ( typeof callback === 'function' ) {
                    callback();
                }
            } );
        } );
    };


    /**
     * Keydown handler
     *
     * @param  {Object} event event
     * @private
     */
    var _handleKeydown = function( event ) {
        if ( event.which === 27 ) {
            hide();

            $document.off( 'keydown', _handleKeydown );
        }
    };

    window.Natue = window.Natue || {};
    window.Natue.lightbox = {
        show : show,
        hide : hide
    };
} )( window, document, jQuery );

(function ( Natue, $, Modernizr ) {

  'use strict';

  Natue.navigation = {};
  Natue.navigation.init = function () {
    $( '.nav' ).each( function () {

      var $component = $( this );

      $component.find( '.nav-item' ).not( '.no-siblings' ).on( 'click', function ( e ) {
        if (Modernizr.mq( '(max-width: 1000px)' )) {
          if ($( e.target ).closest( '.menu' ).length) {
            return;
          }
          $( this ).toggleClass( 'is-active', !$( this ).hasClass( 'is-active' ) );
        } else {
          $component.find( '.overlay' ).addClass( 'is-active' );
          $( this ).addClass( 'is-active' );
        }
      } );

      $component.find( '.nav-item' ).not( '.no-siblings' ).on( 'mouseenter', function ( e ) {
        if (!Modernizr.mq( '(max-width: 1000px)' )) {
          $component.find( '.overlay' ).addClass( 'is-active' );
          $( this ).addClass( 'is-active' );

          $( this ).on( 'mouseleave', function ( e ) {
            if (e.buttons === 2) {
              return;
            }
            $( this ).removeClass( 'is-active' );
            $component.find( '.overlay' ).removeClass( 'is-active' );
            $( this ).off( 'mouseleave' );
          } );
        }
      } );

      $component.find( '[data-url]' ).on( 'click', function () {
        if ($( this ).parents( '.nav-item' ).hasClass( 'is-active' )) {
          location.replace( $( this ).data( 'url' ) );
        }
      } );

      $component.find( '.overlay' ).on( 'click', function () {
        $( this ).removeClass( 'is-active' );
        $component.find( '.nav-item' ).removeClass( 'is-active' );
      } );

      $component.find( '.menu-item' ).not( '.no-siblings' ).on( 'click', function ( e ) {
        if (Modernizr.mq( '(max-width: 1000px)' )) {
          // $component.find('.is-active .menu').addClass('expanded');
          if ($( e.target ).closest( '.submenu' ).length) {
            return;
          }
          $( this ).toggleClass( 'is-active', !$( this ).hasClass( 'is-active' ) );
          // $(this).find('.submenu-item').first().addClass('is-active');
        }
      } );

      $component.find( '.menu' ).menuAim( {
        rowSelector : '.menu-item',
        activate    : function ( elem ) {
          if (Modernizr.mq( '(max-width: 1000px)' ) || $( elem ).hasClass( 'no-siblings' )) {
            return;
          }
          var $menu = $component.find( '.is-active .menu' );
          $menu.addClass( 'expanded' );
          $menu.toggleClass( 'expanded--has-product', !!$( elem ).children( '.product' ).length );
          $( elem ).addClass( 'is-active' );
          // $(elem).find('.submenu-item').first().addClass('is-active');
        },
        deactivate  : function ( elem ) {
          if (Modernizr.mq( '(max-width: 1000px)' )) {
            return;
          }
          $component.find( '.menu-item' ).removeClass( 'is-active' );
        },
        exitMenu    : function ( elem ) {
          if (Modernizr.mq( '(max-width: 1000px)' )) {
            return;
          }
          $( elem ).removeClass( 'is-active' );
          $component.find( '.is-active .menu' ).removeClass( 'expanded expanded--has-product' );
          $( elem ).find( '.submenu-item.is-active' ).removeClass( 'is-active' );
          $( elem ).find( '.menu-item.is-active' ).removeClass( 'is-active' );
        }
      } );

      $component.find( '.submenu' ).menuAim( {
        rowSelector : '.submenu-item',
        activate    : function ( elem ) {
          if (Modernizr.mq( '(max-width: 1000px)' ) || $( elem ).hasClass( 'no-siblings' )) {
            return;
          }
          $( elem ).addClass( 'is-active' );
        },
        deactivate  : function ( elem ) {
          if (Modernizr.mq( '(max-width: 1000px)' )) {
            return;
          }
          $( elem ).removeClass( 'is-active' );
        }
      } );
    } );

    $( '.nav-account' ).each( function () {

      var $component = $( this );

      $component.find( '.customer--nav__trigger' ).on( 'click', function ( e ) {
        e.stopPropagation();
        $( this ).closest( '.left-off-canvas-menu' ).toggleClass( 'customer--nav--opened' );
      } );
    } );

    $( '.left-off-canvas-toggle, .header--icon--close' ).on( 'click', function () {
      $( '.off-canvas-wrap, body' ).toggleClass( 'move-right' );

    } );
  };

  Natue.navigation.init();

}( window.Natue, window.jQuery, window.Modernizr ));

( function( window, document, $ ) {
    'use strict';

    var $newsletterForms = $( '.newsletter__form, .footerLightbox--form' );

    if ( $newsletterForms.length ) {
        $newsletterForms.on(
            'submit', function( event ) {
                event.preventDefault();

                var $form = $( this );
                // clean up error message if there was any
                $form.find( '.email' ).removeClass( 'isError' );

                $.post(
                    $form.attr( 'action' ),
                    $form.serialize()
                ).then( function() {
                        Natue.lightbox.show( $( '#newsletterConfirmation' ) );
                    } );

                $form.find( '.email input' ).blur().val( '' );

                var $successMsg = $form.find( '.successMessage' );

                if ( $successMsg.length ) {
                    $successMsg.slideUp( function() {
                        $( this ).remove();
                        $form.append(
                            '<div class="successMessage">Registro feito com sucesso!</div>'
                        );
                        localStorage.setItem('hasSeenNewsletterLayer', true);
                    } );
                } else {
                    $form.append(
                        '<div class="successMessage">Registro feito com sucesso!</div>'
                    );
                    localStorage.setItem('hasSeenNewsletterLayer', true);
                }
            }
        );
    }
}( window, window.document, window.jQuery ));

(function (window, $, Modernizr) {
  if ( Modernizr.mq( '(min-width: 1000px)' ) ) {
    $( function () {
      'use strict';

      var horizontalMenuPosition = 111;

      var scrollHandling = (function () {
        var $window = $( window ),
            $body;


        /**
         * Add handling for fixed navigation
         */
        var fixedNavigation = function () {
          $window.scroll(function () {
            var currentPosition = $window.scrollTop();
            $body.toggleClass( 'fixedNavigationType2', currentPosition >= 150 );
          } );
        };


        /**
         * Add handling for all other scroll depending
         * elements
         * -> currently only for cart page container
         * -> if there will be more, please extend and build
         *    up a general solution
         *
         */
        var fixedElements = function() {
          var $otherFixables = $( '[data-fixItBaby]' );

          if ( $otherFixables.length ) {
            $window.scroll( function () {
              var currentPosition = $window.scrollTop();

              $otherFixables.toggleClass( 'is-fixed', currentPosition >= horizontalMenuPosition );

              $.each( $otherFixables, function( item ) {
                var $item = $( item );

                $item.toggleClass(
                  'is-bottom-fixed',
                  currentPosition > $( '.site-content' ).height() + 36 - $item.height()
                );
              } );
            } );
          }
        };

        var init = function () {
          $body    = $( 'body' );

          fixedNavigation();
          fixedElements();
        };

        return {
          init: init
        };
      } )();


      scrollHandling.init();
    } );
  }

}) (window, jQuery, Modernizr);
