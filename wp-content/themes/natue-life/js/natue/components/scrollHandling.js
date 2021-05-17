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
