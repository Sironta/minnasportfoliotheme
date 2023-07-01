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

    const menuItem = document.querySelector('.menu-item-363');
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

    </script>

</body>
</html>

<!-- <script>
        const menuItem = document.querySelector('.menu-item-363');
        const subMenu = document.querySelector('.sub-menu');

        menuItem.addEventListener('mouseover', function() {
            subMenu.classList.add('open');
        });

        subMenu.addEventListener('mouseover', function() {
            subMenu.classList.toggle('open');
        });

        subMenu.addEventListener('mouseout', function() {
            subMenu.classList.toggle('open');
            
        });

    </script> -->

