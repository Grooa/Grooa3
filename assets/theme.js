var sideMenuOpen = false;

/**
 * Dropdown component.
 */
window.addEventListener('load', function () {

    function toggle(event) {
        var classList = event.target.parentNode.classList;

        if (classList.contains('active')) {
            classList.remove('active');
        } else {
            classList.add('active');
        }
    }

    // Bind event listeners
    var forEach = Array.prototype.forEach,
        dropdowns = document.querySelectorAll('*[data-component="dropdown"]');

    forEach.call(dropdowns, function (dropdown) {
        dropdown.children[0].addEventListener('click', toggle);
    });

    var hamburgerMenu = document.getElementById('hamburgerMenu');
    var closeHamburger = document.getElementById('closeMenu');
    var sideMenu = document.getElementById('sideMenu');

    if (hamburgerMenu && sideMenu) {
        hamburgerMenu.addEventListener('click', function() {
            sideMenuOpen = !sideMenuOpen;

            toggleSideMenu();
        });
    }

    // One can in theory have the side menu, without the close button
    if (closeHamburger) {
        closeHamburger.addEventListener('click', function() {
            sideMenuOpen = false;
            toggleSideMenu();
        });
    }

    function toggleSideMenu() {
        if (sideMenuOpen) {
            sideMenu.className = 'side-menu open';
        } else {
            sideMenu.className = 'side-menu';
        }
    }
});
