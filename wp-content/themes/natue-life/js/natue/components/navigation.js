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
