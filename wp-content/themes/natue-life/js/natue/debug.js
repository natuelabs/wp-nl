(function ( Natue, Settings ) {

  'use strict';

  Natue.console = {};
  Natue.console.log = function ( message ) {
    //if (Settings.debug) {
      console.log( message );
    //}
  };

}( window.Natue, window.Natue.settings() ));
