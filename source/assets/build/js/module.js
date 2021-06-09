/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./source/_assets/js/module.js ***!
  \*************************************/
var osToc = null;
var osSidebar = null; // Enable OverlayScrollbars on sidebar and table of contents

document.addEventListener('DOMContentLoaded', function () {
  mediaBreakpointDownLarge();
});
window.addEventListener('resize', function () {
  mediaBreakpointDownLarge();
});

function mediaBreakpointDownLarge() {
  if (window.innerWidth <= 991.98) {
    // Check if OverlayScrollbars is initialized in the two elements
    if (osToc && osSidebar) {
      osToc.destroy();
      osSidebar.destroy();
    }
  } else {
    osToc = OverlayScrollbars(document.getElementById('table-of-contents'), {});
    osSidebar = OverlayScrollbars(document.getElementById('sidebar'), {});
  }
} // Check if element exists


if (document.querySelector('.btn-toggle-nav .selected')) {
  // Show collapse menu if any of its nested children is selected
  var element = document.querySelector('.btn-toggle-nav .selected');
  var node = [];

  while (!element.classList.contains('module-nav')) {
    node.unshift(element);
    element = element.parentNode;

    if (element.classList.contains('collapse')) {
      element.classList.add('show');
    }
  }
}
/******/ })()
;