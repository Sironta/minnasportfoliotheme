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
        subMenu.classList.add('open');
    });

    menuItem.addEventListener('mouseout', function() {
        subMenu.classList.remove('open');
    });

    subMenu.addEventListener('mouseover', function() {
        subMenu.classList.add('open');
    });

    subMenu.addEventListener('mouseout', function(event) {
        if (!menuItem.contains(event.relatedTarget)) {
            subMenu.classList.remove('open');
        }
    });

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

