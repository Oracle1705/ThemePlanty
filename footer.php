</main>
<?php get_sidebar(); ?>
</div>
<footer>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer',
            'menu_class' => 'menu-class-footer',
        )
    );
    ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>