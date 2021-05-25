import 'bootstrap/dist/js/bootstrap.bundle';
import 'overlayscrollbars';

let osBody = new Object;

// Initialize OverlayScrollbars on body element
document.addEventListener('DOMContentLoaded', function() {
    //The 1st argument are the elements to which the plugin shall be initialized
    //The 2nd argument has to be at least a empty object or a object with your desired options
    osBody = OverlayScrollbars(document.querySelectorAll('body'), { });

    // Check if element exists
    if (document.querySelectorAll('.modal-body')) {
        // Initialize OverlayScrollbars on .modal-body
        OverlayScrollbars(document.querySelectorAll('.modal-body'), { });
    }
});

// Check if element exists
if (document.querySelector('.modal')) {
    const modal = document.querySelector('.modal');

    // Hide OverlayScrollbars on body when modal is shown
    modal.addEventListener('show.bs.modal', function (event) {
        osBody.options('scrollbars.visibility', 'hidden');
    });

    // Show OverlayScrollbars on body when modal is hidden
    modal.addEventListener('hide.bs.modal', function (event) {
        osBody.options('scrollbars.visibility', 'auto');
    });

}
