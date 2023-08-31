</main>

</main>

    <footer class="container">
        <div class="footer container justify-space-between">
        <a href="<?php echo home_url(); ?>">
            <img class="minna-logo" id="footer-logo" src="<?php bloginfo("template_url") ?>/Logo.png" alt="">
        </a>
        <p class="tiny">Copyright 2023: Minna Mellajärvi</p>
    </footer>

<?php wp_footer(); ?>

    <script>

    /* MAIN NAVIGATION */

    document.addEventListener('DOMContentLoaded', function() {

        /* TOGGLE HAMBURGER MENU */

        const menuIcon = document.querySelector('.menu-icon');
        const mobileMenu = document.querySelector('.mobile-nav');

        menuIcon.addEventListener('click', function() {
            mobileMenu.classList.toggle('open');
        });

        // Function to hide the menu if screen width is large
        function hideMenuIfLargeScreen() {
        if (window.innerWidth > 960) { //breakpoint lg
            mobileMenu.classList.remove('open');
            }
        }

        // Attach the function to the window's resize event
        window.addEventListener('resize', hideMenuIfLargeScreen);

        // Call the function initially to handle the initial screen width
        hideMenuIfLargeScreen();

        /* TRIGGERING SUBMENU IN HAMBURGER MENU */

        const subMenuItems = document.querySelectorAll('.mobile-nav .menu-item-has-children');

        subMenuItems.forEach(function(subMenuItem) {
            const subMenu = subMenuItem.querySelector('.sub-menu');
            const menuItemLink = subMenuItem.querySelector('a');

            // Toggle sub-menu visibility when clicking on the parent menu item
            menuItemLink.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default click behavior

                // Toggle sub-menu visibility
                subMenu.style.display = subMenu.style.display === 'flex' ? 'none' : 'flex';
                // Toggle class for arrow style based on sub-menu visibility
                menuItemLink.classList.toggle('rotate'); // Toggle the rotate class

                // Update the arrow content based on class presence
                const arrow = menuItemLink.querySelector('a::after');
                if (menuItemLink.classList.contains('rotate')) {
                    arrow.textContent = '\u25BC'; // Unicode for downward arrow
                } else {
                    arrow.textContent = '\u25B6'; // Unicode for right arrow
                }
            });
        });
 
        /* TRIGGERING SUBMENU IN DESKTOP MAIN MENU */

        const menuItem = document.querySelector('.menu-item-has-children');
        const subMenu = document.querySelector('.sub-menu');

        menuItem.addEventListener('mouseover', function() {
            subMenu.style.display = 'flex';
        });

        menuItem.addEventListener('mouseout', function(event) {
            if (!isHoveredOverSubMenu(event)) {
                subMenu.style.display = 'none';
            }
        });

        subMenu.addEventListener('mouseover', function(event) {
            if (!isHoveredOverSubMenu(event)) {
                subMenu.style.display = 'flex';
            }
        });

        subMenu.addEventListener('mouseout', function(event) {
            if (!isHoveredOverSubMenu(event) && !menuItem.contains(event.relatedTarget)) {
                subMenu.style.display = 'none';
            }
        });

        // Helper function to check if the mouse is hovered over the subMenu or its descendants
            function isHoveredOverSubMenu(event) {
                const relatedTarget = event.relatedTarget;
                return relatedTarget === subMenu || subMenu.contains(relatedTarget);
            }

    }); //End of MAIN NAVIGATION



    /* CHANGING THE COLOR OF HEADER WHILE SCROLLING */

    window.addEventListener('scroll', function() {
    let headerContainer = document.getElementById('headerContainer');
    if (window.scrollY > 0) {
            headerContainer.style.transition = 'background-color 0.5s';
            headerContainer.style.backgroundColor = 'var(--secondary-color)';
        } else {
            headerContainer.style.transition = 'background-color 0.5s';
            headerContainer.style.backgroundColor = ''; // Reset to default color
        }
    });

    </script>

</body>
</html>
