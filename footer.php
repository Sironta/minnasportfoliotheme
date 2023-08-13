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

    //TOGGLE HAMBURGER MENU

    const menuIcon = document.querySelector('.menu-icon');
    const mobileMenu = document.querySelector('.mobileNav');

    menuIcon.addEventListener('click', function() {
        mobileMenu.classList.toggle('open');
    });

    //TRIGGERING SUBMENU 

    const menuItem = document.querySelector('.menu-item-465');
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

    //CHANGING THE COLOR OF HEADER WHILE SCROLLING

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


<!-- Next up:
- Adding an arrow to Portfolio in the hamburger menu
- Making the arrow open the submenu
- Clicking just portfolio should still open Portfolio main page
 -->
