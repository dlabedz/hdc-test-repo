/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/block-editor-scripts.js ***!
  \**********************************************/
wp.domReady(function () {
  wp.blocks.unregisterBlockStyle('core/button', 'outline');
  wp.blocks.unregisterBlockStyle('core/button', 'fill');
  wp.blocks.registerBlockStyle('core/button', {
    name: 'primary-button',
    label: 'Primary',
    isDefault: true
  });
  wp.blocks.registerBlockStyle('core/button', {
    name: 'secondary-button',
    label: 'Secondary'
  });
});
/******/ })()
;