let osToc = new Object;
let osSidebar = new Object;

// Enable OverlayScrollbars on sidebar and table of contents
document.addEventListener('DOMContentLoaded', function() {
    mediaBreakpointDownLarge();
});

window.addEventListener('resize', function() {
    mediaBreakpointDownLarge();
});

function mediaBreakpointDownLarge() {
    if (window.innerWidth <= 991.98) {
        osToc.destroy();
        osSidebar.destroy();
    } else {
        osToc = OverlayScrollbars(document.querySelector('#table-of-contents'), { });
        osSidebar = OverlayScrollbars(document.querySelector('#sidebar'), { });
    }
}

// Show sidebar collapse menu if link is selected
document.querySelector('.btn-toggle-nav .selected').closest('.collapse').classList.add('show');
