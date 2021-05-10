let toc = new Object;

document.addEventListener('DOMContentLoaded', function() {
    mediaBreakpointDownLarge();
});

window.addEventListener('resize', function() {
    mediaBreakpointDownLarge();
});

function mediaBreakpointDownLarge() {
    if (window.innerWidth <= 991.98) {
        toc.destroy();
        console.log('HI');
    } else {
        toc = OverlayScrollbars(document.querySelector('#table-of-contents'), { });
        console.log('Hello');
    }
}