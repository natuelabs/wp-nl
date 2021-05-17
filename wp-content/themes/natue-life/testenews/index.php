<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
    <div class="footer__row footer__newsletter_line">
        <div class="row">
            <div class="footer__newsletter__column">
                <span></span>
            </div>
            <div class="footer__newsletter__column">
                <div class="newsletter-info">
                    <strong>Cadastre-se e receba ofertas</strong> exclusivas, dicas e receitas <strong>para uma vida mais saudável e equilibrada :)</strong>
                </div>
                <div class="newsletter-form">
                    <form class="newsletter__form clearfix" id="footerNatueLifeNewsletterForm" action="newsletter.php" method="post">
                        <ul class="componentFormList">
                            <li class="name">
                                <div class="tooltip "></div>
                                <label for="name" class="required active">Nome <span class="required">*</span></label>
                                <input data-validation-required="1" data-validation-required-message="Nome deve ser especificado" placeholder="digite seu nome" class="textinput" required="required" tabindex="1" name="name" id="NewsletterForm_name" type="text">
                            </li>
                            <li class="email">
                                <div class="tooltip "></div>
                                <label for="email" class="required active">E-mail <span class="required">*</span></label>
                                <input data-validation-required="1" data-validation-required-message="E-mail deve ser especificado" data-validation-pattern="@^.+\@.+\..+$@" data-validation-pattern-message="E-mail Formato errado" placeholder="digite seu e-mail" class="textinput" required="required" tabindex="1" name="email" id="NewsletterForm_email" type="text">
                            </li>
                        </ul>
                        <button type="submit" id="footerNatueLifeNewsletterBtn">
                        eu quero </button>
                        <small class="successMessage" id="newsletterForm--tooltip"></small>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

<div class="lightboxOverlay" id="lightboxOverlay">
</div>

<div id="lightbox" class="lightbox">
</div>

<input type="hidden" name="lightBoxTimer" id="lightBoxTimer" value="6000">

<div id="newsletterConfirmation" data-qa="lightboxNewsletterConfirmation" style="display : none;" class="newsletter-confirmation">
    <button type="button" class="closeLightbox newsletter-confirmation__close"></button>
    <div class="newsletter-confirmation__content">
        <div class="newsletter-confirmation__content__header">
            OBRIGADA POR
            <br> ESCOLHER A NATUE :)
        </div>
        Prepare-se para receber
        <br> descontos incríveis!

        <strong>Aqui está o seu cupom de</strong>
        <div class="newsletter-confirmation__content__desc">
            10% OFF
        </div>
        <input type="text" id="newsletterVoucher" class="static" value="BEMVINDO10%" readonly>
        <button onclick="newsletterCopyVoucherCms()">aproveitar agora</button>
        <script>
            function newsletterCopyVoucherCms() {
                window.Natue.Utils.copyToClipboard('newsletterVoucher');
                window.Natue.lightbox.hide();
                window.location.href = "/ofertas.html";
            }
        </script>
        <br>
        <div class="newsletter-confirmation__content__mini">*Insira o código acima na página de finalizar compra. Válido por 10 dias para compras acima de R$ 99,00. Uma utilização por CPF.</div>
    </div>
</div>

<script type="text/javascript">
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
                        //Natue.lightbox.show( $( '#newsletterConfirmation' ) );
                        alert("Enviou!")
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
</script>

<script type="text/javascript">
    jQuery( function () {
        jQuery( '.newsletter__form' ).submit( function ( event ) {
            event.preventDefault();
            newsletterEmailValidationTooltip(event.currentTarget);
        } );
    } );

    function emailValidation( emailField ) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test( emailField );
    }

    function tooltip( message, formId) {

        if (formId == "newsletterForm") {
            var $tooltipFeedback = jQuery( "#newsletterForm--tooltip" );
        } else {
            var $tooltipFeedback = jQuery( "#tooltip--" + formId );
            $tooltipFeedback.fadeIn();
        }
        $tooltipFeedback.text( message );
    }

    function newsletterEmailValidationTooltip(newsletterForm) {

        var email = newsletterForm.elements.email.value;
        if ( emailValidation( email ) ) {
            newsletterSubscribe(newsletterForm);
        } else {
            tooltip( "Email inválido. Por favor preencha o email corretamente.", newsletterForm.id );
        }
        return false;
    }

    function newsletterSubscribe(newsletterForm) {

        jQuery.ajax( {
            type: "POST",
            url: newsletterForm.action,
            data: {
                "email" : newsletterForm.elements.email.value,
                "name" : newsletterForm.elements.name.value
            }
        } ).done( function ( message ) {
            tooltip( message, newsletterForm.id);
            setTimeout(function () {
                Natue.lightbox.hide();
            }, 2000);
        } )
        .fail( function ( message ) {
            tooltip( message.responseText, newsletterForm.id );
        } );
    }
</script>
    

</body>
</html>




