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
