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
