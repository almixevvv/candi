/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/editorjs-html/build/edjsHTML.node.js":
/*!***********************************************************!*\
  !*** ./node_modules/editorjs-html/build/edjsHTML.node.js ***!
  \***********************************************************/
/***/ ((module) => {

var e={delimiter:function(){return"<br/>"},header:function(e){var t=e.data;return"<h"+t.level+">"+t.text+"</h"+t.level+">"},paragraph:function(e){return"<p>"+e.data.text+"</p>"},list:function(e){var t=e.data,r="unordered"===t.style?"ul":"ol",n="";return t.items&&(n=t.items.map((function(e){return"<li>"+e+"</li>"})).reduce((function(e,t){return e+t}),"")),"<"+r+">"+n+"</"+r+">"},image:function(e){var t=e.data,r=t.caption?t.caption:"Image";return'<img src="'+(t.file&&t.file.url?t.file.url:t.file)+'" alt="'+r+'" />'},quote:function(e){var t=e.data;return"<blockquote>"+t.text+"</blockquote> - "+t.caption},code:function(e){return"<pre><code>"+e.data.code+"</code></pre>"},embed:function(e){var t=e.data;switch(t.service){case"vimeo":return'<iframe src="'+t.embed+'" height="'+t.height+'" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';case"youtube":return'<iframe width="'+t.width+'" height="'+t.height+'" src="'+t.embed+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';default:throw new Error('Unsupported embed service type. Supported are "youtube" and "vimeo"')}}};function t(e){return new Error('[31m The Parser function of type "'+e+'" is not defined. \n\n  Define your custom parser functions as: [34mhttps://github.com/pavittarx/editorjs-html#extend-for-custom-blocks [0m')}var r=function(n){void 0===n&&(n={});var i=Object.assign({},e,n);return{parse:function(e){return e.blocks.map((function(e){return i[e.type]?i[e.type](e):t(e.type)}))},parseBlock:function(e){return i[e.type]?i[e.type](e):t(e.type)},parseStrict:function(e){var n=e.blocks,o=r(i).validate({blocks:n});if(o.length)throw new Error("Parser Functions missing for blocks: "+o.toString());for(var u=[],a=0;a<n.length;a++){if(!i[n[a].type])throw t(n[a].type);u.push(i[n[a].type](n[a]))}return u},validate:function(e){var t=e.blocks.map((function(e){return e.type})).filter((function(e,t,r){return r.indexOf(e)===t})),r=Object.keys(i);return t.filter((function(e){return!r.includes(e)}))}}};module.exports=r;


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**************************************!*\
  !*** ./resources/js/editor/front.js ***!
  \**************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var editorjs_html__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! editorjs-html */ "./node_modules/editorjs-html/build/edjsHTML.node.js");
/* harmony import */ var editorjs_html__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(editorjs_html__WEBPACK_IMPORTED_MODULE_0__);
 //PARSE THE JSON VALUE

var jsonValue = document.getElementById('_field').textContent;
var jsonParse = JSON.parse(jsonValue);
var edjParser = editorjs_html__WEBPACK_IMPORTED_MODULE_0___default()();
var custom = edjParser.parse(jsonParse.contents);
var holder = document.getElementById('_holder'); //Clear the previous entry

holder.innerHTML = '';
custom.forEach(printOutput);

function printOutput(item, index) {
  holder.innerHTML += item;
}
})();

/******/ })()
;