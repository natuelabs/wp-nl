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
