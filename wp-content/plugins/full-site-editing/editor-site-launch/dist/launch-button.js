!function(){var t={270:function(t){t.exports=function(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r},t.exports.default=t.exports,t.exports.__esModule=!0},232:function(t,e,n){var r=n(270);t.exports=function(t){if(Array.isArray(t))return r(t)},t.exports.default=t.exports,t.exports.__esModule=!0},470:function(t,e,n){"use strict";function r(t,e,n,r,o,i,s){try{var u=t[i](s),c=u.value}catch(a){return void n(a)}u.done?e(c):Promise.resolve(c).then(r,o)}function o(t){return function(){var e=this,n=arguments;return new Promise((function(o,i){var s=t.apply(e,n);function u(t){r(s,o,i,u,c,"next",t)}function c(t){r(s,o,i,u,c,"throw",t)}u(void 0)}))}}n.d(e,{Z:function(){return o}})},119:function(t,e,n){"use strict";function r(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}n.d(e,{Z:function(){return r}})},394:function(t,e,n){"use strict";n.d(e,{Z:function(){return i}});var r=n(119);function o(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function i(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?o(Object(n),!0).forEach((function(e){(0,r.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}},557:function(t){t.exports=function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)},t.exports.default=t.exports,t.exports.__esModule=!0},359:function(t){t.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")},t.exports.default=t.exports,t.exports.__esModule=!0},182:function(t,e,n){var r=n(232),o=n(557),i=n(487),s=n(359);t.exports=function(t){return r(t)||o(t)||i(t)||s()},t.exports.default=t.exports,t.exports.__esModule=!0},487:function(t,e,n){var r=n(270);t.exports=function(t,e){if(t){if("string"==typeof t)return r(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(t,e):void 0}},t.exports.default=t.exports,t.exports.__esModule=!0},421:function(t,e){"use strict";var n=decodeURIComponent,r=encodeURIComponent,o=/; */,i=/^[\u0009\u0020-\u007e\u0080-\u00ff]+$/;function s(t,e){try{return e(t)}catch(n){return t}}},699:function(t){"use strict";var e,n="object"==typeof Reflect?Reflect:null,r=n&&"function"==typeof n.apply?n.apply:function(t,e,n){return Function.prototype.apply.call(t,e,n)};e=n&&"function"==typeof n.ownKeys?n.ownKeys:Object.getOwnPropertySymbols?function(t){return Object.getOwnPropertyNames(t).concat(Object.getOwnPropertySymbols(t))}:function(t){return Object.getOwnPropertyNames(t)};var o=Number.isNaN||function(t){return t!=t};function i(){i.init.call(this)}t.exports=i,t.exports.once=function(t,e){return new Promise((function(n,r){function o(){void 0!==i&&t.removeListener("error",i),n([].slice.call(arguments))}var i;"error"!==e&&(i=function(n){t.removeListener(e,o),r(n)},t.once("error",i)),t.once(e,o)}))},i.EventEmitter=i,i.prototype._events=void 0,i.prototype._eventsCount=0,i.prototype._maxListeners=void 0;var s=10;function u(t){if("function"!=typeof t)throw new TypeError('The "listener" argument must be of type Function. Received type '+typeof t)}function c(t){return void 0===t._maxListeners?i.defaultMaxListeners:t._maxListeners}function a(t,e,n,r){var o,i,s,a;if(u(n),void 0===(i=t._events)?(i=t._events=Object.create(null),t._eventsCount=0):(void 0!==i.newListener&&(t.emit("newListener",e,n.listener?n.listener:n),i=t._events),s=i[e]),void 0===s)s=i[e]=n,++t._eventsCount;else if("function"==typeof s?s=i[e]=r?[n,s]:[s,n]:r?s.unshift(n):s.push(n),(o=c(t))>0&&s.length>o&&!s.warned){s.warned=!0;var f=new Error("Possible EventEmitter memory leak detected. "+s.length+" "+String(e)+" listeners added. Use emitter.setMaxListeners() to increase limit");f.name="MaxListenersExceededWarning",f.emitter=t,f.type=e,f.count=s.length,a=f,console&&console.warn&&console.warn(a)}return t}function f(){if(!this.fired)return this.target.removeListener(this.type,this.wrapFn),this.fired=!0,0===arguments.length?this.listener.call(this.target):this.listener.apply(this.target,arguments)}function l(t,e,n){var r={fired:!1,wrapFn:void 0,target:t,type:e,listener:n},o=f.bind(r);return o.listener=n,r.wrapFn=o,o}function h(t,e,n){var r=t._events;if(void 0===r)return[];var o=r[e];return void 0===o?[]:"function"==typeof o?n?[o.listener||o]:[o]:n?function(t){for(var e=new Array(t.length),n=0;n<e.length;++n)e[n]=t[n].listener||t[n];return e}(o):p(o,o.length)}function d(t){var e=this._events;if(void 0!==e){var n=e[t];if("function"==typeof n)return 1;if(void 0!==n)return n.length}return 0}function p(t,e){for(var n=new Array(e),r=0;r<e;++r)n[r]=t[r];return n}Object.defineProperty(i,"defaultMaxListeners",{enumerable:!0,get:function(){return s},set:function(t){if("number"!=typeof t||t<0||o(t))throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received '+t+".");s=t}}),i.init=function(){void 0!==this._events&&this._events!==Object.getPrototypeOf(this)._events||(this._events=Object.create(null),this._eventsCount=0),this._maxListeners=this._maxListeners||void 0},i.prototype.setMaxListeners=function(t){if("number"!=typeof t||t<0||o(t))throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received '+t+".");return this._maxListeners=t,this},i.prototype.getMaxListeners=function(){return c(this)},i.prototype.emit=function(t){for(var e=[],n=1;n<arguments.length;n++)e.push(arguments[n]);var o="error"===t,i=this._events;if(void 0!==i)o=o&&void 0===i.error;else if(!o)return!1;if(o){var s;if(e.length>0&&(s=e[0]),s instanceof Error)throw s;var u=new Error("Unhandled error."+(s?" ("+s.message+")":""));throw u.context=s,u}var c=i[t];if(void 0===c)return!1;if("function"==typeof c)r(c,this,e);else{var a=c.length,f=p(c,a);for(n=0;n<a;++n)r(f[n],this,e)}return!0},i.prototype.addListener=function(t,e){return a(this,t,e,!1)},i.prototype.on=i.prototype.addListener,i.prototype.prependListener=function(t,e){return a(this,t,e,!0)},i.prototype.once=function(t,e){return u(e),this.on(t,l(this,t,e)),this},i.prototype.prependOnceListener=function(t,e){return u(e),this.prependListener(t,l(this,t,e)),this},i.prototype.removeListener=function(t,e){var n,r,o,i,s;if(u(e),void 0===(r=this._events))return this;if(void 0===(n=r[t]))return this;if(n===e||n.listener===e)0==--this._eventsCount?this._events=Object.create(null):(delete r[t],r.removeListener&&this.emit("removeListener",t,n.listener||e));else if("function"!=typeof n){for(o=-1,i=n.length-1;i>=0;i--)if(n[i]===e||n[i].listener===e){s=n[i].listener,o=i;break}if(o<0)return this;0===o?n.shift():function(t,e){for(;e+1<t.length;e++)t[e]=t[e+1];t.pop()}(n,o),1===n.length&&(r[t]=n[0]),void 0!==r.removeListener&&this.emit("removeListener",t,s||e)}return this},i.prototype.off=i.prototype.removeListener,i.prototype.removeAllListeners=function(t){var e,n,r;if(void 0===(n=this._events))return this;if(void 0===n.removeListener)return 0===arguments.length?(this._events=Object.create(null),this._eventsCount=0):void 0!==n[t]&&(0==--this._eventsCount?this._events=Object.create(null):delete n[t]),this;if(0===arguments.length){var o,i=Object.keys(n);for(r=0;r<i.length;++r)"removeListener"!==(o=i[r])&&this.removeAllListeners(o);return this.removeAllListeners("removeListener"),this._events=Object.create(null),this._eventsCount=0,this}if("function"==typeof(e=n[t]))this.removeListener(t,e);else if(void 0!==e)for(r=e.length-1;r>=0;r--)this.removeListener(t,e[r]);return this},i.prototype.listeners=function(t){return h(this,t,!0)},i.prototype.rawListeners=function(t){return h(this,t,!1)},i.listenerCount=function(t,e){return"function"==typeof t.listenerCount?t.listenerCount(e):d.call(t,e)},i.prototype.listenerCount=d,i.prototype.eventNames=function(){return this._eventsCount>0?e(this._events):[]}},495:function(t,e,n){"use strict";var r=n(212),o=n(561);function i(){this.pending=null,this.pendingTotal=0,this.blockSize=this.constructor.blockSize,this.outSize=this.constructor.outSize,this.hmacStrength=this.constructor.hmacStrength,this.padLength=this.constructor.padLength/8,this.endian="big",this._delta8=this.blockSize/8,this._delta32=this.blockSize/32}e.BlockHash=i,i.prototype.update=function(t,e){if(t=r.toArray(t,e),this.pending?this.pending=this.pending.concat(t):this.pending=t,this.pendingTotal+=t.length,this.pending.length>=this._delta8){var n=(t=this.pending).length%this._delta8;this.pending=t.slice(t.length-n,t.length),0===this.pending.length&&(this.pending=null),t=r.join32(t,0,t.length-n,this.endian);for(var o=0;o<t.length;o+=this._delta32)this._update(t,o,o+this._delta32)}return this},i.prototype.digest=function(t){return this.update(this._pad()),o(null===this.pending),this._digest(t)},i.prototype._pad=function(){var t=this.pendingTotal,e=this._delta8,n=e-(t+this.padLength)%e,r=new Array(n+this.padLength);r[0]=128;for(var o=1;o<n;o++)r[o]=0;if(t<<=3,"big"===this.endian){for(var i=8;i<this.padLength;i++)r[o++]=0;r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=t>>>24&255,r[o++]=t>>>16&255,r[o++]=t>>>8&255,r[o++]=255&t}else for(r[o++]=255&t,r[o++]=t>>>8&255,r[o++]=t>>>16&255,r[o++]=t>>>24&255,r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=0,i=8;i<this.padLength;i++)r[o++]=0;return r}},32:function(t,e,n){"use strict";var r=n(212),o=n(495),i=n(713),s=n(561),u=r.sum32,c=r.sum32_4,a=r.sum32_5,f=i.ch32,l=i.maj32,h=i.s0_256,d=i.s1_256,p=i.g0_256,v=i.g1_256,g=o.BlockHash,m=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298];function y(){if(!(this instanceof y))return new y;g.call(this),this.h=[1779033703,3144134277,1013904242,2773480762,1359893119,2600822924,528734635,1541459225],this.k=m,this.W=new Array(64)}r.inherits(y,g),t.exports=y,y.blockSize=512,y.outSize=256,y.hmacStrength=192,y.padLength=64,y.prototype._update=function(t,e){for(var n=this.W,r=0;r<16;r++)n[r]=t[e+r];for(;r<n.length;r++)n[r]=c(v(n[r-2]),n[r-7],p(n[r-15]),n[r-16]);var o=this.h[0],i=this.h[1],g=this.h[2],m=this.h[3],y=this.h[4],w=this.h[5],_=this.h[6],C=this.h[7];for(s(this.k.length===n.length),r=0;r<n.length;r++){var b=a(C,d(y),f(y,w,_),this.k[r],n[r]),F=u(h(o),l(o,i,g));C=_,_=w,w=y,y=u(m,b),m=g,g=i,i=o,o=u(b,F)}this.h[0]=u(this.h[0],o),this.h[1]=u(this.h[1],i),this.h[2]=u(this.h[2],g),this.h[3]=u(this.h[3],m),this.h[4]=u(this.h[4],y),this.h[5]=u(this.h[5],w),this.h[6]=u(this.h[6],_),this.h[7]=u(this.h[7],C)},y.prototype._digest=function(t){return"hex"===t?r.toHex32(this.h,"big"):r.split32(this.h,"big")}},713:function(t,e,n){"use strict";var r=n(212).rotr32;function o(t,e,n){return t&e^~t&n}function i(t,e,n){return t&e^t&n^e&n}function s(t,e,n){return t^e^n}e.ft_1=function(t,e,n,r){return 0===t?o(e,n,r):1===t||3===t?s(e,n,r):2===t?i(e,n,r):void 0},e.ch32=o,e.maj32=i,e.p32=s,e.s0_256=function(t){return r(t,2)^r(t,13)^r(t,22)},e.s1_256=function(t){return r(t,6)^r(t,11)^r(t,25)},e.g0_256=function(t){return r(t,7)^r(t,18)^t>>>3},e.g1_256=function(t){return r(t,17)^r(t,19)^t>>>10}},212:function(t,e,n){"use strict";var r=n(561),o=n(285);function i(t,e){return 55296==(64512&t.charCodeAt(e))&&(!(e<0||e+1>=t.length)&&56320==(64512&t.charCodeAt(e+1)))}function s(t){return(t>>>24|t>>>8&65280|t<<8&16711680|(255&t)<<24)>>>0}function u(t){return 1===t.length?"0"+t:t}function c(t){return 7===t.length?"0"+t:6===t.length?"00"+t:5===t.length?"000"+t:4===t.length?"0000"+t:3===t.length?"00000"+t:2===t.length?"000000"+t:1===t.length?"0000000"+t:t}e.inherits=o,e.toArray=function(t,e){if(Array.isArray(t))return t.slice();if(!t)return[];var n=[];if("string"==typeof t)if(e){if("hex"===e)for((t=t.replace(/[^a-z0-9]+/gi,"")).length%2!=0&&(t="0"+t),o=0;o<t.length;o+=2)n.push(parseInt(t[o]+t[o+1],16))}else for(var r=0,o=0;o<t.length;o++){var s=t.charCodeAt(o);s<128?n[r++]=s:s<2048?(n[r++]=s>>6|192,n[r++]=63&s|128):i(t,o)?(s=65536+((1023&s)<<10)+(1023&t.charCodeAt(++o)),n[r++]=s>>18|240,n[r++]=s>>12&63|128,n[r++]=s>>6&63|128,n[r++]=63&s|128):(n[r++]=s>>12|224,n[r++]=s>>6&63|128,n[r++]=63&s|128)}else for(o=0;o<t.length;o++)n[o]=0|t[o];return n},e.toHex=function(t){for(var e="",n=0;n<t.length;n++)e+=u(t[n].toString(16));return e},e.htonl=s,e.toHex32=function(t,e){for(var n="",r=0;r<t.length;r++){var o=t[r];"little"===e&&(o=s(o)),n+=c(o.toString(16))}return n},e.zero2=u,e.zero8=c,e.join32=function(t,e,n,o){var i=n-e;r(i%4==0);for(var s=new Array(i/4),u=0,c=e;u<s.length;u++,c+=4){var a;a="big"===o?t[c]<<24|t[c+1]<<16|t[c+2]<<8|t[c+3]:t[c+3]<<24|t[c+2]<<16|t[c+1]<<8|t[c],s[u]=a>>>0}return s},e.split32=function(t,e){for(var n=new Array(4*t.length),r=0,o=0;r<t.length;r++,o+=4){var i=t[r];"big"===e?(n[o]=i>>>24,n[o+1]=i>>>16&255,n[o+2]=i>>>8&255,n[o+3]=255&i):(n[o+3]=i>>>24,n[o+2]=i>>>16&255,n[o+1]=i>>>8&255,n[o]=255&i)}return n},e.rotr32=function(t,e){return t>>>e|t<<32-e},e.rotl32=function(t,e){return t<<e|t>>>32-e},e.sum32=function(t,e){return t+e>>>0},e.sum32_3=function(t,e,n){return t+e+n>>>0},e.sum32_4=function(t,e,n,r){return t+e+n+r>>>0},e.sum32_5=function(t,e,n,r,o){return t+e+n+r+o>>>0},e.sum64=function(t,e,n,r){var o=t[e],i=r+t[e+1]>>>0,s=(i<r?1:0)+n+o;t[e]=s>>>0,t[e+1]=i},e.sum64_hi=function(t,e,n,r){return(e+r>>>0<e?1:0)+t+n>>>0},e.sum64_lo=function(t,e,n,r){return e+r>>>0},e.sum64_4_hi=function(t,e,n,r,o,i,s,u){var c=0,a=e;return c+=(a=a+r>>>0)<e?1:0,c+=(a=a+i>>>0)<i?1:0,t+n+o+s+(c+=(a=a+u>>>0)<u?1:0)>>>0},e.sum64_4_lo=function(t,e,n,r,o,i,s,u){return e+r+i+u>>>0},e.sum64_5_hi=function(t,e,n,r,o,i,s,u,c,a){var f=0,l=e;return f+=(l=l+r>>>0)<e?1:0,f+=(l=l+i>>>0)<i?1:0,f+=(l=l+u>>>0)<u?1:0,t+n+o+s+c+(f+=(l=l+a>>>0)<a?1:0)>>>0},e.sum64_5_lo=function(t,e,n,r,o,i,s,u,c,a){return e+r+i+u+a>>>0},e.rotr64_hi=function(t,e,n){return(e<<32-n|t>>>n)>>>0},e.rotr64_lo=function(t,e,n){return(t<<32-n|e>>>n)>>>0},e.shr64_hi=function(t,e,n){return t>>>n},e.shr64_lo=function(t,e,n){return(t<<32-n|e>>>n)>>>0}},285:function(t){"function"==typeof Object.create?t.exports=function(t,e){e&&(t.super_=e,t.prototype=Object.create(e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}))}:t.exports=function(t,e){if(e){t.super_=e;var n=function(){};n.prototype=e.prototype,t.prototype=new n,t.prototype.constructor=t}}},354:function(){},561:function(t){function e(t,e){if(!t)throw new Error(e||"Assertion failed")}t.exports=e,e.equal=function(t,e,n){if(t!=e)throw new Error(n||"Assertion failed: "+t+" != "+e)}},378:function(t){var e=1e3,n=60*e,r=60*n,o=24*r,i=7*o,s=365.25*o;function u(t,e,n,r){var o=e>=1.5*n;return Math.round(t/n)+" "+r+(o?"s":"")}t.exports=function(t,c){c=c||{};var a=typeof t;if("string"===a&&t.length>0)return function(t){if((t=String(t)).length>100)return;var u=/^(-?(?:\d+)?\.?\d+) *(milliseconds?|msecs?|ms|seconds?|secs?|s|minutes?|mins?|m|hours?|hrs?|h|days?|d|weeks?|w|years?|yrs?|y)?$/i.exec(t);if(!u)return;var c=parseFloat(u[1]);switch((u[2]||"ms").toLowerCase()){case"years":case"year":case"yrs":case"yr":case"y":return c*s;case"weeks":case"week":case"w":return c*i;case"days":case"day":case"d":return c*o;case"hours":case"hour":case"hrs":case"hr":case"h":return c*r;case"minutes":case"minute":case"mins":case"min":case"m":return c*n;case"seconds":case"second":case"secs":case"sec":case"s":return c*e;case"milliseconds":case"millisecond":case"msecs":case"msec":case"ms":return c;default:return}}(t);if("number"===a&&isFinite(t))return c.long?function(t){var i=Math.abs(t);if(i>=o)return u(t,i,o,"day");if(i>=r)return u(t,i,r,"hour");if(i>=n)return u(t,i,n,"minute");if(i>=e)return u(t,i,e,"second");return t+" ms"}(t):function(t){var i=Math.abs(t);if(i>=o)return Math.round(t/o)+"d";if(i>=r)return Math.round(t/r)+"h";if(i>=n)return Math.round(t/n)+"m";if(i>=e)return Math.round(t/e)+"s";return t+"ms"}(t);throw new Error("val is not a non-empty string or a valid number. val="+JSON.stringify(t))}},365:function(t,e,n){"use strict";n.d(e,{y:function(){return r}});var r=function(){try{return window.self!==window.top}catch(t){return!0}};!window||!window._currentSiteType||window._currentSiteType},157:function(t,e,n){"use strict";n.d(e,{v0:function(){return r},Js:function(){return o},zM:function(){return i}});var r="gutenboarding-launch",o="focused-launch",i="launch-site"},564:function(t,e,n){"use strict";var r=n(470),o=n(163),i=n(531),s=n.n(i),u=n(707),c=n(115),a=(n(681),n(885),n(365)),f=n(157),__=(n(354),o.__),l=!1;s()((function(){var t=window.wpcomEditorSiteLaunch;if(t&&!l){l=!0;var e=setInterval((function(){var n=document.querySelector(".edit-post-header__settings");if(n){clearInterval(e);var o=document.querySelector("body");if(o){var i=t.launchUrl,s=t.launchFlow,l=t.isGutenboarding,h=t.anchorFmPodcastId,d=document.createElement("button");d.className="editor-gutenberg-launch__launch-button components-button is-primary",d.addEventListener("click",(function(t){t.preventDefault(),(0,c.jN)("calypso_newsite_editor_launch_click",{is_new_site:!!l,launch_flow:s,is_in_iframe:(0,a.y)()});var e=!!h;e&&(0,u.dispatch)("automattic/launch").enableAnchorFm();var n=(0,u.dispatch)("core/editor").savePost,o=function(){return setTimeout((function(){return n()}),1e3)};switch(s){case f.v0:if(e){(0,u.dispatch)("automattic/launch").openFocusedLaunch();break}(0,u.dispatch)("automattic/launch").openSidebar(),o();break;case f.Js:(0,u.dispatch)("automattic/launch").openFocusedLaunch(),o();break;case f.zM:(0,r.Z)(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,n();case 2:window.top.location.href=i;case 3:case"end":return t.stop()}}),t)})))()}}));var p=document.createTextNode(__("Launch","full-site-editing"));d.appendChild(p),o.classList.add("editor-gutenberg-launch__fse-overrides");var v=n.querySelector(".editor-post-publish-button__button");n.prepend(d),v&&n.prepend(v)}}}))}}))},115:function(t,e,n){"use strict";n.d(e,{jN:function(){return r.jN}});n(694),n(209),n(377);var r=n(792);n(722)},377:function(t,e,n){"use strict";"undefined"!=typeof window&&window.addEventListener("popstate",(function(){null}))},792:function(t,e,n){"use strict";n.d(e,{jN:function(){return h}});var r,o=n(394),i=n(804),s=(n(421),n(699)),u=n(898),c=(n(209),n(694),n(377),n(358)),a=["a8c_cookie_banner_ok","wcadmin_storeprofiler_create_jetpack_account","wcadmin_storeprofiler_connect_store","wcadmin_storeprofiler_login_jetpack_account","wcadmin_storeprofiler_payment_login","wcadmin_storeprofiler_payment_create_account","calypso_checkout_switch_to_p_24","calypso_checkout_composite_p24_submit_clicked"];Promise.resolve();function f(t){"undefined"!=typeof window&&(window._tkq=window._tkq||[],window._tkq.push(t))}"undefined"!=typeof document&&(0,u.ve)("//stats.wp.com/w.js?63");var l=new s.EventEmitter;function h(t,e){if(e=e||{},(0,c.Z)('Record event "%s" called with props %o',t,e),t.startsWith("calypso_")||(0,i.includes)(a,t)){if(r){var n=r(e);e=(0,o.Z)((0,o.Z)({},e),n)}e=(0,i.omitBy)(e,(function(t){return void 0===t})),(0,c.Z)('Recording event "%s" with actual props %o',t,e),f(["recordEvent",t,e]),l.emit("record-event",t,e)}else(0,c.Z)('- Event name must be prefixed by "calypso_" or added to `EVENT_NAME_EXCEPTIONS`')}},722:function(t,e,n){"use strict";n(792)},209:function(t,e,n){"use strict";n(4)},358:function(t,e,n){"use strict";var r=n(49),o=n.n(r);e.Z=o()("calypso:analytics")},694:function(t,e,n){"use strict";n(358)},4:function(t,e,n){"use strict";n(32)},340:function(t,e,n){"use strict";n.d(e,{hg:function(){return u},lZ:function(){return c},_W:function(){return f},Yt:function(){return l}});var r=n(49),o=n.n(r)()("lib/load-script/callback-handler"),i=new Map;function s(){return i}function u(t){return s().has(t)}function c(t,e){var n=s();u(t)?(o('Adding a callback for an existing script from "'.concat(t,'"')),n.get(t).add(e)):(o('Adding a callback for a new script from "'.concat(t,'"')),n.set(t,new Set([e])))}function a(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=s(),r=n.get(t);if(r){var i='Executing callbacks for "'.concat(t,'"')+(null===e?" with success":' with error "'.concat(e,'"'));o(i),r.forEach((function(t){"function"==typeof t&&t(e)})),n.delete(t)}}function f(){var t=this.getAttribute("src");o('Handling successful request for "'.concat(t,'"')),a(t),this.onload=null}function l(){var t=this.getAttribute("src");o('Handling failed request for "'.concat(t,'"')),a(t,new Error('Failed to load script "'.concat(t,'"'))),this.onerror=null}},606:function(t,e,n){"use strict";n.d(e,{C:function(){return u},k:function(){return c}});var r=n(49),o=n.n(r),i=n(340),s=o()("lib/load-script/dom-operations");function u(t){s('Creating script element for "'.concat(t,'"'));var e=document.createElement("script");return e.src=t,e.type="text/javascript",e.async=!0,e.onload=i._W,e.onerror=i.Yt,e}function c(t){s("Attaching element to head"),document.head.appendChild(t)}},898:function(t,e,n){"use strict";n.d(e,{ve:function(){return u}});var r=n(49),o=n.n(r),i=n(340),s=n(606);o()("package/load-script");function u(t,e){if(!(0,i.hg)(t)&&(0,s.k)((0,s.C)(t)),"function"!=typeof e)return new Promise((function(e,n){(0,i.lZ)(t,(function(t){null===t?e():n(t)}))}));(0,i.lZ)(t,e)}},49:function(t,e,n){var r;e.formatArgs=function(e){if(e[0]=(this.useColors?"%c":"")+this.namespace+(this.useColors?" %c":" ")+e[0]+(this.useColors?"%c ":" ")+"+"+t.exports.humanize(this.diff),!this.useColors)return;var n="color: "+this.color;e.splice(1,0,n,"color: inherit");var r=0,o=0;e[0].replace(/%[a-zA-Z%]/g,(function(t){"%%"!==t&&(r++,"%c"===t&&(o=r))})),e.splice(o,0,n)},e.save=function(t){try{t?e.storage.setItem("debug",t):e.storage.removeItem("debug")}catch(n){}},e.load=function(){var t;try{t=e.storage.getItem("debug")}catch(n){}!t&&"undefined"!=typeof process&&"env"in process&&(t=process.env.DEBUG);return t},e.useColors=function(){if("undefined"!=typeof window&&window.process&&("renderer"===window.process.type||window.process.__nwjs))return!0;if("undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/(edge|trident)\/(\d+)/))return!1;return"undefined"!=typeof document&&document.documentElement&&document.documentElement.style&&document.documentElement.style.WebkitAppearance||"undefined"!=typeof window&&window.console&&(window.console.firebug||window.console.exception&&window.console.table)||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/firefox\/(\d+)/)&&parseInt(RegExp.$1,10)>=31||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/applewebkit\/(\d+)/)},e.storage=function(){try{return localStorage}catch(t){}}(),e.destroy=(r=!1,function(){r||(r=!0,console.warn("Instance method `debug.destroy()` is deprecated and no longer does anything. It will be removed in the next major version of `debug`."))}),e.colors=["#0000CC","#0000FF","#0033CC","#0033FF","#0066CC","#0066FF","#0099CC","#0099FF","#00CC00","#00CC33","#00CC66","#00CC99","#00CCCC","#00CCFF","#3300CC","#3300FF","#3333CC","#3333FF","#3366CC","#3366FF","#3399CC","#3399FF","#33CC00","#33CC33","#33CC66","#33CC99","#33CCCC","#33CCFF","#6600CC","#6600FF","#6633CC","#6633FF","#66CC00","#66CC33","#9900CC","#9900FF","#9933CC","#9933FF","#99CC00","#99CC33","#CC0000","#CC0033","#CC0066","#CC0099","#CC00CC","#CC00FF","#CC3300","#CC3333","#CC3366","#CC3399","#CC33CC","#CC33FF","#CC6600","#CC6633","#CC9900","#CC9933","#CCCC00","#CCCC33","#FF0000","#FF0033","#FF0066","#FF0099","#FF00CC","#FF00FF","#FF3300","#FF3333","#FF3366","#FF3399","#FF33CC","#FF33FF","#FF6600","#FF6633","#FF9900","#FF9933","#FFCC00","#FFCC33"],e.log=console.debug||console.log||function(){},t.exports=n(632)(e),t.exports.formatters.j=function(t){try{return JSON.stringify(t)}catch(e){return"[UnexpectedJSONParseError]: "+e.message}}},632:function(t,e,n){var r=n(182);t.exports=function(t){function e(t){var n,r,i,s=null;function u(){for(var t=arguments.length,r=new Array(t),o=0;o<t;o++)r[o]=arguments[o];if(u.enabled){var i=u,s=Number(new Date),c=s-(n||s);i.diff=c,i.prev=n,i.curr=s,n=s,r[0]=e.coerce(r[0]),"string"!=typeof r[0]&&r.unshift("%O");var a=0;r[0]=r[0].replace(/%([a-zA-Z%])/g,(function(t,n){if("%%"===t)return"%";a++;var o=e.formatters[n];if("function"==typeof o){var s=r[a];t=o.call(i,s),r.splice(a,1),a--}return t})),e.formatArgs.call(i,r);var f=i.log||e.log;f.apply(i,r)}}return u.namespace=t,u.useColors=e.useColors(),u.color=e.selectColor(t),u.extend=o,u.destroy=e.destroy,Object.defineProperty(u,"enabled",{enumerable:!0,configurable:!1,get:function(){return null!==s?s:(r!==e.namespaces&&(r=e.namespaces,i=e.enabled(t)),i)},set:function(t){s=t}}),"function"==typeof e.init&&e.init(u),u}function o(t,n){var r=e(this.namespace+(void 0===n?":":n)+t);return r.log=this.log,r}function i(t){return t.toString().substring(2,t.toString().length-2).replace(/\.\*\?$/,"*")}return e.debug=e,e.default=e,e.coerce=function(t){if(t instanceof Error)return t.stack||t.message;return t},e.disable=function(){var t=[].concat(r(e.names.map(i)),r(e.skips.map(i).map((function(t){return"-"+t})))).join(",");return e.enable(""),t},e.enable=function(t){var n;e.save(t),e.namespaces=t,e.names=[],e.skips=[];var r=("string"==typeof t?t:"").split(/[\s,]+/),o=r.length;for(n=0;n<o;n++)r[n]&&("-"===(t=r[n].replace(/\*/g,".*?"))[0]?e.skips.push(new RegExp("^"+t.substr(1)+"$")):e.names.push(new RegExp("^"+t+"$")))},e.enabled=function(t){if("*"===t[t.length-1])return!0;var n,r;for(n=0,r=e.skips.length;n<r;n++)if(e.skips[n].test(t))return!1;for(n=0,r=e.names.length;n<r;n++)if(e.names[n].test(t))return!0;return!1},e.humanize=n(378),e.destroy=function(){console.warn("Instance method `debug.destroy()` is deprecated and no longer does anything. It will be removed in the next major version of `debug`.")},Object.keys(t).forEach((function(n){e[n]=t[n]})),e.names=[],e.skips=[],e.formatters={},e.selectColor=function(t){for(var n=0,r=0;r<t.length;r++)n=(n<<5)-n+t.charCodeAt(r),n|=0;return e.colors[Math.abs(n)%e.colors.length]},e.enable(e.load()),e}},681:function(t){"use strict";t.exports=window["a8c-fse-common-data-stores"]},804:function(t){"use strict";t.exports=window.lodash},707:function(t){"use strict";t.exports=window.wp.data},531:function(t){"use strict";t.exports=window.wp.domReady},885:function(t){"use strict";t.exports=window.wp.editor},163:function(t){"use strict";t.exports=window.wp.i18n}},e={};function n(r){var o=e[r];if(void 0!==o)return o.exports;var i=e[r]={exports:{}};return t[r](i,i.exports,n),i.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var r={};!function(){"use strict";n.r(r);n(564)}(),window.EditingToolkit=r}();