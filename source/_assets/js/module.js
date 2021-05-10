let osToc = new Object;
let osSidebar = new Object;

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