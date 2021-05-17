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
    OneSignal.push(["sendTag", "email", email]);
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