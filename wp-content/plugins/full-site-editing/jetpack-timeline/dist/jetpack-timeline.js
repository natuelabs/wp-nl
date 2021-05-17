!function(){var e={560:function(e,t,n){"use strict";function i(){return(i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(e[i]=n[i])}return e}).apply(this,arguments)}n.d(t,{Z:function(){return i}})},445:function(e,t,n){"use strict";var i=n(27),r=n(418),l=(0,i.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,i.createElement)(r.Path,{d:"M4 9v6h14V9H4zm8-4.8H4v1.5h8V4.2zM4 19.8h8v-1.5H4v1.5z"}));t.Z=l},996:function(e,t,n){"use strict";var i=n(27),r=n(418),l=(0,i.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,i.createElement)(r.Path,{d:"M6 15h14V9H6v6zm6-10.8v1.5h8V4.2h-8zm0 15.6h8v-1.5h-8v1.5z"}));t.Z=l},779:function(e,t){var n;
/*!
  Copyright (c) 2017 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/!function(){"use strict";var i={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var l=typeof n;if("string"===l||"number"===l)e.push(n);else if(Array.isArray(n)&&n.length){var o=r.apply(null,n);o&&e.push(o)}else if("object"===l)for(var a in n)i.call(n,a)&&n[a]&&e.push(a)}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(n=function(){return r}.apply(t,[]))||(e.exports=n)}()},156:function(){},524:function(){},615:function(e,t,n){"use strict";n.d(t,{_:function(){return l}});var i=n(27),r=n(163),__=r.__,l=function(e){var t=e.onClick;return(0,i.createElement)("button",{className:"block-editor-inserter__toggle timeline-item-appender components-button",type:"button",style:{zIndex:99999},onClick:t},(0,i.createElement)("svg",{width:"24",height:"24",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",role:"img","aria-hidden":"true",focusable:"false"},(0,i.createElement)("path",{d:"M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"}))," ",__("Add entry","full-site-editing"))}},764:function(e,t,n){"use strict";n.d(t,{E:function(){return l}});var i=n(27),r=n(997),l=function(){return(0,i.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},(0,i.createElement)(r.Path,{d:"M15 13v1.2h-2.2V6h-1.6v2.2H9V7H4v4h5V9.8h2.2V18h1.6v-2.2H15V17h5v-4z"}))}},63:function(e,t,n){"use strict";var i=n(173),r=n(424);n(156),n(524);(0,i.q)(),(0,r.j)()},424:function(e,t,n){"use strict";n.d(t,{j:function(){return p}});var i=n(27),r=n(399),l=n(314),o=n(997),a=n(707),c=n(163),s=n(445),u=n(996),m=n(779),d=n.n(m),g=n(764),__=c.__;function f(e){var t=e.alignment,n=e.clientId,l=e.toggleAlignment;return!1===(0,a.useSelect)((function(e){var t,i=e("core/block-editor").getBlockParents(n),r=e("core/block-editor").getBlock(i[0]);return null==r||null===(t=r.attributes)||void 0===t?void 0:t.isAlternating}))?null:(0,i.createElement)(r.BlockControls,null,(0,i.createElement)(o.ToolbarGroup,null,(0,i.createElement)(o.ToolbarButton,{onClick:function(){return l("left")},isActive:"left"===t,icon:s.Z,title:__("Left","full-site-editing")}),(0,i.createElement)(o.ToolbarButton,{onClick:function(){return l("right")},isActive:"right"===t,icon:u.Z,title:__("Right","full-site-editing")})))}function p(){(0,l.registerBlockType)("jetpack/timeline-item",{title:__("Timeline Entry","full-site-editing"),description:__("An entry on the timeline","full-site-editing"),icon:g.E,category:"widgets",parent:["jetpack/timeline"],edit:function(e){var t=e.attributes,n=e.clientId,l=e.setAttributes,o={backgroundColor:t.background},a={borderColor:t.background},c=d()("wp-block-jetpack-timeline-item",{"is-left":"left"===t.alignment,"is-right":"right"===t.alignment});return(0,i.createElement)(i.Fragment,null,(0,i.createElement)(f,{alignment:t.alignment,clientId:n,toggleAlignment:function(e){var n=e===t.alignment?"auto":e;l({alignment:n})}}),(0,i.createElement)("li",{style:o,className:c},(0,i.createElement)(r.InspectorControls,null,(0,i.createElement)(r.PanelColorSettings,{title:__("Color Settings","full-site-editing"),colorSettings:[{value:t.background,onChange:function(e){return l({background:e})},label:__("Background Color","full-site-editing")}]})),(0,i.createElement)("div",{className:"timeline-item"},(0,i.createElement)("div",{className:"timeline-item__bubble",style:a}),(0,i.createElement)("div",{className:"timeline-item__dot",style:o}),(0,i.createElement)(r.InnerBlocks,{template:[["core/paragraph"]]}))))},save:function(e){var t=e.attributes,n=d()({"is-left":"left"===t.alignment,"is-right":"right"===t.alignment}),l={backgroundColor:t.background},o={borderColor:t.background};return(0,i.createElement)("li",{style:l,className:n},(0,i.createElement)("div",{className:"timeline-item"},(0,i.createElement)("div",{className:"timeline-item__bubble",style:o}),(0,i.createElement)("div",{className:"timeline-item__dot",style:l}),(0,i.createElement)(r.InnerBlocks.Content,null)))},attributes:{alignment:{type:"string",default:"auto"},background:{type:"string",default:"#eeeeee"}}})}},173:function(e,t,n){"use strict";n.d(t,{q:function(){return f}});var i=n(560),r=n(27),l=n(399),o=n(314),a=n(997),c=n(707),s=n(163),u=n(779),m=n.n(u),d=n(764),g=n(615),__=s.__;function f(){(0,o.registerBlockType)("jetpack/timeline",{title:__("Timeline","full-site-editing"),description:__("Create a timeline of events.","full-site-editing"),icon:d.E,category:"widgets",example:{innerBlocks:[{name:"jetpack/timeline-item",innerBlocks:[{name:"core/heading",attributes:{content:__("Spring","full-site-editing")}}]},{name:"jetpack/timeline-item",innerBlocks:[{name:"core/heading",attributes:{content:__("Summer","full-site-editing")}}]},{name:"jetpack/timeline-item",innerBlocks:[{name:"core/heading",attributes:{content:__("Fall","full-site-editing")}}]},{name:"jetpack/timeline-item",innerBlocks:[{name:"core/heading",attributes:{content:__("Winter","full-site-editing")}}]}]},attributes:{isAlternating:{type:"attribute",selector:"ul",attribute:"data-is-alternating"}},edit:function(e){var t=e.clientId,n=e.attributes,i=e.setAttributes,s=n.isAlternating,u=function(){var e=(0,o.createBlock)("jetpack/timeline-item");(0,c.dispatch)("core/block-editor").insertBlock(e,void 0,t)},d=m()("wp-block-jetpack-timeline",{"is-alternating":s});return(0,r.createElement)(r.Fragment,null,(0,r.createElement)(l.InspectorControls,null,(0,r.createElement)(a.PanelBody,{title:__("Timeline settings","full-site-editing")},(0,r.createElement)(a.ToggleControl,{label:__("Alternate items","full-site-editing"),onChange:function(){return i({isAlternating:!s})},checked:s}))),(0,r.createElement)("ul",{className:d},(0,r.createElement)(l.InnerBlocks,{allowedBlocks:["jetpack/timeline-item"],template:[["jetpack/timeline-item"]],renderAppender:function(){return(0,r.createElement)(g._,{onClick:u})}})))},save:function(e){var t=e.attributes.isAlternating,n=m()("wp-block-jetpack-timeline",{"is-alternating":t}),o="boolean"==typeof t?{"data-is-alternating":t}:null;return(0,r.createElement)("ul",(0,i.Z)({className:n},o),(0,r.createElement)(l.InnerBlocks.Content,null))}})}},399:function(e){"use strict";e.exports=window.wp.blockEditor},314:function(e){"use strict";e.exports=window.wp.blocks},997:function(e){"use strict";e.exports=window.wp.components},707:function(e){"use strict";e.exports=window.wp.data},27:function(e){"use strict";e.exports=window.wp.element},163:function(e){"use strict";e.exports=window.wp.i18n},418:function(e){"use strict";e.exports=window.wp.primitives}},t={};function n(i){var r=t[i];if(void 0!==r)return r.exports;var l=t[i]={exports:{}};return e[i](l,l.exports,n),l.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var i={};!function(){"use strict";n.r(i);n(63)}(),window.EditingToolkit=i}();