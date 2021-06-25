let osToc = null;
let osSidebar = null;

// Enable OverlayScrollbars on sidebar and table of contents
document.addEventListener('DOMContentLoaded', function() {
    mediaBreakpointDownLarge();
});

window.addEventListener('resize', function() {
    mediaBreakpointDownLarge();
});

function mediaBreakpointDownLarge() {
    if (window.innerWidth <= 991.98) {
        // Check if OverlayScrollbars is initialized in the two elements
        if (osToc) {
            osToc.destroy();
        }
        if (osSidebar) {
            osSidebar.destroy();
        }
    } else {
        osToc = OverlayScrollbars(document.getElementById('table-of-contents'), { });
        osSidebar = OverlayScrollbars(document.getElementById('sidebar'), { });
    }
}

// Check if element exists
if (document.querySelector('.btn-toggle-nav .active')) {
    // Show collapse menu if any of its nested children is active
    let element = document.querySelector('.btn-toggle-nav .active');
    let node = [];
    while (!element.classList.contains('module-nav')) {
        node.unshift(element);
        element = element.parentNode;
        if (element.classList.contains('collapse')) {
            element.classList.add('show');
        }
    }
}