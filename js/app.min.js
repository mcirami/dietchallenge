/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("jQuery(document).ready(function ($) {\n  $('.submit_wrap').hide();\n  $('.form-check-input').click(function () {\n    if ($(this).attr(\"value\") === \"cashapp\") {\n      $('#paypal-button-container').hide();\n      $('#cash-app-container').show();\n      $('.submit_wrap').show();\n    } else {\n      $('#paypal-button-container').show();\n      $('#cash-app-container').hide();\n      $('.submit_wrap').hide();\n    }\n  });\n});\n/*\n\nimport { BrowserRouter as Router, Route, Link } from 'react-router-dom';\n\nimport React from \"react\";\nimport ReactDOM from \"react-dom\";\nimport Header from \"components/header\";\n\nconst App = () => (\n\t<Router>\n\t\t<div>\n\t\t\t<Header />\n\t\t\t<section className=\"section container content\">\n\t\t\t\t<Route exact path=\"/\" component={PostList} />\n\t\t\t\t<Route path=\"/:slug\" component={PostView} />\n\t\t\t</section>\n\t\t</div>\n\t</Router>\n);\n\nReactDOM.render(<App />, document.getElementById(\"app\"));*///# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzPzllMGUiXSwibmFtZXMiOlsialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSIsIiQiLCJoaWRlIiwiY2xpY2siLCJhdHRyIiwic2hvdyJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixVQUFTQyxDQUFULEVBQVk7QUFFbENBLEdBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JDLElBQWxCO0FBRUFELEdBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCRSxLQUF2QixDQUE2QixZQUFVO0FBQ3RDLFFBQUdGLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsSUFBUixDQUFhLE9BQWIsTUFBMEIsU0FBN0IsRUFBd0M7QUFDdkNILE9BQUMsQ0FBQywwQkFBRCxDQUFELENBQThCQyxJQUE5QjtBQUNBRCxPQUFDLENBQUMscUJBQUQsQ0FBRCxDQUF5QkksSUFBekI7QUFDQUosT0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQkksSUFBbEI7QUFDQSxLQUpELE1BSU87QUFDTkosT0FBQyxDQUFDLDBCQUFELENBQUQsQ0FBOEJJLElBQTlCO0FBQ0FKLE9BQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCQyxJQUF6QjtBQUNBRCxPQUFDLENBQUMsY0FBRCxDQUFELENBQWtCQyxJQUFsQjtBQUNBO0FBQ0QsR0FWRDtBQWFBLENBakJEO0FBa0JBIiwiZmlsZSI6Ii4vYXNzZXRzL2pzL2FwcC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkge1xuXG5cdCQoJy5zdWJtaXRfd3JhcCcpLmhpZGUoKTtcblxuXHQkKCcuZm9ybS1jaGVjay1pbnB1dCcpLmNsaWNrKGZ1bmN0aW9uKCl7XG5cdFx0aWYoJCh0aGlzKS5hdHRyKFwidmFsdWVcIikgPT09IFwiY2FzaGFwcFwiKSB7XG5cdFx0XHQkKCcjcGF5cGFsLWJ1dHRvbi1jb250YWluZXInKS5oaWRlKCk7XG5cdFx0XHQkKCcjY2FzaC1hcHAtY29udGFpbmVyJykuc2hvdygpO1xuXHRcdFx0JCgnLnN1Ym1pdF93cmFwJykuc2hvdygpO1xuXHRcdH0gZWxzZSB7XG5cdFx0XHQkKCcjcGF5cGFsLWJ1dHRvbi1jb250YWluZXInKS5zaG93KCk7XG5cdFx0XHQkKCcjY2FzaC1hcHAtY29udGFpbmVyJykuaGlkZSgpO1xuXHRcdFx0JCgnLnN1Ym1pdF93cmFwJykuaGlkZSgpO1xuXHRcdH1cblx0fSk7XG5cblxufSk7XG4vKlxuXG5pbXBvcnQgeyBCcm93c2VyUm91dGVyIGFzIFJvdXRlciwgUm91dGUsIExpbmsgfSBmcm9tICdyZWFjdC1yb3V0ZXItZG9tJztcblxuaW1wb3J0IFJlYWN0IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IFJlYWN0RE9NIGZyb20gXCJyZWFjdC1kb21cIjtcbmltcG9ydCBIZWFkZXIgZnJvbSBcImNvbXBvbmVudHMvaGVhZGVyXCI7XG5cbmNvbnN0IEFwcCA9ICgpID0+IChcblx0PFJvdXRlcj5cblx0XHQ8ZGl2PlxuXHRcdFx0PEhlYWRlciAvPlxuXHRcdFx0PHNlY3Rpb24gY2xhc3NOYW1lPVwic2VjdGlvbiBjb250YWluZXIgY29udGVudFwiPlxuXHRcdFx0XHQ8Um91dGUgZXhhY3QgcGF0aD1cIi9cIiBjb21wb25lbnQ9e1Bvc3RMaXN0fSAvPlxuXHRcdFx0XHQ8Um91dGUgcGF0aD1cIi86c2x1Z1wiIGNvbXBvbmVudD17UG9zdFZpZXd9IC8+XG5cdFx0XHQ8L3NlY3Rpb24+XG5cdFx0PC9kaXY+XG5cdDwvUm91dGVyPlxuKTtcblxuUmVhY3RET00ucmVuZGVyKDxBcHAgLz4sIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYXBwXCIpKTsqL1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./assets/js/app.js\n");

/***/ }),

/***/ "./assets/sass/app.scss":
/*!******************************!*\
  !*** ./assets/sass/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc2Fzcy9hcHAuc2Nzcz9mMjEzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vYXNzZXRzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./assets/sass/app.scss\n");

/***/ }),

/***/ 0:
/*!*******************************************************!*\
  !*** multi ./assets/js/app.js ./assets/sass/app.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/matteocirami/dev-valet/dietchallenge/wp-content/themes/dietchallenge/assets/js/app.js */"./assets/js/app.js");
module.exports = __webpack_require__(/*! /Users/matteocirami/dev-valet/dietchallenge/wp-content/themes/dietchallenge/assets/sass/app.scss */"./assets/sass/app.scss");


/***/ })

/******/ });