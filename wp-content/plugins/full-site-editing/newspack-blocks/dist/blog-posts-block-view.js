!function(){"use strict";var t={357:function(t,e,r){function n(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}r.d(e,{Z:function(){return n}})},890:function(t,e,r){r.d(e,{Z:function(){return o}});var n=r(357);function o(t){if(Array.isArray(t))return(0,n.Z)(t)}},733:function(t,e,r){function n(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}r.d(e,{Z:function(){return n}})},154:function(t,e,r){function n(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}r.d(e,{Z:function(){return n}})},766:function(t,e,r){r.d(e,{Z:function(){return u}});var n=r(890),o=r(733),i=r(237),a=r(154);function u(t){return(0,n.Z)(t)||(0,o.Z)(t)||(0,i.Z)(t)||(0,a.Z)()}},237:function(t,e,r){r.d(e,{Z:function(){return o}});var n=r(357);function o(t,e){if(t){if("string"==typeof t)return(0,n.Z)(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?(0,n.Z)(t,e):void 0}}},403:function(){},439:function(t,e,r){var n=r(766);r(403);function o(t,e){var r=new XMLHttpRequest;r.onreadystatechange=function(){if(4===r.readyState){if(r.status>=200&&r.status<300){var n=JSON.parse(r.responseText);return t.onSuccess(n)}return e?o(t,e-1):t.onError()}},r.open("GET",t.url),r.send()}function i(t,e){return Object.prototype.hasOwnProperty.call(t,e)}Array.prototype.forEach.call(document.querySelectorAll(".wp-block-newspack-blocks-homepage-articles.has-more-button"),(function(t){var e=t.querySelector("[data-next]");if(!e)return;var r=t.querySelector("[data-posts]"),a=!1,u=!1;e.addEventListener("click",(function(){if(a||u)return!1;var c,s;function l(){a=!1,t.classList.remove("is-loading"),t.classList.add("is-error")}a=!0,t.classList.remove("is-error"),t.classList.add("is-loading"),o({url:e.getAttribute("data-next")+"&exclude_ids="+(c=document.querySelectorAll(".wp-block-newspack-blocks-homepage-articles [data-post-id]"),s=Array.from(c).map((function(t){return t.getAttribute("data-post-id")})),s.push(document.querySelector(".wp-block-newspack-blocks-homepage-articles > div[data-current-post-id]").getAttribute("data-current-post-id")),(0,n.Z)(new Set(s))).join(","),onSuccess:function(n){if(!function(t){var e=!1;t&&i(t,"items")&&Array.isArray(t.items)&&i(t,"next")&&"string"==typeof t.next&&(e=!0,!t.items.length||i(t.items[0],"html")&&"string"==typeof t.items[0].html||(e=!1));return e}(n))return l();if(n.items.length){var o=n.items.map((function(t){return t.html})).join("");r.insertAdjacentHTML("beforeend",o)}n.next&&e.setAttribute("data-next",n.next);n.items.length&&n.next||(u=!0,t.classList.remove("has-more-button"));a=!1,t.classList.remove("is-loading")},onError:l},3)}))}))}},e={};function r(n){var o=e[n];if(void 0!==o)return o.exports;var i=e[n]={exports:{}};return t[n](i,i.exports,r),i.exports}r.d=function(t,e){for(var n in e)r.o(e,n)&&!r.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var n={};!function(){r.r(n);r(439)}(),window.EditingToolkit=n}();