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
        if (osToc && osSidebar) {
            osToc.destroy();
            osSidebar.destroy();
        }
    } else {
        osToc = OverlayScrollbars(document.getElementById('table-of-contents'), { });
        osSidebar = OverlayScrollbars(document.getElementById('sidebar'), { });
    }
}

// Check if element exists
if (document.querySelector('.btn-toggle-nav .selected')) {
    // Show sidebar collapse menu if link is selected
    document.querySelector('.btn-toggle-nav .selected').closest('.collapse').classList.add('show');
}
