import 'bootstrap/dist/js/bootstrap.bundle';
import 'overlayscrollbars';

// Initialize OverlayScrollbars on body element
document.addEventListener('DOMContentLoaded', function() {
    //The 1st argument are the elements to which the plugin shall be initialized
    //The 2nd argument has to be at least a empty object or a object with your desired options
    OverlayScrollbars(document.querySelectorAll('body'), { });
});